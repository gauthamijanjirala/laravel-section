<?php

namespace App\Http\Controllers;
use App\Models\section;
use File;



use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $section = section::orderBy('id','desc')->paginate(8);
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
        $section = new section;
        $section->title = $request->title;
        $section->description = $request->description;

        $section->save();
        return redirect()->route('auth.news')->withsuccess('news created');
    }

    public function edit()
    {
        $sections = section::where('id')->first();

        return view('news.edit', ['section' => $sections]);
    }

    // update to page.............
    public function update(Request $request, $sections)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $sections->fill($request->post())->save();

        return redirect()->route('auth.news')->with('success');
    }

    // public function update(Request $request)
    // {
    //     // Validate data 
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         dd($request->all())
    //     ]);


        // $section = section::where('id')->first();
        // $section->title = $request->title;
        // $section->description = $request->description;

        // $section->save();
        // return redirect()->route('auth.news')->withsuccess('News Updated');
    // }

    public function destroy()
    {
        $section = section::where()->first();
        
        $section->delete();
        dd($section->all());
        // return back()->withSuccess('Product Deleted !!!'); 
    }


}
