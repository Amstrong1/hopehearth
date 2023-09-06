<?php

namespace App\Http\Controllers;

use App\Mail\NewMailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $data = collect([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->tel,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        Mail::to('contact@nonvizor.com')->send(new NewMailContact($data));
        Alert::toast('Votre message a été envoyé', 'success');
        return back();
    }
}
