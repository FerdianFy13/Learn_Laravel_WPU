<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashPostController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        // core controller main layout
        return view('dashboard.post.index', [
            'title' => 'Dashboard',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        // create core main layout in the CRUD for Controller
        return view('dashboard.post.create', [
            'title' => 'Create Post',
            'categories' => Category::all(),
        ]);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  *
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        // ddd($request);
        // request for accept body input in user
        $validation = $request->validate([
            'title' => ['required', 'max:255', 'min:2'],
            'slug' => ['required', 'unique:posts', 'max:100', 'min:2'],
            'category_id' => ['required'],
            'image' => 'image|file|max:5120',
            'body' => ['required'],
        ]);

        if ($request->file('image')) {
            $validation['image'] = $request
                ->file('image')
                ->store('post-images');
        }

        $validation['user_id'] = auth()->user()->id;
        $validation['description'] = Str::limit(
            strip_tags($request->body),
            100
        );

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Post::create($validation);

        return redirect('/dashboard/post')->with(
            'success',
            'New Post created successfully add'
        );
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Post $post)
    {
        return view('dashboard.post.show', [
            "title" => "Show My Portfolio",
            "posts" => $post
        ]);
        // return $post;
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Post $post)
    {
        // edit all my post for admin dashboard in the layout
        return view('dashboard.post.update', [
            'title' => 'Update',
            'categories' => Category::all(),
            'post' => $post,
        ]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  return value for dashpostcomtroller in the following layout for admin
    //  */
    public function update(Request $request, Post $post)
    {
        //
        $validations = [
            'title' => ['required', 'max:255', 'min:2'],
            'category_id' => ['required'],
            'image' => 'image|file|max:5120',
            'body' => ['required'],
        ];

        // if ($request->file('image')) {
        //     $validation['image'] = $request->file('image')->store('post-images');
        // }

        if ($request->slug != $post->slug) {
            $validations['slug'] = [
                'required',
                'unique:posts',
                'max:100',
                'min:2',
            ];
        }

        $validationData = $request->validate($validations);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validationData['image'] = $request
                ->file('image')
                ->store('post-images');
        }

        $validationData['user_id'] = auth()->user()->id;
        $validationData['description'] = Str::limit(
            strip_tags($request->body),
            100
        );

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Post::where('id', $post->id)->update($validationData);

        return redirect('/dashboard/post')->with(
            'update',
            'Post updated successfully update'
        );
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(Post $post)
    {
        // destroy all post for blog in the admin dashboard layout
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/post')->with(
            'delete',
            'Post destroy successfully delete'
        );
    }

    public function checkSLug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}