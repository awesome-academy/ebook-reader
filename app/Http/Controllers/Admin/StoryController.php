<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;
use App\Repositories\StoryRepository;
use Carbon\Carbon;

class StoryController extends Controller
{
    protected $story;

    public function __construct(StoryRepository $story)
    {
        $this->story = $story;
    }

    public function index()
    {
        $stories = $this->story->with('user')->get();

        return view('backend.stories.index', compact('stories'));
    }

    public function show($id)
    {
        $story = $this->story->with(['user', 'chapters'])->findOrFail($id);
        $metas = $story->categories;
        $cate = '';
        foreach ($metas as $meta) {
            $cate .= $meta->name . "\n";
        }
        $createAt = Carbon::parse($story['created_at']);
        $updateAt = Carbon::parse($story['updated_at']);

        return view('backend.stories.information', compact('story', 'createAt', 'updateAt', 'cate'));
    }

    public function destroy($id)
    {
        $user = $this->story->findOrFail($id);
        $user->delete();
        
        return redirect('/admin/stories')->with('status', __('tran.story_delete_status'));
    }

    public function admin()
    {
        return view('backend.index');
    }

    public function review()
    {
        return view('backend.review');
    }

    public function detail()
    {
        return view('backend.stories.detail');
    }
}
