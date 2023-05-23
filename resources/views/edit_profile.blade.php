@extends('sidebar')
@section('content')
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile row nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                        Informasi Pribadi
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                        Ganti Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Informasi Pribadi</h4>
                                    </div>
                                </div>
                                @foreach($reports as $report)
                                <div class="card-body">
                                    <form action="{{ url('profileup/'. $report->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                <img class="profile-pic" src="{{ $report->photo }}" alt="profile-pic">
                                                <div class="p-image">
                                                    <i class="ri-pencil-line upload-button text-white"></i>
                                                    <input class="file-upload" name="photo" type="file"/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname"  class="form-label">Nama Lengkap: </label>
                                                <input type="text" class="form-control" name="name" id="fname" value="{{ $report->name }}" placeholder="{{ $report->name }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname" class="form-label">Username:</label>
                                                <input type="text" class="form-control" name="username" id="lname" value="{{ $report->username }}" placeholder="{{ $report->username }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label d-block">Jenis Kelamin:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio10" value="Laki-laki" {{ ( $report->gender == "Laki-laki")? "checked" : "" }}>
                                                    <label class="form-check-label" for="inlineRadio10"> Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input  class="form-check-input" type="radio" name="gender" id="inlineRadio11" value="Perempuan" {{ ( $report->gender == "Perempuan")? "checked" : "" }}>
                                                    <label class="form-check-label" for="inlineRadio11">Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Tanggal Lahir:</label>
                                                <input type="date" class="form-control" name="born_date" id="dob" value="{{ $report->born_date }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Email:</label>
                                                <input type="email" class="form-control" name="email" id="dob" value="{{ $report->email }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Nomor HP:</label>
                                                <input type="text" class="form-control" name="phone" id="dob" value="{{ $report->phone }}">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label">Alamat:</label>
                                                <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">{{ $report->address }}</textarea>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label">Bio:</label>
                                                <textarea class="form-control" name="bio" rows="5" style="line-height: 22px;">{{ $report->bio }}</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                        <button type="reset" class="btn bg-soft-danger">Batal</button>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Ganti Password</h4>
                                </div>
                                </div>
                                <div class="card-body">
                                <form action="{{ url('passwordup') }}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="cpass" class="form-label">Password Lama:</label>
                                        <input type="Password" name="cpassword" class="form-control" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="npass" class="form-label">Password Baru:</label>
                                        <input type="Password" name="npassword" class="form-control" id="npass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="vpass" class="form-label">Konfirmasi Password:</label>
                                        <input type="Password" name="vpassword" class="form-control" id="vpass" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                    <button type="reset" class="btn bg-soft-danger">Batal</button>
                                </form>
                                </div>
                            </div>
                        </div>
      </div>
    </div>
    @endsection('content')
