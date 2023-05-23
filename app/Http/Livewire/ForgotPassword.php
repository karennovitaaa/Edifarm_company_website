<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    public function kirimOtp()
    {
        $user = User::where('email', $this->email)->first();
    
        // Proses pengiriman OTP ke email
        if ($user) {
            return dd($user);
            Session::flash('success', 'Email tidak ditemukan');
        } else {
            Session::flash('fail', 'Email tidak ditemukan');
        }
    }

    public function render()
    {
        return view('livewire.forgot-password');
    }
}
