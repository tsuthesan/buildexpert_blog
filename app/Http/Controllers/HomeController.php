<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newTechnologyPosts = Blog::whereHas('tags', function ($query) {
            $query->where('name', 'new technology');
        })->latest()->take(3)->get();

        $reviewPosts = Blog::whereHas('tags', function ($query) {
            $query->where('name', 'Review');
        })->latest()->get();

        $newsPosts = Blog::whereHas('tags', function ($query) {
            $query->where('name', 'News');
        })->latest()->get();


        return view('home.index',compact('newTechnologyPosts','reviewPosts','newsPosts'));
    }
}
