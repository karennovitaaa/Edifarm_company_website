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
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                <img class="profile-pic" src="/images/user/11.png" alt="profile-pic">
                                                <div class="p-image">
                                                    <i class="ri-pencil-line upload-button text-white"></i>
                                                    <input class="file-upload" type="file" accept="image/*"/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname"  class="form-label">Nama Lengkap:</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Bni">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname" class="form-label">Nama Pengguna:</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Jhon">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="uname" class="form-label">Perusahaan:</label>
                                                <input type="text" class="form-control" id="uname" placeholder="Bni@01">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="cname" class="form-label">Kota Asal:</label>
                                                <input type="text" class="form-control" id="cname" placeholder="Atlanta">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label d-block">Jenis Kelamin:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option1">
                                                    <label class="form-check-label" for="inlineRadio10"> Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio11" value="option1">
                                                    <label class="form-check-label" for="inlineRadio11">Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Tanggal Lahir:</label>
                                                <input  class="form-control" id="dob" placeholder="1984-01-24">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Status Pernikahan:</label>
                                            <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Single</option>
                                                    <option>Married</option>
                                                    <option>Widowed</option>
                                                    <option>Divorced</option>
                                                    <option>Separated </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Umur:</label>
                                                <select class="form-select" aria-label="Default select example 2">
                                                <option>46-62</option>
                                                <option>63 > </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Negara:</label>
                                                <select class="form-select" aria-label="Default select example 3">
                                                <option>Caneda</option>
                                                <option>Noida</option>
                                                <option selected="">USA</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Provinsi:</label>
                                                <select class="form-select" aria-label="Default select example 4">
                                                    <option>California</option>
                                                    <option>Florida</option>
                                                    <option selected="">Georgia</option>
                                                    <option>Connecticut</option>
                                                    <option>Louisiana</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label">Alamat:</label>
                                                <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                                37 Cardinal Lane
                                                Petersburg, VA 23803
                                                United States of America
                                                Zip Code: 85001
                                                </textarea>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label">Bio:</label>
                                                <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                                37 Cardinal Lane
                                                Petersburg, VA 23803
                                                United States of America
                                                Zip Code: 85001
                                                </textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                </div>
                                <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="cpass" class="form-label">Current Password:</label>
                                        <a href="#" class="float-end">Forgot Password</a>
                                        <input type="Password" class="form-control" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="npass" class="form-label">New Password:</label>
                                        <input type="Password" class="form-control" id="npass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="vpass" class="form-label">Verify Password:</label>
                                        <input type="Password" class="form-control" id="vpass" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Cancle</button>
                                </form>
                                </div>
                            </div>
                        </div>
      </div>
    </div>
    @endsection('content')