<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    protected $story;

    public function __construct(StoryRepository $story)
    {
        $this->story = $story;
    }

    public function story($id, Request $request)
    {
        if ($request->ajax()) {
            return $this->ajaxStoryInfo($id);
        } else {
            return $this->getStoryInfo($id);
        }
    }

    private function ajaxStoryInfo($id)
    {
        $story = $this->story->with([
            'metas',
            'chapters' => function ($query) {
                return $query->withCount('votes');
            },
            'user',
        ])->withCount(['metas', 'chapters'])->findOrFail($id);

        return view('front.story_preview', compact('story'));
    }

    private function getStoryInfo($id)
    {
        
    }
}
