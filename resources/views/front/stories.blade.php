@extends('front.layouts.master')
@section('title', 'Stories')
@section('content')
<div class="stories">
    <div class="container">
        <div class="header py-3">
            <h1>Category name</h1>
        </div>
        <div class="filter-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="hot-tab" data-toggle="tab" href="#hot" role="tab" aria-controls="hot"
                        aria-selected="true">@lang('app.hot')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new"
                        aria-selected="false">@lang('app.new')</a>
                </li>
            </ul>
        </div>
        <div class="stories">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane row fade show active" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                    <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 col-story">
                        @include('front.story_item')
                    </div>
                    @endfor
                    </div>
                </div>
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 col-story">
                        @include('front.story_item')
                    </div>
                    @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
