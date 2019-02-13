@extends('backend.master')
@section('title', 'User')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-user"></i>
        User Table</div>
    <div class="card-body">
        <div>
            <a class="btn btn-success" href="{{ route('adduser') }}">Add New User</a>
        </div>
        <hr/>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>LoginName</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Ban</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="{{ route('updateuser') }}">user name</a></td>
                        <td>login name</td>
                        <td>email@gmail.com</td>
                        <td>admin</td>
                        <td>no</td>
                        <td>                         
                            {!! Form::open(['method' => 'POST']) !!}                                                                                                
                                {!! Form::button('Delete', ['class' => 'btn btn-danger']) !!}                              
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
@endsection
