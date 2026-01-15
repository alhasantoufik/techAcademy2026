<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Brian2694\Toastr\Facades\Toastr;

class NewslatterController extends Controller
{
    public function index()
    {
        $subscribers = NewsletterSubscriber::latest()->get();
        return view('admin.layouts.pages.subscriber.index', compact('subscribers'));
    }

    public function store(Request $request)
    {
        // Validate the phone number
        $request->validate([
            'phone' => 'required|string|max:20',
        ]);

        // Store only the phone number
        NewsletterSubscriber::create([
            'phone' => $request->phone,
        ]);

        Toastr::success('Thanks for subscribing!');

        // Optional: redirect back
        return redirect()->back();
    }

    public function destroy($id)
    {
        $message = NewsletterSubscriber::findOrFail($id);
        $message->delete();
        Toastr::success('Subscriber Deleted Successfully');
        return redirect()->back();
    }
}
