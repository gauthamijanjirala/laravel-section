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
        // dd('ss');
        // $section = News::orderBy('id','desc')->paginate(8);
        $section = News::orderBy('id','desc')->get();
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
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:100000',
            'description' => 'required', 
        ]);

        // Upload Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('news'), $imageName);
        
        $section = new News;
        $section->title = $request->title;
        $section->image = $imageName;
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
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:100000',
            'description' => 'required',
        ]);
        
        $data = News::where('id',$id)->first();
        if (isset($request->image)) {
            // Upload Image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('news'), $imageName);
            $data->image = $imageName;
        }
        $data->title        = $request->title;
        $data->description  = $request->description;
        $data->save();
        return redirect()->route('news.index')->with('success','News has been updated successfully');
    }

    public function destroy($id)
    {
        $section = News::where('id',$id)->first();
        $image_path = public_path('news/' . $section->image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        
        $section->delete();
        return back()->with('success','News has been deleted succesfully'); 
    }

    public function imageDelete() {
        $image_name = '$image';
        $image_path = public_path('news/'.$image_name);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
    }
    public function show($id)
    {
        $section = News::where('id', $id)->first();
        // dd($section->toArray());
        return view('news.show', ['news' => $section]);

    }

}
