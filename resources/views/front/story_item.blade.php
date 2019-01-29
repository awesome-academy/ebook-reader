<div class="story d-flex" data-url="{{ route('story', ['id' => 1]) }}">
    <a href="#" class="on-story-preview">
        <img class="story-thumbnail" data-src="holder.js/160x240" />
    </a>
    <div class="story-details">
        <h5 class="story-title"><a href="#" class="on-story-preview">Story title</a></h5>
        <div class="story-uploader"><a href="#">@lang('app.by') MrKen</a></div>
        <div class="story-stats">
            <span class="view-count"><i class="fa fa-eye"></i> 1.1K</span>
            <span class="vote-count"><i class="fa fa-star"></i> 60.4 K</span>
            <span class="part-count"><i class="fa fa-list-ul"></i> 16</span>
        </div>
        <p class="story-summary">Some text about this story. Some text about this story. Some text
            about this story.</p>
        <div class="story-tags">
            <ul class="tag-items">
                <li><a href="{{ route('meta', ['slug' => 'love']) }}">love</a></li>
                <li><a href="{{ route('meta', ['slug' => 'action']) }}">action</a></li>
                <li><a href="{{ route('meta', ['slug' => 'humor']) }}">humor</a></li>
                <li><a href="{{ route('meta', ['slug' => 'adventure']) }}">adventure</a></li>
            </ul>
            <span class="on-story-preview num-not-show">+@lang('app.more_tag', ['count' => 18])</span>
        </div>
    </div>
</div>
