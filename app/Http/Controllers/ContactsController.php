<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\NewContact;
use DB;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //LOAD THE VIEW FROM; FETCH DATA FROM DB
        $contact = DB::select('SELECT * FROM contacts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //LOAD A VIEW
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SAVING DATA TO DB
        $contact = new Contact;
        $contact->contactName = $request->input('contactName');
        $contact->contactEmail = $request->input('contactEmail');
        $contact->contactSubject = $request->input('contactSubject');
        $contact->message = $request->input('message');
        $contact->save();

        //SENDING DATA TO EMAIL
        Mail::send(new NewContact($contact));

        return redirect('/contact')->with('success','Thanks for contacting us! We will be in touch with you shortly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //FETCH FROM THE DATABASE
       $contact = Contact::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
