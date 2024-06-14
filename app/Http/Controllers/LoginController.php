<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $request->session()->flash('failed', 'Lengkapi isian form');
            return redirect('login');
        }

        $user = User::where('email', $request->email)
            ->where('password', $request->password) // Tidak melakukan hashing pada password
            ->first();
        // dd($user);

        if ($user) {
            return $this->checkUser($request, $user, $user->role);
        } else {
            return redirect('/login')->with('failed', 'Data User Tidak Ditemukan');
        }
    }

    private function checkUser($request, $user, $role)
    {
        if ($user) {
            $userArray = $user->toArray();
            $userArray['nama'] = $user->nama_lengkap;
            $userArray['role'] = $user->role;
            $userArray['id'] = $user->id;
            session(['user' => $userArray]);

            switch ($role) {
                case 'Admin':
                    return redirect('admin/home');
                case 'Masyarakat':
                    return redirect('masyarakat/home');
                case 'Pemerintah Daerah':
                    return redirect('pemerintah-daerah/home');
                default:
                    return redirect('/')->with('failed', 'Data User Tidak Ditemukan');
            }
        } else {
            return redirect('/')->with('failed', 'Data User Tidak Ditemukan');
        }
    }

    public function logout_action()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}
