<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use App\Repositories\SaveListRepository;
use Auth;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function library()
    {
        $stories = $this->getSaveStories(0);

        return view('front.library_save', compact('stories'));
    }

    public function archive()
    {
        $stories = $this->getSaveStories(1);

        return view('front.library_save', compact('stories'));
    }

    private function getSaveStories($is_archive = 0)
    {
        $user = Auth::user();
        $stories = $user->archives()
            ->with([
                'user',
                'chapters' => function ($query) {
                    $query->select('id', 'story_id', 'slug')->withCount(['votes']);
                },
            ])
            ->wherePivot('is_archive', $is_archive)
            ->paginate(config('app.per_page'));

        $stories->getCollection()->transform(function ($story) {
            $story->first_chapter = $story->chapters->sortBy('id')->first();
            $story->first_chapter->slug = $story->slug . '-' . $story->first_chapter->slug;

            return $story;
        });

        return $stories;
    }

    public function list()
    {
        return view('front.library_list');
    }
}
