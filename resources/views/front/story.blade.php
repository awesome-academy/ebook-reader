@extends('front.layouts.master')
@section('title', 'Story title')
@section('content')
<div id="story-landing">
    <header class="story-background holderjs" style="background-image: url('?holder.js/1920x600?bg=ccc');">
        <div class="container">
            <div class="cover">
                <img src="holder.js/176x275" height="281" width="180" />
            </div>
            <h1>Story title</h1>
            <div class="story-stats">
                <span title="@lang('app.view_count', ['count' => '284,843'])">@lang('app.view_count', ['count' => '284K'])</span>
                <span title="@lang('app.vote_count', ['count' => '19,283'])">@lang('app.vote_count', ['count' => '19.2K'])</span>
                <span>@lang('app.part_count', ['count' => 9])</span>
            </div>
            <div class="story-author">
                <a href="#" class="avatar avatar-md pull-left">
                    <img src="holder.js/48x48" width="48" height="48" alt="Jamie Harris" />
                </a>
                <strong>@lang('app.by') <a href="#">admin</a></strong>
                <small title="@lang('app.first_published'): Mar 08, 2016">
                    <span>@lang('app.completed')</span>
                </small>
            </div>
            <div id="story-share" class="story-share">
                <a class="share-facebook social-share" rel="nofollow" target="_blank" href="#">
                    <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
                <a class="share-twitter social-share" rel="nofollow" target="_blank" href="#">
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
                <a class="share-pinterest social-share" rel="nofollow" target="_blank" href="#">
                    <span class="fa fa-pinterest" aria-hidden="true"></span>
                </a>
                <a class="share-tumblr social-share" rel="nofollow" target="_blank" href="#">
                    <span class="fa fa-tumblr" aria-hidden="true"></span>
                </a>
                <a class="share-post-to-profile" href="#">
                    <span class="fa fa-user" aria-hidden="true"></span>
                </a>
                <div class="button-group position-relative d-inline-block">
                    <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-h"
                            aria-hidden="true"></span></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item share-embed" href="#" data-share-channel="embed">
                            <span class="fa fa-fw fa-code" aria-hidden="true"></span>
                            @lang('app.embed_story')
                        </a>
                        <a class="dropdown-item share-google_plus social-share" rel="nofollow" target="_blank" href="#">
                            <span class="fa fa-fw fa-google-plus" aria-hidden="true"></span>
                            @lang('app.share_via_google_plus')
                        </a>
                        <a class="dropdown-item share-email" href="#">
                            <span class="fa fa-fw fa-inbox" aria-hidden="true"></span>
                            @lang('app.share_via_email')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <main class="card card-no-top">
                    <div class="card-body">
                        <div class="story-actions">
                            <a href="{{ route('part', ['slug' => 'part-1']) }}" class="btn btn-primary btn-sm start-reading">@lang('app.read')</a>
                            <div class="d-inline-block dropdown button-save">
                                <button class="btn btn-sm btn-primary" id="saveStory" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">+</button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"><i class="fa fa-bookmark fa-fw"></i>
                                        @lang('app.my_library')
                                        (@lang('app.private'))</a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-book fa-fw"></i> Reading list</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="inputs d-flex">
                                        {!! Form::text('name', null, ['class' => 'form-control form-control-sm',
                                        'placeholder' =>
                                        __('app.add_new_reading_list')]) !!}
                                        {!! Form::submit('+', ['class' => 'btn btn-primary btn-sm']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="story-summary">
                            Some text about this story. Some text about this story. Some text about this story.
                        </h2>
                        <div class="story-tags">
                            <a href="{{ route('meta', ['slug' => 'love']) }}" class="tag-item">love</a>
                            <a href="{{ route('meta', ['slug' => 'action']) }}" class="tag-item">action</a>
                            <a href="{{ route('meta', ['slug' => 'humor']) }}" class="tag-item">humor</a>
                            <a href="{{ route('meta', ['slug' => 'adventure']) }}" class="tag-item">adventure</a>
                        </div>
                        <div class="story-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments"
                                        role="tab" aria-controls="comments" aria-selected="true">@lang('app.recent_comments')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="parts-tab" data-toggle="tab" href="#parts" role="tab"
                                        aria-controls="parts" aria-selected="false">@lang('app.table_of_contents')</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                                    <ul class="list-group list-group-flush list-comments">
                                        <li class="list-group-item">
                                            <div class="header clearfix">
                                                <div class="avatar avatar-sm">
                                                    <img src="holder.js/32x32" />
                                                </div>
                                                <div class="info">
                                                    <a class="username" href="#">Administrator</a> on <a class="chapername"
                                                        href="{{ route('part', ['id' => 1]) }}">Part title</a>
                                                    <small>Jan 1, 2019</small>
                                                </div>
                                            </div>
                                            <div class="content">Comment content</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="header clearfix">
                                                <div class="avatar avatar-sm">
                                                    <img src="holder.js/32x32" />
                                                </div>
                                                <div class="info">
                                                    <a class="username" href="#">Administrator</a> on <a class="chapername"
                                                        href="{{ route('part', ['id' => 1]) }}">Part title</a>
                                                    <small>Jan 1, 2019</small>
                                                </div>
                                            </div>
                                            <div class="content">Comment content</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="header clearfix">
                                                <div class="avatar avatar-sm">
                                                    <img src="holder.js/32x32" />
                                                </div>
                                                <div class="info">
                                                    <a class="username" href="#">Administrator</a> on <a class="chapername"
                                                        href="{{ route('part', ['id' => 1]) }}">Part title</a>
                                                    <small>Jan 1, 2019</small>
                                                </div>
                                            </div>
                                            <div class="content">Comment content</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="header clearfix">
                                                <div class="avatar avatar-sm">
                                                    <img src="holder.js/32x32" />
                                                </div>
                                                <div class="info">
                                                    <a class="username" href="#">Administrator</a> on <a class="chapername"
                                                        href="{{ route('part', ['id' => 1]) }}">Part title</a>
                                                    <small>Jan 1, 2019</small>
                                                </div>
                                            </div>
                                            <div class="content">Comment content</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="parts" role="tabpanel" aria-labelledby="parts-tab">
                                    <div class="list-group list-group-flush list-parts">
                                        <a href="#" class="list-group-item">Part 1</a>
                                        <a href="#" class="list-group-item">Part 2</a>
                                        <a href="#" class="list-group-item">Part 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-md-4">
                <div class="card card-no-top">
                    <div class="card-body pt-3">
                        <a href="#">@lang('app.report_story')</a>
                    </div>
                </div>
                <div class="similar-stories card card-simple-header">
                    <h4 class="card-header">@lang('app.you_will_also_like')</h4>
                    <div class="card-body stories">
                        <div class="story" data-url="{{ route('story', ['id' => 1]) }}">
                            <a href="#" class="d-flex on-story-preview">
                                <div class="cover cover-sm">
                                    <img src="holder.js/80x125" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h4 class="story-title">Story title</h4>
                                    <small class="story-author">@lang('app.by') admin</small>
                                    <div class="story-stats small mt-auto">
                                        <span class="view-count"><i class="fa fa-eye"></i> 12K</span>
                                        <span class="vote-count"><i class="fa fa-star"></i> 1.2K</span>
                                        <span class="part-count"><i class="fa fa-list-ul"></i> 69</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="story" data-url="{{ route('story', ['id' => 1]) }}">
                            <a href="#" class="d-flex on-story-preview">
                                <div class="cover cover-sm">
                                    <img src="holder.js/80x125" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h4 class="story-title">Story title</h4>
                                    <small class="story-author">@lang('app.by') admin</small>
                                    <div class="story-stats small mt-auto">
                                        <span class="view-count"><i class="fa fa-eye"></i> 12K</span>
                                        <span class="vote-count"><i class="fa fa-star"></i> 1.2K</span>
                                        <span class="part-count"><i class="fa fa-list-ul"></i> 69</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
