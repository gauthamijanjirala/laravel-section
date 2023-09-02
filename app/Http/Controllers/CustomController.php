<?php

namespace App\Http\Controllers;
use App\Models\section;
use File;



use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $section = section::orderBy('id','desc')->paginate(5);
        // dd($section->toArray());
        return view('news.index', compact('section'));
    }
    public function news()
    {
        return view('auth.news');
    }
    public function create()
    {
        return view('layouts.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate data 
        $request->validate([
            'title' => 'required',
            'description' => 'required', 
        ]);
        $product = new section;
        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('auth.news')->withsuccess('news created');
    }

}
