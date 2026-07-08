<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contact.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Contact::findOrFail($id);
        
        // Mark as read if unread
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.contact.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        
        return redirect()->route('admin.contact.index')->with('success', 'Pesan berhasil dihapus');
    }
}
