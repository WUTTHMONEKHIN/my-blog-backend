<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Providers\AppServiceProvider\Paginator;

class BlogController extends Controller
{
    public function index() {

        $filters = request(['category', 'search', 'author']);
       
           return view('blogs.index', [
            'blogs' => Blog::with('category', 'author' )
            ->filter($filters)
            ->latest()
            ->paginate(3)->withQueryString(),
            'categories' => Category::all()
    
        ]);
     }

    public function show(Blog $blog) {

    
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs'=> Blog:: inRandomOrder()->take(3)->get()
    
        ]);
     }
}
