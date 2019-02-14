@extends('front.layouts.simple')
@section('title', __('app.register'))

@section('content')

{!! Form::open(['method' => 'POST', 'url' => route('register'), 'class' => 'form-register']) !!}
<div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal"><a href="{{ route('home') }}">{{ config('app.name') }}</a></h1>
</div>
<div class="form-label-group">
    {!! Form::text('full_name', null, ['id' => 'inputFullName', 'class' => 'form-control' , 'placeholder' => __('app.full_name'), 'required', 'autofocus']) !!}
    
    {!! Form::label('inputFullName', __('app.full_name')) !!}
</div>
<div class="form-label-group">
    {!! Form::email('email', null, ['id' => 'inputEmail', 'class' => 'form-control' , 'placeholder' => __('app.email_address'), 'required', 'autofocus']) !!}
    
    {!! Form::label('inputEmail', __('app.email_address')) !!}
</div>
<div class="form-label-group">
    {!! Form::text('user_name', null, ['id' => 'inputUserName', 'class' => 'form-control' , 'placeholder' => __('app.user_name'), 'required', 'autofocus']) !!}
    
    {!! Form::label('inputUserName', __('app.user_name')) !!}
</div>
<div class="form-label-group">
    {!! Form::password('password', ['id' => 'inputPassword', 'class' => 'form-control' , 'placeholder' => __('app.password'), 'required']) !!}
    
    {!! Form::label('inputPassword', __('app.password')) !!}
</div>

{!! Form::submit(__('app.register'), ['class' => 'btn btn-lg btn-primary btn-block']) !!}
<hr>
<div>
    @lang('app.already_registered') <a href="{{ route('login') }}">@lang('app.login')</a>
</div>
{!! Form::close() !!}
@endsection
