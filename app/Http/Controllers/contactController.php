<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function save(Request $req){

        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();
        return back()->with('message','Enquiry Submitted successfully',$contact);
     }

     public function display()
        {
            $contacts=Contact::all();
            return view('displayEnquiry')->with('contacts',$contacts);
           
        }
    
}
