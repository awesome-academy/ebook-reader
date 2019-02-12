<div class="row">
    <a class="col-6">
        <img src="holder.js/280x400" />
    </a>
    <div class="col-6 px-3 pt-3 d-flex flex-column">
        <h4>Story title</h4>
        <div class="story-stats">
            <span class="view-count"><i class="fa fa-eye"></i> 10.2k</span>
            <span class="vote-count"><i class="fa fa-star"></i> 1.2K</span>
            <span class="part-count"><i class="fa fa-list-ul"></i> 69</span>
        </div>
        <div class="actions">
            <a href="{{ route('story', ['id' => 1]) }}" class="btn btn-sm btn-primary start-reading">@lang('app.read')</a>
            <div class="d-inline-block dropdown button-save">
                <button class="btn btn-sm btn-primary" id="saveStory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+</button>
                <div class="dropdown-menu dropdown-menu-right">
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
        <div class="story-summary">Some text about this story. Some text about this story. Some text about this story.
            <a href="{{ route('story', ['slug' => 'test']) }}">@lang('app.more')</a></div>
        <div class="story-tags">
            <ul class="tag-items">
                <li><a href="{{ route('meta', ['slug' => 'love']) }}">love</a></li>
                <li><a href="{{ route('meta', ['slug' => 'action']) }}">action</a></li>
                <li><a href="{{ route('meta', ['slug' => 'humor']) }}">humor</a></li>
                <li><a href="{{ route('meta', ['slug' => 'adventure']) }}">adventure</a></li>
            </ul>
            <span class="num-not-show">+@lang('app.more_tag', ['count' => 16])</span>
        </div>
        <div class="story-info py-2 mt-auto">
            <span class="completed text">@lang('app.completed')</span>
            <time datime="a day ago">@lang('app.updated') a day ago</time>
        </div>
    </div>
</div>
