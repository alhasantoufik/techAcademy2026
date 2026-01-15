<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        $pageTitle = 'Contact Us';
        return view('website.layouts.contact', compact([
            'pageTitle',
        ]));
    }

    public function contactForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',

            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true]);

    }

}
