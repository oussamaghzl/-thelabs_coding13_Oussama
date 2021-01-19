<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Mail\MailSender;
use App\Models\Contact;
use App\Models\contactmail;
use App\Models\Email;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $newMessage = contactmail::all();

        return view('backend.mailBox',compact('newMessage'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function sendmail(Request $request)
    {
        $newMessage = new contactmail();

        $newMessage->name = $request->name;
        $newMessage->email = $request->email;
        $newMessage->subject = $request->subject;
        $newMessage->message = $request->message;

        $newMessage->save();

        $contact = [
            "name" => "Message de " . $request->name,
            'subject' => $request->subject,
            'message' => $request->message, 
        ];
        
        Mail::to('bencleyhd@gmail.com')->send(new ContactSender($contact));

        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
