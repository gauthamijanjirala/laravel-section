<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function index()
    {
        $section = Contact::orderBy('id','desc')->paginate(8);
        // dd($section->toArray());
        return view('contact.index', compact('section'));
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request)
    {
        // Validate data 
        $request->validate([
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required', 
        ]);
        $section = new Contact;
        $section->email = $request->email;
        $section->address = $request->address;
        $section->mobile = $request->mobile;

        $section->save();
        return redirect()->route('contact.index')->withsuccess('contact created');
    }
    public function edit($id)
    {
        $contact = Contact::where('id',$id)->first();

        return view('contact.edit', ['section' => $contact]);
        // dd($contact->all());
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);
        
        $data = contact::where('id',$id)->first();
        $data->email        = $request->email;
        $data->address      = $request->address;
        $data->mobile       = $request->mobile;
        $data->save();
        return redirect()->route('contact.index')->with('success','Contact has been updated successfully');
    }
    public function destroy($id)
    {
        $section = Contact::where('id',$id)->first();
        
        $section->delete();
        return back()->with('success','Contact has been deleted succesfully'); 
    }




}
