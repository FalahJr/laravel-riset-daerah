<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function register_action(Request $request)
    {
        // dd($request->all());

        $new_user = new User;
        $new_user->email = $request->email;
        $new_user->nama_lengkap = $request->nama_lengkap;
        $new_user->no_telepon = $request->no_telepon;
        $new_user->alamat = $request->alamat;
        $new_user->role = $request->role;
        $new_user->password = $request->password;
        $new_user->created_at = Carbon::now();
        $new_user->updated_at = Carbon::now();
        $new_user->save();


        return redirect('/login');
    }
}
