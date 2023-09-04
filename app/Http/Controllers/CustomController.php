<?php

namespace App\Http\Controllers;
// use App\Models\section;
use App\Models\News;
use File;



use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $section = News::orderBy('id','desc')->paginate(8);
        // dd($section->toArray());
        return view('news.index', compact('section'));
    }
    public function news()
    {
        return view('auth.news');
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        // Validate data 
        $request->validate([
            'title' => 'required',
            'description' => 'required', 
        ]);
        $section = new News;
        $section->title = $request->title;
        $section->description = $request->description;

        $section->save();
        return redirect()->route('news.index')->withsuccess('news created');
    }

    public function edit($id)
    {
        $sections = News::where('id',$id)->first();

        return view('news.edit', ['section' => $sections]);
    }

    // update to page.............
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $data = News::where('id',$id)->first();
        $data->title        = $request->title;
        $data->description  = $request->description;
        $data->save();
        return redirect()->route('news.index')->with('success','News has been updated successfully');
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

    public function destroy($id)
    {
        $section = News::where('id',$id)->first();
        
        $section->delete();
        return back()->with('success','News has been deleted succesfully'); 
    }


}
