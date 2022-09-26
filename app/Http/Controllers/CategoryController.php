<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    //
    public function index1()
    {
        return view('categories', [
            'title' => 'Post Category',
            'active' => 'category',
            'categories' => Category::all(),
        ]);
    }

    public function index2(Category $category)
    {
        return view('portofolio', [
            'title' => "Post Category By $category->name",
            'active' => 'category',
            'post' => $category->post,
            'category' => $category->name,
        ]);
    }

    public function index3(User $user)
    {
        return view('portofolio', [
            'title' => "Post By Author $user->name",
            'active' => 'category',
            'post' => $user->post->load(['user', 'category']),
        ]);
    }
}
