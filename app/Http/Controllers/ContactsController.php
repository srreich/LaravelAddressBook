<?php

namespace App\Http\Controllers;

use DB;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    // Brings up the contact information for all contacts
    public function index()
    {
    	$contactList = Contact::all();
    	$page = 'contact.index';
    	if ( !empty($contactList->first()) )
    	{
    		return view($page, compact('contactList'));
    	}
    	else
    	{
    		return view($page);
    	}
    }

    // Brings up the contact information for a single contact
    public function show(Contact $contact)
    {
    	$page = 'contact.index';
   		return view($page, compact('contact'));
    }

    // Brings up the add contact page
    public function create()
    {
        return view('contact.create');
    }

    // Adds the contact to the database
    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->notes = $request->notes;

        $contact->save();
        return redirect('contacts');
    }

    // Brings up the edit/delete page for a selected contact
    public function edit(Contact $contact)
    {
        $page = 'contact.edit';
        return view($page, compact('contact'));
    }

    // Makes the edit for a given contact.
    // Previous contact info won't be affected by blank form fields.
    public function alter(Request $request, Contact $contact)
    {
        $contact->name = $request->name ? $request->name : $contact->name;
        $contact->phone = $request->phone ? $request->phone : $contact->phone;
        $contact->email = $request->email ? $request->email : $contact->email;
        $contact->address = $request->address ? $request->address : $contact->address;
        $contact->notes = $request->notes ? $request->notes : $contact->notes;

        $contact->save();

        return redirect('contacts');
    }

    // Deletes a contact
    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect('contacts');
    }
}
