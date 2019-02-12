@extends('backend.master')
@section('title', 'Category')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-user"></i>
        Meata Table</div>
    <hr>
    {!! Form::open(['method' => "POST", 'route' => ['categories']]) !!}
    <div class="form-group row">
        {!! Form::label('cate', 'Meta Name', ['class' => 'col-md-1 col-form-label']) !!}
        <div class="col-md-4">
            {!! Form::text('cate', null, ['class' => 'form-control', 'id' => 'cate', 'placeholder' => 'Enter
            Category']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('cate', 'Meta Type', ['class' => 'col-md-1 col-form-label']) !!}
        <div class="col-md-2">
            {!! Form::select('cate', ['category' => "Category" ,'tag' => 'Tag'], '',
            ['class' => 'form-control custom-select custom-select-lg mb-3']) !!}
        </div>
    </div>
    <div class="for-group row mb-0">
        <div class="col offset-md-1">
            {!! Form::submit('Create', ['class' => 'btn btn-primary' ]) !!}
        </div>
    </div>
    {!! Form::close() !!}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Meta Name</th>
                        <th>Meta Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>action</a></td>
                        <td>category</td>
                        <td><a class="btn btn-secondary" href="#"><i class="fas fa-pen"></i>Edit</a>
                            <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
@endsection
