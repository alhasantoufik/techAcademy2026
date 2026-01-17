<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        $pageTitle = 'Contact Us';
        $website_setting = WebsiteSetting::select(['id', 'phone', 'website_title', 'email', 'address'])->first();
        return view('website.layouts.contact', compact([
            'pageTitle','website_setting',
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
