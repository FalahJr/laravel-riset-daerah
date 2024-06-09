<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\models\Admin;
use App\Models\Materi;
use App\Models\Notifikasi;
use App\Models\Riset;
use App\Models\TopikRiset;
use App\Models\User;
use App\Models\UsulanPenelitian;
use Carbon\Carbon;

class PublicController extends Controller
{

    public function index()
    {
        // $role = Session('user')['role'];
        return view('welcome');

        // dd($role);

    }

    public function riset()
    {
        $riset = Riset::all();
        return view('riset', compact('riset'));

        // dd($role);

    }
    public function topik_riset()
    {
        $topik_riset = TopikRiset::all();
        return view('topik-riset', compact('topik_riset'));

        // dd($role);

    }

    public function usulan_penelitian()
    {
        $usulan_penelitian = UsulanPenelitian::all();
        return view('usulan-penelitian', compact('usulan_penelitian'));

        // dd($role);

    }
}
