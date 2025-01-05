<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags  =Tag::latest()->paginate(10);
        return view('Tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',

        ]);


        //Create a new Tag

        $tag= Tag::create([
            'name' => $request->input('name'),
            'guard_name' =>'web'

        ]);

        return redirect()->route('tags.index')->with('success', 'Tag created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string',

        ]);

        $tag->update([
            'name' => $request->name,

        ]);

        return redirect()->route('tags.index')->with('success','Tag Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with(['success'=>'Successfully Tag Deleted']);
    }

    public function delete( Tag $tag){
        return view('tags.delete',compact('tag'));
    }
}
