<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $section = About::orderBy('id','desc')->paginate(8);
        // dd($section->toArray());
        return view('about.index', compact('section'));
    }
    public function create()
    {
        return view('about.create');
    }
    public function store(Request $request)
    {
        // Validate data 
        $request->validate([
            'text' => 'required',
            'description' => 'required|min:10', 
        ]);
        $section = new About;
        $section->text = $request->text;
        $section->description = $request->text;

        $section->save();
        return redirect()->route('about.index')->withsuccess('About has been created successfully');
    }
    public function edit($id)
    {
        $about = About::where('id',$id)->first();

        return view('about.edit', ['section' => $about]);
        // dd($about->all());
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'description' => 'required',
        ]);
        
        $data = About::where('id',$id)->first();
        $data->text        = $request->text;
        $data->description      = $request->description;
        $data->save();
        return redirect()->route('about.index')->with('success','About has been updated successfully');
    }
    public function destroy($id)
    {
        $section = About::where('id',$id)->first();
        
        $section->delete();
        return back()->with('success','About has been deleted succesfully'); 
    }
}
