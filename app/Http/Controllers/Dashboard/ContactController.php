<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()->latest()->paginate(10);
        return view('dashboard.contact', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'تم الحذف بنجاح');
    }
}
