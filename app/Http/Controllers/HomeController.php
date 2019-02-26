<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    protected $story;

    public function __construct(StoryRepository $story)
    {
        $this->story = $story;
    }

    public function index()
    {
        $archived_stories = Auth::check() ? $this->getArchivedStories() : collect();
        $recommended_stories = $this->getRecommendedStories();
        $recent_stories = $this->getRecentStories();

        return view('front.home', compact('archived_stories', 'recommended_stories', 'recent_stories'));
    }

    public function part()
    {
        return view('front.part');
    }

    private function getArchivedStories()
    {
        $user = Auth::user();
        if (Cache::has('_reading_stories_' . $user->id)) {
            $archived_stories = Cache::get('_reading_stories_' . $user->id);
        } else {
            $user->load([
                'saveLists.stories' => function ($query) {
                    return $query->withCount(['chapters', 'metas']);
                },
                'saveLists.stories.metas',
                'saveLists.stories.chapters' => function ($query) {
                    return $query->withCount('votes');
                },
                'saveLists.stories.user',
            ]);

            $archived_stories = $user->saveLists->map(function ($item) {
                return $item->stories;
            })->flatten(1);

            if ($archived_stories->count() > 5) {
                $archived_stories = $archived_stories->random(5);
            }
            Cache::put('_reading_stories_' . $user->id, $archived_stories, config('app.cache_time'));
        }
        
        return $archived_stories;
    }

    private function getRecommendedStories()
    {
        if (Cache::has('recommended_stories')) {
            $recommended_stories = Cache::get('recommended_stories');
        } else {
            $recommended_stories = $this->story->with([
                'metas',
                'chapters' => function ($query) {
                    return $query->withCount('votes');
                },
                'user',
            ])->withCount(['metas', 'chapters'])->where('is_recommended', 1)->limit(25)->get();

            if ($recommended_stories->count() > 5) {
                $recommended_stories = $recommended_stories->random(5);
            }
            Cache::put('recommended_stories', $recommended_stories, config('app.cache_time'));
        }

        return $recommended_stories;
    }

    private function getRecentStories()
    {
        if (Cache::has('recent_stories')) {
            $recent_stories = Cache::get('recent_stories');
        } else {
            $recent_stories = $this->story->with([
                'metas',
                'chapters' => function ($query) {
                    return $query->withCount('votes');
                },
                'user',
            ])->withCount(['metas', 'chapters'])->orderBy('updated_at', 'desc')->limit(25)->get();

            if ($recent_stories->count() > 5) {
                $recent_stories = $recent_stories->random(5);
            }
            Cache::put('recent_stories', $recent_stories, config('app.cache_time'));
        }
        return $recent_stories;
    }
}
