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
            <!-- <div id="table" class="table-editable">
                <span class="table-add float-end mb-3 me-2">
                </span> -->
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Born Date</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="">
                            <td contenteditable="true">{{ $user->username }}</td>
                            <td contenteditable="true">{{ $user->name }}</td>
                            <td contenteditable="true">{{ $user->born_date }}</td>
                            <td contenteditable="true">{{ $user->phone }}</td>
                            <td contenteditable="true">{{ $user->email }}</td>
                            <td>
                                <form action="{{ url('/category', ['id' => $user->id]) }}" method="post" onclick="return confirm('Yain ingin menghapus data?')">
                                    @method('delete')
                                    @csrf    
                                    <button  type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection