<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function admin_login() {
        return view('login.sections.admin-login.index');
    }

    public function admin_auth(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials['is_actived'] = true;

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        }

        return back()->with('noty', [
            'type' => 'warning',
            'message' => 'Tên đăng nhập hoặc mật khẩu không chính xác',
        ])->onlyInput('username');
    } 

    public function user_login() {
        return view('login.sections.user-login.index');
    }

    public function user_auth(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $user = auth()->user();
            if ($request->input('member_register') && !$user->progresses->where('progress_type_id', 2)->first()) {
                $user->progresses()->create([
                    'progress_type_id' => 2,
                    'current_step' => 1,
                    'final_step' => 5,
                ]);
            }

            $request->session()->regenerate();
            return redirect()->route('user.home');
        }

        return back()->with('noty', [
            'type' => 'warning',
            'message' => 'Tên đăng nhập hoặc mật khẩu không chính xác',
        ])->onlyInput('username');
    } 

    public function logout(Request $request) {
        $route = Auth::guard('admin')->check() ? 'admin-login.index' : 'home';
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route($route);
    }
}
