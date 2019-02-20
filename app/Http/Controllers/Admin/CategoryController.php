<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Http\Requests\CategoryFormRequest;
use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Support\Facades\Lang;

class CategoryController extends Controller
{
    protected $cateRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->cateRepo = $categoryRepository;
    }

    public function index()
    {
        $cates = $this->cateRepo->all();
        $cate = new Meta();

        return view('backend.categories', compact('cates', 'cate'));
    }

    public function edit($id)
    {
        $cate = $this->cateRepo->findOrFail($id);
        $cates = $this->cateRepo->all();
       
        return view('backend.categories', compact('cate', 'cates'));
    }

    public function store(CategoryFormRequest $request)
    {
        $this->cateRepo->store($request);
        
        return redirect('/admin/categories')->with('status', __('tran.meta_create_status'));
    }

    public function create()
    {
        return view('backend.categories');
    }

    public function update($id, CategoryFormRequest $request)
    {
        $this->cateRepo->update($id, $request);

        return redirect('/admin/categories')->with('status', __('tran.meta_update_status'));
    }

    public function destroy($id)
    {
        $meta = $this->cateRepo->findOrFail($id);
        $meta->delete();
        
        return redirect('/admin/categories')->with('status', __('tran.meta_delete_status'));
    }
}
