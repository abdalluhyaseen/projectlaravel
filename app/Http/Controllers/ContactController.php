<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

  public function index()
  {
       $contacts = Contact::all();
       return view("dashbord.layout.Contact_Crud.index", compact("contacts"));
  }





  public function create(){
      return view("public.layout.contact");}



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return view("public.layout.contact");
    }


  public function show(contact $contact){}




  public function edit(contact $contact){
  }

  public function update(Request $request, contact $contact){
  }
  public function destroy(Contact $contact){$contact->delete();
      return redirect()->route('contacts.index');}}
