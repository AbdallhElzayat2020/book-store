<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ], [
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة',
            'email.exists' => 'البريد الإلكتروني غير موجود',
            'password.required' => 'كلمة المرور مطلوبة',
            'password.string' => 'يجب أن تكون كلمة المرور نصية',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (\auth()->user()->is_admin == true) {
                return redirect()->route('dashboard.index')->with('success', 'تم تسجيل الدخول بنجاح');
            } else {
                return redirect()->route('home')->with('success', 'تم تسجيل الدخول بنجاح');
            }
        } else {
            return back()->with('error', 'بيانات الدخول غير صحيحه حاول مره اخري');
        }
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.unique' => 'البريد الإلكتروني مسجل بالفعل.',

            'phone.required' => 'رقم الهاتف مطلوب.',
            'phone.string' => 'رقم الهاتف يجب أن يكون نصًا.',
            'phone.unique' => 'رقم الهاتف مسجل بالفعل.',

            'password.required' => 'كلمة المرور مطلوبة.',
            'password.string' => 'يجب أن تكون كلمة المرور نصية.',
            'password.min' => 'يجب أن تكون كلمة المرور على الأقل 6 أحرف.',
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('home')->with('success', 'تم انشاء الحساب بنجاح');
    }

    public function logout()
    {
        \auth()->logout();
        return redirect()->route('home')->with('success', 'تم تسجيل الخروج بنجاح');
    }
}
