<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact-us.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $validatedData  = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'phone' =>'required|string|max:10',
            'company' =>'required|string|max:255',
            'message' =>'nullable|string',
            'file'=>'nullable|file|mimes:pdf,jpg,png,gif|max:131072',
        ]);

        $filePath = null;

        if($request->hasFile('file')) {
            $file= $request->file('file');

            if($file->isValid()){
                $extension = $request->file('file')->getClientOriginalExtension();
                $filename = Str::slug($validatedData['name']) . '.' . $extension;
                $filePath =$request->file('file')->storeAs('files',$filename,'public');
            }

        }

        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'] ?? null,
            'company' => $validatedData['company'] ?? null,
            'message' => $validatedData['message'] ?? null,
            'file' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Your request has been submitted successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
