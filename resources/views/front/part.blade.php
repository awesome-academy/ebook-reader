@extends('front.layouts.master')
@section('title', 'Chapter title')
@section('content')
<div id="story-reading">
    <div id="top-bar" class="fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="top-bar-story dropdown">
                <button class="btn btn-toc dropdown-toggle" type="button" id="chaptersList" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="cover cover-xxs float-left">
                        <img src="holder.js/64x100" />
                    </span>
                    <span class="info">
                        <span class="story-title">Story title</span>
                        <small>@lang('app.by') Administrator</small>
                    </span>
                </button>
                <div class="dropdown-menu" aria-labelledby="chaptersList">
                    <div class="toc-header text-center">
                        <h6><a href="#">Story title</a></h6>
                        <small>@lang('app.table_of_contents')</small>
                    </div>
                    <div class="table-of-contents list-group list-group-flush">
                        <a href="#" class="list-group-item">Chapter title</a>
                        <a href="#" class="list-group-item active">Chapter title</a>
                        <a href="#" class="list-group-item">Chapter title</a>
                    </div>
                </div>
            </div>
            <div class="top-bar-actions my-auto">
                <div class="d-inline-block dropdown">
                    <button class="btn btn-primary" id="saveStory" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">+</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="fa fa-bookmark fa-fw"></i> @lang('app.my_library')
                            (@lang('app.private'))</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-book fa-fw"></i> Reading list</a>
                        <div class="dropdown-divider"></div>
                        <div class="inputs d-flex">
                            {!! Form::text('name', null, ['class' => 'form-control form-control-sm', 'placeholder' =>
                            __('app.add_new_reading_list')]) !!}
                            {!! Form::submit('+', ['class' => 'btn btn-primary btn-sm']) !!}
                        </div>
                    </div>
                </div>
                <div class="d-inline-block button-vote">
                    <button class="btn btn-default voted"><i class="fa fa-star mr-2"></i> @lang('app.vote')</button>
                </div>
            </div>
        </div>
    </div>
    <div id="part-container">
        <article class="story-part">
            <div class="container">
                <div class="part-header text-center border-bottom">
                    <h2>Part title</h2>
                    <div class="story-stats">
                        <span class="count-view"><i class="fa fa-eye"></i> 15K</span>
                        <span class="count-vote"><i class="fa fa-star"></i> 1.5K</span>
                        <span class="count-part"><i class="fa fa-comment"></i> <a href="#">15</a></span>
                    </div>
                    <div class="story-author">
                        <a class="avatar avatar-sm mx-auto">
                            <img src="holder.js/24x24" />
                        </a>
                        @lang('app.by') <a href="#">admin</a>
                    </div>
                </div>
                <div class="part-content row">
                    <div class="col-md-1 col-lg-2 share-bar">
                        <div class="sticky-top">
                            <div class="title">@lang('app.share')</div>
                            <a class="social-share" href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-facebook"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <a class="social-share" href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-twitter"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span></a>
                            <a class="social-share" href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span></a>
                            <a class="social-share" href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-code fa-stack-1x fa-inverse"></i>
                                </span></a>
                            <div class="social-share dropup">
                                <a class="social-share" href="#" data-toggle="dropdown">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-secondary"></i>
                                        <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        @lang('app.share_via_email')</a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        @lang('app.report_this_story')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 main-content">
                        <div class="content">
                            <pre>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil tempora quae ullam cupiditate autem amet nobis culpa! Officia sint libero id earum mollitia temporibus distinctio ab assumenda sapiente quod?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptate, pariatur, vel saepe tempore deserunt inventore nesciunt sequi molestiae commodi dolorem maxime nemo, accusantium sunt delectus aspernatur eaque numquam quaerat.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur officiis nam eaque, dolore saepe ut doloremque. Assumenda, aut. Nemo dolorem reprehenderit quod culpa vitae eligendi libero pariatur. Tempora, ex.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem adipisci a in quas inventore placeat iusto enim similique, excepturi, aspernatur nobis obcaecati corrupti possimus error quaerat debitis at temporibus dicta.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit assumenda sint unde? Aspernatur minima illo, officia nihil, eveniet molestias labore cum nam dolore distinctio provident at, soluta exercitationem velit necessitatibus.</p>
                            </pre>
                        </div>
                    </div>
                </div>
                <div class="part-footer row">
                    <div class="col-md-7 offset-md-1 col-lg-6 offset-lg-2">
                        <div class="next">
                            <a class="btn btn-primary btn-lg btn-block text-white">@lang('app.continue_reading_next_part')
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="part-actions d-flex justify-content-between mt-3">
                            <div class="actions my-auto">
                                <div class="d-inline-block dropdown button-save">
                                    <button class="btn" id="saveStory" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fa fa-plus"></i> @lang('app.add')</button>
                                    <div class="dropdown-menu dropdown-menu-left">
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
                                <div class="d-inline-block button-vote">
                                    <button class="btn btn-default unvoted"><i class="fa fa-star mr-2"></i> @lang('app.vote')</button>
                                </div>
                            </div>
                            <div class="share">
                                <a class="social-share" href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-facebook"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <a class="social-share" href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-twitter"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span></a>
                                <a class="social-share" href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-dark"></i>
                                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                    </span></a>
                                <a class="social-share" href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                        <i class="fa fa-code fa-stack-1x fa-inverse"></i>
                                    </span></a>
                                <div class="social-share dropdown">
                                    <a class="social-share" href="#" data-toggle="dropdown">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x text-secondary"></i>
                                            <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            @lang('app.share_via_email')</a>
                                        <a href="#" class="dropdown-item"><i class="fa fa-exclamation-circle"
                                                aria-hidden="true"></i> @lang('app.report_this_story')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part-comments mt-3" id="comments">
                            <div class="comment-form d-flex">
                                <div class="user-avatar">
                                    <div class="avatar avatar-md">
                                        <img src="holder.js/48x48" />
                                    </div>
                                </div>
                                <div class="comment-input flex-grow-1">
                                    <textarea name="text" id="comment-text" class="form-control" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="collection">
                                @for ($i = 0; $i < 3; $i++)
                                <div class="comment">
                                    <div class="col-avatar">
                                        <div class="avatar avatar sm">
                                            <img src="holder.js/32x32" />
                                        </div>
                                    </div>
                                    <div class="col-main">
                                        <div class="header">
                                            <div class="info">
                                                <a href="#">admin</a>
                                                <small>5 seconds ago</small>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn" data-toggle="dropdown"><i class="fa fa-ellipsis-h"
                                                        aria-hidden="true"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="fa fa-flag text-danger"
                                                            aria-hidden="true"></i> @lang('app.report_this_comment')</a>
                                                </div>
                                            </div>
                                        </div>
                                        <pre>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui facere aliquam, ea laborum fugiat expedita adipisci ab unde explicabo quia, cupiditate, vel excepturi non ratione iusto eius eum doloremque officiis.</pre>
                                        <div class="footer">
                                            <button class="btn btn-sm btn-link">{{ trans_choice('app.replies', 0) }}</button>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <button class="btn btn-light btn-block mt-3" id="loadMore">@lang('app.show_more') <i class="fa fa-angle-down"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="part-recommendations">
        <div class="container">
            <div class="h3 py-3">@lang('app.recommendations')</div>
            <div class="collection row">
                <div class="col-md-6">
                    @include('front.story_item')
                </div>
                <div class="col-md-6">
                    @include('front.story_item')
                </div>
            </div>
        </div>
    </div>
</div>
@stop
