<div class="sign-in-from">
    <h1 class="mb-0">Lupa Password</h1>
    <p>Masukkan Email dan OTP disini untuk mengganti password anda.</p>
    <form wire:submit.prevent="kirimOtp" class="mt-4">
        <div class="form-group">
            <label class="form-label" for="exampleInputEmail1">Email</label>
            <input type="text" wire:model.defer="email" class="form-control mb-0"  placeholder="Masukkan email anda" >
        </div>
        @if(session('success'))
        <div class="form-group">
            <label class="form-label" for="exampleInputPassword1">OTP</label>
            <input type="text" name="otp" class="form-control mb-0" placeholder="Masukkan kode otp anda">
        </div>
        @endif
        @if(session('fail'))
        <div class="form-group">
            <label class="form-label" for="exampleInputPassword1">OTP</label>
            <input type="text" name="otp" class="form-control mb-0" placeholder="{{session('fail')}}">
        </div>
        @endif
        <div class="d-inline-block w-100">
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
        </div>
    </form>
</div>