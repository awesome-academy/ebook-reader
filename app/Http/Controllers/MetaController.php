<?php

namespace App\Http\Controllers;

use App\Repositories\MetaRepository;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    protected $meta;

    public function __construct(MetaRepository $meta)
    {
        $this->meta = $meta;
    }

    public function stories($meta_slug)
    {
        $meta = $this->meta->with([
            'stories' => function ($query) {
                return $query->orderBy('views', 'desc')->paginate(config('app.per_page'));
            }
        ])->findOrFailBySlug($meta_slug);

        return view('front.stories', compact('meta'));
    }

    public function newStories($meta_slug, Request $request)
    {
        if ($request->ajax()) {
            $meta = $this->meta->with([
                'stories' => function ($query) {
                    return $query->orderBy('updated_at', 'desc')->paginate(config('app.per_page'));
                }
            ])->findOrFailBySlug($meta_slug);
            $new_stories = $meta->stories;

            return view('front.new_stories', compact('new_stories'));
        }
    }
}
