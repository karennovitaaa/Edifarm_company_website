<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Http\Controllers\Session;
class ActivityController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'unique:users,username' ,
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'born_date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput($request->input());
        }

        $validated = $validator->validated();

        $user = User::create([
            'username' => $validated['username'],
            'name' => $validated['name'],
            'gender' => 'Laki-laki',
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'born_date' => $validated['born_date'],
            'photo' => 'photo.jpg',
            'level' => 'user',
        ]);

        return redirect('login')->with('toast_success', 'Registrasi Berhasil! Silahkan login dengan akun baru anda');
    }

    public function Login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'level' => 'admin'])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['level'] = $auth->level;
            $request->session()->put('nama', $auth->name);
            $request->session()->put('ids', $auth->id);
            $request->session()->put('username', $auth->username);
            $request->session()->put('photo', $auth->photo);

            return redirect('table');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'level' => 'user'])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['level'] = $auth->level;
            $request->session()->put('nama', $auth->name);
            $request->session()->put('ids', $auth->id);
            $request->session()->put('username', $auth->username);
            $request->session()->put('photo', $auth->photo);

            return redirect('postingan');
        } else {
            return back()->with('toast_error', 'Periksa kembali username atau password anda!')->withInput($request->input());
        }
    }

    public function otpSend(Request $request)
    {
        $OTP_base = "";
    
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput($request->input());
        }
    
        $email = $request->email;
        $user = User::where('email', $email)->first();
    
        if ($user) {
            $success['user'] = $user;
    
            $mail = new PHPMailer(true);
            $OTP_base = strval(mt_rand(100000, 999999));
    
            try {
                $mail->isSMTP();
                $mail->Host = 'leafeon.rapidplex.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'edifarm_company@okifirsyah.com';
                $mail->Password = '[~jcwaUM-Jh%';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
    
                $mail->setFrom('edifarm_company@okifirsyah.com', 'Edifarm_Company');
                $mail->addAddress($email);
                $mail->addAddress($email, 'Name');
    
                $mail->isHTML(true);
                $mail->Subject = 'Subject';
                $mail->Body = 'Kode OTP' . $OTP_base;
                $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                $mail->send();
    
                $user->otp = $OTP_base;
                $user->save();
    
                $request->session()->flash('Otp', $request->input('email'));
                $request->session()->flash('toast_success', 'Berhasil mengirim otp');
                return redirect('OtpValidasi')->with('toast_success', 'Berhasil mengirim otp');
            } catch (Exception $e) {
                return back()->with('toast_error', 'Terjadi kesalahan saat mengirim OTP')->withInput($request->input());
            }
        } else {
            return back()->with('toast_error', 'Email tidak ditemukan')->withInput($request->input());
        }
    }

    public function otpValidation(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'otp' => 'required'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput($request->input());
        }
    
        $email = $request->email;
        $otp = $request->otp;
        $user = User::where('email', $email)->where('otp', $otp)->first();
    
        if ($user) {
            $request->session()->flash('toast_success', 'Silahkan Mengganti password anda');
            $request->session()->put('ids', $user->id);
            return redirect('ChangePassword')->with('toast_success', 'Silahkan Mengganti password anda');
        } else {
            return back()->with('toast_error', 'Otp tidak valid')->withInput($request->input());
        }
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npassword' => 'required',
            'vpassword' => 'required|same:npassword',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput($request->input());
        }
        $validated = $validator->validated();
        $user = session('ids');

        $blog = User::where('id', $user)->update([
            'password' => bcrypt($validated['npassword']),

        ]);
        return redirect('login')->with('toast_success', 'Ganti Password Berhasil! Silahkan login dengan akun baru anda');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function loginPage()
    {
        return view('login');
    }

}
