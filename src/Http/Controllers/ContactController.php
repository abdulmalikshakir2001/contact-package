<?php

namespace Bitfumes\Contact\Http\Controllers;
use Bitfumes\Contact\Mail\ContactMailable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bitfumes\Contact\Models\Contact;
use App\Notifications\InvoicePaid;
use App\Models\User;
use App\Mail\OrderShipped;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }
    public function send(Request $request)
    {
        $mailData=[
            'title'=>'title is order shipped',
            'body'=>'body this order already shipped ',
        ];
        Mail::to(config('contact.send_email_to'))->send(new OrderShipped($mailData));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
