@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-user"></i>
        Book Table</div>
    <div class="card-body">
        <div>
            <a class="btn btn-success" href="#">Add New Book</a>
        </div>
        <hr />
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Mature</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Completed</th>
                        <th>Recommended</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Chu Nam Phương</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show book detail"
                                href="{{ route('bookdetail') }}">Numagician</a></td>
                        <td>Mature</td>
                        <td>Status</td>
                        <td>Views</td>
                        <td>Completed</td>
                        <td>Recommended</td>
                        <td class="text-center"><a class="btn btn-secondary" href="{{ route('bookinfo') }}"><i class="fas fa-info-circle"></i>
                                Information</a>
                            <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Chu Nam Phương</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show book detail"
                                href="#">Numagician</a></td>
                        <td>Mature</td>
                        <td>Status</td>
                        <td>Views</td>
                        <td>Completed</td>
                        <td>Recommended</td>
                        <td class="text-center"><a class="btn btn-secondary" href="{{ route('bookinfo') }}"><i class="fas fa-info-circle"></i>
                                Information</a>
                            <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Chu Nam Phương</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show book detail"
                                href="#">Numagician</a></td>
                        <td>Mature</td>
                        <td>Status</td>
                        <td>Views</td>
                        <td>Completed</td>
                        <td>Recommended</td>
                        <td class="text-center"><a class="btn btn-secondary" href="{{ route('bookinfo') }}"><i class="fas fa-info-circle"></i>
                                Information</a>
                            <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
<!-- /.container-fluid -->
@endsection
