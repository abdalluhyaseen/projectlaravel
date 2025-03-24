<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $contacts = Contact::all();
         return view("dashbord.layout.Contact_Crud.index", compact("contacts"));
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view("public.layout.contact");
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // تحقق من صحة البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // تخزين الرسالة في قاعدة البيانات
        Contact::create($validated);

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('contacts.index')->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
