<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct()
    {
//        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','show','overview']]);
//        $this->middleware('permission:blog-create', ['only' => ['create','store']]);
//        $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('published',1) ->orderBy('created_at', 'desc')->paginate(10);
        return view('blogs.index',compact('blogs'));
    }

    public function technology()
    {
        $tag = Tag::where('name', 'New Technology')->first();
        if (!$tag) {
            return redirect()->back()->with('error', 'new technology" not found.');
        }
        $blogs = $tag->blogs()->orderBy('created_at', 'desc')->paginate(20);
        return view('blogs.tech', compact('blogs'));
//        return view('blogs.tech');
    }
    public function review()
    {
        $tag = Tag::where('name', 'Review')->first();
        if (!$tag) {
            return redirect()->back()->with('error', 'Tag "new technology" not found.');
        }
        $blogs = $tag->blogs() ->orderBy('created_at', 'desc')->paginate(20);
        return view('blogs.review', compact('blogs'));

    }
    public function news()
    {
        $tag = Tag::where('name', 'News')->first();
        if (!$tag) {
            return redirect()->back()->with('error', 'Tag "new technology" not found.');
        }
        $blogs = $tag->blogs()->paginate(20);
        return view('blogs.news', compact('blogs'));
//       return view('blogs.news');
    }

    public function overview()
    {
        $blogs = Blog::latest()->paginate(20);

        return view('blogs.overview', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        $tags = Tag::all();
        return view('blogs.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'tags' =>'nullable|array',
            'tags.*' => 'integer',
//            'published' => 'nullable|boolean',
//            'image' => 'nullable|image|max:2048'
        ]);


        //Create a new Blog
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        $published = $request->has('published') ? 1 : 0;
        $blog= Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published' =>$published,
            'image' => $imagePath,

        ]);

        if($request->filled('tags')){
            $blog->tags()->attach($request->input('tags'));

        }



        return redirect('/blogs')->with('success', 'Post created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
