@extends('backend.master')
@section('title', 'User')
@section('content')
<div class="card-body">
    <div class="text-center">
        <h1>Update User</h1>
    </div>
    {!! Form::open(['method' => "POST"]) !!}
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="form-group row">
        {!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-3">
            {!! Form::text('name', '', ['class' => 'form-control'.( $errors->has('name') ? ' is-invalid' : '' ),
            'autofocus']) !!}
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('address', 'Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-4">
            {!! Form::textarea('address', '', ['class' => 'form-control'.( $errors->has('address') ? ' is-invalid' : ''
            )]) !!}
        </div>
        @if ($errors->has('address'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group row">
        {!! Form::label('avatar', 'Avatar', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-1">
            <img src="" alt="Image" class="img-thumbnail">
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('cover-img', 'Cover Image', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-2">
            <img src="" alt="Image" class="img-thumbnail">
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('loginname', 'Login Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-4">
            {!! Form::text('loginname', '', ['class' => 'form-control'.( $errors->has('loginname') ? ' is-invalid' : ''
            )]) !!}
        </div>
        @if ($errors->has('loginname'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('loginname') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group row">
        {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-4">
            {!! Form::email('email', '', ['class' => 'form-control'.( $errors->has('email') ? ' is-invalid' : '' )])
            !!}
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('pasword', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-4">
            {!! Form::password('password', ['class' => 'form-control'.( $errors->has('password') ? ' is-invalid' : ''
            )]) !!}
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('password-confirm', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right'])
        !!}
        <div class="col-md-4">
            {!! Form::password('password_confirmation', ['class' => 'form-control'.( $errors->has('password') ? '
            is-invalid' : '' )]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('role', 'Role', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-2">
            {!! Form::select('role', ['normal' => "Normal" ,'admin' => 'Admin'],
            ['class' => 'form-control custom-select custom-select-lg mb-3']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('banner', 'Baner', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-2">
            {!! Form::select('ban', ['no' => 'No' ,'yes' => 'Yes'],
            ['class' => 'form-control custom-select custom-select-lg mb-3']) !!}

        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('about', 'About Me', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
        <div class="col-md-4">
            {!! Form::textarea('about', '', ['class' => 'form-control'.( $errors->has('about') ? ' is-invalid' : '' )])
            !!}
        </div>
        @if ($errors->has('about'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('about') }}</strong>
        </span>
        @endif
    </div>
    <div class="for-group row mb-0">
        <div class="col offset-md-4">
            {!! Form::button('Update', ['class' => 'btn btn-primary' ]) !!}
            {!! Form::reset('Cancel', ['class' => 'btn btn-secondary' ]) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
