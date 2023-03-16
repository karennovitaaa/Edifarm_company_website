@extends('AdminMaster')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
            <h3 class="text-white">Tabel User</h3>
            <p class="text-white"></p>
        </div>
        </div>
    </div>
    <div class="col-sm-12">
        <!-- Editable table -->
        <div class="card">
        
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-end mb-3 me-2">
                <button class="btn btn-sm btn-success"><i class="ri-add-fill"><span class="ps-1">Add New</span></i>
                </button>
                </span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Company Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Sort</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td contenteditable="true">Anna Mull</td>
                        <td contenteditable="true">35</td>
                        <td contenteditable="true">Portica</td>
                        <td contenteditable="true">USA</td>
                        <td contenteditable="true">Oregon</td>
                        <td>
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                        </td>
                        <td>
                            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr><tr class="">
                        <td contenteditable="true">Jon Mull</td>
                        <td contenteditable="true">55</td>
                        <td contenteditable="true">dow jones</td>
                        <td contenteditable="true">US</td>
                        <td contenteditable="true">London</td>
                        <td>
                            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                        </td>
                        <td>
                            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection