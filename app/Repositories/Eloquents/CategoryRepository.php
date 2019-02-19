<?php
namespace App\Repositories\Eloquents;

use App\Models\Meta;
use App\Http\Requests\CategoryFormRequest;
use App\Repositories\Eloquents\CategoryRepository;

class CategoryRepository
{
    public function all()
    {
        return Meta::all();
    }

    public function findOrFail($id)
    {
        return Meta::findOrFail($id);
    }


    public function update($id, CategoryFormRequest $request)
    {
        $meta = Meta::findOrFail($id);
        $meta->name = $request->get('meta_name');
        $meta->slug = $request->get('meta_name');
        $meta->type = $request->get('meta_type');
        $meta->save();
    }

    public function store(CategoryFormRequest $request)
    {
        $meta = new Meta;
        $meta->create([
            'name' => $request->get('meta_name'),
            'slug' => $request->get('meta_name'),
            'type' => ($request->get('meta_type') != 'category') ? 'category' : 'tag',
        ]);
    }
}
