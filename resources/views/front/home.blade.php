@extends('front.layouts.master')
@section('title', __('app.home'))
@section('content')
<div class="container">
    <div class="story-groups">
        <div class="group" id="archives">
            <div class="group-header">
                <h4 class="group-title"><a href="#">@lang('app.continue_reading')</a></h4>
                <div class="group-subtitle">@lang('app.continue_reading_description')</div>
            </div>
            <div class="owl-carousel">
                @include('front.story_item')
            </div>
        </div>
        <div class="group" id="recommendations">
            <div class="group-header">
                <h4 class="group-title"><a href="#">@lang('app.recommendations')</a></h4>
                <div class="group-subtitle">@lang('app.recommendations_description')</div>
            </div>
            <div class="owl-carousel">
                @include('front.story_item')
            </div>
        </div>
    </div>
</div>
@stop
