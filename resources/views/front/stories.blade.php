@extends('front.layouts.master')
@section('title', $meta->name)
@section('content')
<div class="stories">
    <div class="container">
        <div class="header py-3">
            <h1>{{ $meta->name }}</h1>
        </div>
        <div class="filter-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="hot-tab" data-toggle="tab" href="#hot" role="tab" aria-controls="hot" aria-selected="true">@lang('app.hot')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false" data-url="{{ route('meta_new_stories', ['slug' => $meta->name]) }}">@lang('app.new')</a>
                </li>
            </ul>
        </div>
        <div class="stories">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                    <div class="row">
                    @foreach ($meta->stories as $story)
                    <div class="col-md-6 col-story">
                        @include('front.story_item', ['story' => $story])
                    </div>
                    @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
