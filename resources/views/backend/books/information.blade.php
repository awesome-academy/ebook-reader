@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card-body">
    <div>
        <h1 class="text-success">Book Information</h1>
    </div>
    <div>
        {!! Form::open(['method' => "POST", 'route' => ['adduser']]) !!}
        <div class="form-group row">
            {!! Form::label('bookid', 'ID', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('bookid', '', ['class' => 'form-control', 'id' => 'bookid']) !!}
            </div>
            {!! Form::label('report', 'Report', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('report', '', ['class' => 'form-control', 'id' => 'report']) !!}
            </div>
            {!! Form::label('chapter', 'Chapter', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('chapter', '', ['class' => 'form-control', 'id' => 'chapter']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('image', 'Image', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                <img src="http://thuthuatphanmem.vn/uploads/2018/09/11/hinh-anh-dep-1_044126531.jpg" alt="" class="img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('author', 'Author', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-3">
                {!! Form::text('author', '', ['class' => 'form-control', 'id' => 'author']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('title', 'Title', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('slug', 'Slug', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                {!! Form::text('Slug', '', ['class' => 'form-control', 'id' => 'slug']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('summary', 'Summary', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::textarea('summary', '', ['class' => 'form-control', 'id' => 'summary']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('view', 'View', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::text('view', '', ['class' => 'form-control', 'id' => 'view']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-1"></div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('mature', null, null, ['id' => 'mature', 'class' => 'custom-control-input']) !!}
                {!! Form::label('mature', 'Mature', ['class' => 'custom-control-label']) !!}
            </div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('status', null, null, ['id' => 'status', 'class' => 'custom-control-input']) !!}
                {!! Form::label('status', 'Status', ['class' => 'custom-control-label']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-1"></div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('recommended', null, null, ['id' => 'recommended', 'class' =>
                'custom-control-input']) !!}
                {!! Form::label('recommended', 'Recommended', ['class' => 'custom-control-label']) !!}
            </div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('completed', null, null, ['id' => 'completed', 'class' => 'custom-control-input'])
                !!}
                {!! Form::label('completed', 'Completed', ['class' => 'custom-control-label']) !!}
            </div>
        </div>
        <div class="form-group row tag-form">
            {!! Form::label('tag', 'Tag', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                <h3>tags</h3>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('category', 'Category', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-3">
                {!! Form::text('category', '', ['class' => 'form-control', 'id' => 'category']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('create-at', 'Create At', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::date('create-at', '', ['class' => 'form-control', 'id' => 'create-at']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('update-at', 'Update At', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::date('update-at', '', ['class' => 'form-control', 'id' => 'update-at']) !!}
            </div>
        </div>
        <div class="for-group row mb-0">
            <div class="col offset-md-1">
                {!! Form::button('Save', ['class' => 'btn btn-primary' ]) !!}
                {!! Form::button('Back', ['class' => 'btn btn-primary' ]) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
