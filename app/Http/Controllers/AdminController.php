<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests\BlogFormRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'blogs' => auth()->user()->blogs()->latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('admin.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(BlogFormRequest $request)
    {   
        
        $cleanData = $request->validated();
        $cleanData['user_id'] = auth()->id();

        $cleanData['photo'] = '/storage/' . request('photo')->store('/blogs');
        
        Blog::create($cleanData);

        return redirect('/admin');
    }


    public function edit(Blog $blog)
    {   
        // if(!auth()->user()->can('edit', $blog)) {
            // abort(403);
        // }

        $this->authorize('edit',$blog);

        return view('admin.edit',[
            'categories' => Category::all(),
            'blog' => $blog
        ]);
    }

    public function update(Blog $blog, BlogFormRequest $request)
    {
        $cleanData = $request->validated();

        if(request('photo') ) {

            $cleanData['photo'] = '/storage/' . request('photo')->store('/blogs');

            File::delete(public_path($blog->photo));
        }

        $blog->update($cleanData);
        return redirect('/admin');
    }


    public function destroy(Blog $blog)
    {
         $blog->delete();
         
         return back();
    }
}
