<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.layouts.pages.contact-message.index', compact('messages'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        
        Contact::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'message' => $request->message,
        ]);

        // 3️⃣ Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    public function show($id)
    {
        $message = Contact::findOrFail($id);
        return view('admin.layouts.pages.contact-message.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        Toastr::success('Message Deleted Successfully');
        return redirect()->back();
    }
}
