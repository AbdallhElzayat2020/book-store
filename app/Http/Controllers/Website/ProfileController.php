<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('website.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'required|unique:users,phone,' . auth()->id(),
            'password' => 'nullable|min:8|confirmed',
        ], [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.max' => 'حقل الاسم يجب ألا يزيد عن 255 حرفًا.',

            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.unique' => 'البريد الإلكتروني مسجل بالفعل.',

            'phone.required' => 'حقل رقم الهاتف مطلوب.',
            'phone.unique' => 'رقم الهاتف مسجل بالفعل.',

            'password.nullable' => 'حقل كلمة المرور اختياري.',
            'password.min' => 'يجب أن تكون كلمة المرور على الأقل 8 أحرف.',
            'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return back()->with('success', 'تم تحديث المعلومات الشخصية بنجاح.');
    }
}
