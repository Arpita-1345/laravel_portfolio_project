<?php

namespace App\Http\Controllers;
use App\models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactFormController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $contacts = contact::all();
        return view ('pages.contact.list', compact('contacts'));
    }

    public function create()
    {
        return view('pages.contact.create');
    }

    public function storeemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'call' => 'required|string',
            'location' => 'required|string',
        ]);

        $contact = Contact::first();
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->location = $request->location;

        $contact ->save();

        return redirect()->route('admin.contact.create')->with('success','New contact Created Successfully');


    }
    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
   
       $contact = Contact::find($id);
        return view('pages.contact.edit', compact('contact'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'email' => 'required|string',  
            'call' => 'required|string', 
            'location' => 'required|string', 
        ]);

        $contact = Contact::find($id);
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->location = $request->location;

        $contact->save();

        return redirect()->route('admin.contact.list')->with('success','Contact Updated Successfully');
    }

    public function destroy(string $id)
    {
       $contact = Contact::find($id);
      $contact ->delete();
      return redirect()->route('admin.contact.list')->with('success','contact deleted successfully');
    }
    public function store()
    {
        $contact_form_data = request()->all();
        $contacts = contact::first()->toarray();
        Mail::to($contacts["email"])->send(new ContactFormMail( $contact_form_data));
        return redirect()->route('welcome')->with('success','Your message has been submitted successfully');
    }
}
