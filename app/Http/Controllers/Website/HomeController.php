<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ], [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.string' => 'حقل الاسم يجب أن يكون نصًا.',
            'name.max' => 'حقل الاسم يجب ألا يزيد عن 255 حرفًا.',

            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.email' => 'حقل البريد الإلكتروني يجب أن يكون بريدًا إلكترونيًا صالحًا.',

            'phone.required' => 'حقل رقم الهاتف مطلوب.',
            'phone.string' => 'حقل رقم الهاتف يجب أن يكون نصًا.',

            'message.required' => 'حقل الرسالة مطلوب.',
            'message.string' => 'حقل الرسالة يجب أن يكون نصًا.',
        ]);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ], [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.string' => 'حقل الاسم يجب أن يكون نصًا.',
            'name.max' => 'حقل الاسم يجب ألا يزيد عن 255 حرفًا.',

            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.email' => 'حقل البريد الإلكتروني يجب أن يكون بريدًا إلكترونيًا صالحًا.',

            'phone.required' => 'حقل رقم الهاتف مطلوب.',
            'phone.string' => 'حقل رقم الهاتف يجب أن يكون نصًا.',

            'message.required' => 'حقل الرسالة مطلوب.',
            'message.string' => 'حقل الرسالة يجب أن يكون نصًا.',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', 'تم إرسال الرسالة بنجاح.');
    }
}
