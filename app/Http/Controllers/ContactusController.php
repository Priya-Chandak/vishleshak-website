<?php

namespace App\Http\Controllers;
use Session;
use App\Contactus;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactusController extends Controller
{
    //
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storeContactDetails(Request $request)
    {
        //Model Validation

        $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'mobile_number' => 'required|min:10',
        'message' => 'required'
        ]);
        $contact = new Contactus($request->all());
        $contact->save();
        $data = array('name' => $request->name,'email'=>$request->email,'mobile_number'=>$request->mobile_number,'subject'=>$request->subject,'message_text'=>$request->message);

        Mail::send('emails.contactusemail', $data, function($message) use ($data)
      	{
      		$message->to('sayhi@vishleshak.io')
      		->subject('Website user contacted us.');
      	});

        Mail::send('emails.contactuswelcome', $data, function($message) use ($data)
      	{
      		$message->to($data['email'])
      		->subject('Thank you for contacting us.');
      	});
        return redirect()->back()->with('success','Thank you for contacting us, we will get back to you soon!!');;
    }
}
