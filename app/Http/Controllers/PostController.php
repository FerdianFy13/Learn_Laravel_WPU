<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    // controller portofolio post blog
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' in ' . $user->name;
        }

        return view('/portofolio', [
            "title" => "Portofolio" . $title,
            "active" => "portofolio",
            "name" => "Ferdian Firmansyah",
            "email" => "ferdianfy13@gmail.com",
            "school" => "Politeknik Negeri Banyuwangi",
            "post" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Framework Category",
            "active" => "portofolio",
            "posts" => $post,
        ]);
    }

    public function index2()
    {
        return view('portofolio', [
            "title" => 'Portofolio',
            "active" => "Portofolio"
        ]);
    }
}
