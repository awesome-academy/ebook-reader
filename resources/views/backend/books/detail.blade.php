@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-book"></i>
        Chapter Table</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Completed</th>
                        <th>Vote</th>
                        <th>Create At</th>
                        <th>Update At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Numagician</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show chapter detail"
                                href="{{ route('chapter') }}">Làm ảo thuật với trí nhớ</a></td>
                        <td>Slug</td>
                        <td>Status</td>
                        <td>Completed</td>
                        <td>Vote</td>
                        <td>01/24/2019</td>
                        <td>01/24/2019</td>
                        <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Minh triết trong ăn uống của phương đông</th>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show chapter detail"
                                href="#">Hiểu về âm dương</a></td>
                        <td>Slug</td>
                        <td>Status</td>
                        <td>Completed</td>
                        <td>Vote</td>
                        <td>Create At</td>
                        <td>Update At</td>
                        <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
@endsection
