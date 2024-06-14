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
    }

    public function riset(Request $request)
    {
        // $riset = Riset::all();
        // return view('riset', compact('riset'));

        // // dd($role);

        $query = Riset::query();

        if ($request->filled('judul')) {
            $query->where('judul', 'like', '%' . $request->judul . '%');
        }

        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }

        $riset = $query->get();

        return view('riset', compact('riset'))->with([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
        ]);
    }


    public function topik_riset(Request $request)
    {
        // $topik_riset = TopikRiset::all();
        // return view('topik-riset', compact('topik_riset'));

        // dd($request->permasalahan);
        $query = TopikRiset::query();

        if ($request->filled('isu_permasalahan')) {
            $query->where('isu_permasalahan', 'like', '%' . $request->isu_permasalahan . '%');
        }

        if ($request->filled('permasalahan')) {
            $query->where('permasalahan', 'like', '%' . $request->permasalahan . '%');
        }

        $topik_riset = $query->get();

        return view('topik-riset', compact('topik_riset'))->with([
            'isu_permasalahan' => $request->isu_permasalahan,
            'permasalahan' => $request->permasalahan,
        ]);
    }

    public function usulan_penelitian(Request $request)
    {
        // $usulan_penelitian = UsulanPenelitian::where('status', '=', 'Sedang Diproses')->get();
        // return view('usulan-penelitian', compact('usulan_penelitian'));

        // dd($role);

        $query = UsulanPenelitian::where('status', '=', 'Sedang Diproses');

        if ($request->filled('judul_penelitian')) {
            $query->where('judul_penelitian', 'like', '%' . $request->judul_penelitian . '%');
        }

        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }

        $usulan_penelitian = $query->get();

        // return view('riset', compact('riset'))->with([
        //     'judul' => $request->judul,
        //     'tahun' => $request->tahun,
        // ]);

        return view('usulan-penelitian',  compact('usulan_penelitian'))->with([
            'judul_penelitian' => $request->judul_penelitian,
            'tahun' => $request->tahun,
        ]);
    }

    public function hasil_penelitian(Request $request)
    {
        // $usulan_penelitian = UsulanPenelitian::where('status', '=', 'Selesai')->get();
        // dd($usulan_penelitian);

        $query = UsulanPenelitian::where('status', '=', 'Selesai');

        if ($request->filled('judul_penelitian')) {
            $query->where('judul_penelitian', 'like', '%' . $request->judul_penelitian . '%');
        }

        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }

        $usulan_penelitian = $query->get();

        // return view('riset', compact('riset'))->with([
        //     'judul' => $request->judul,
        //     'tahun' => $request->tahun,
        // ]);

        return view('hasil-penelitian',  compact('usulan_penelitian'))->with([
            'judul_penelitian' => $request->judul_penelitian,
            'tahun' => $request->tahun,
        ]);
    }
}
