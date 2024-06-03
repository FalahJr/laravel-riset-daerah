<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\models\Admin;
use App\Models\Materi;
use App\Models\Notifikasi;
use App\Models\Riset;
use App\Models\User;
use Carbon\Carbon;

class RisetController extends Controller
{

    public function index()
    {
        // $data = Riset::join('user', 'user.id', '=', 'materi.user_id')
        //     ->select('materi.*', 'user.nama_lengkap')
        //     ->get();

        $data = Riset::all();


        // dd($data);
        return view('pages.manage-riset', compact('data'));
    }

    public function indexMateriMurid()
    {
        $data = Materi::join('user', 'user.id', '=', 'materi.user_id')
            ->select('materi.*', 'user.nama_lengkap')
            ->orderBy('id', 'desc')
            ->get();



        // dd($data);
        return view('pages.materi', compact('data'));
    }

    public function detailMateri(Request $request)
    {
        $materi = Materi::where([
            'id' => $request->segment(3)
        ])->first();

        $activityLog = ActivityLog::create([
            'user_id' => Session('user')['id'],
            'materi_id' => $request->segment(3),
            'start_time' => Carbon::now('Asia/Jakarta'),
        ]);

        // $activityLogs = ActivityLog::

        //     // ->join('user', 'user.id', '=', 'activity_log.user_id')
        //     ->join('materi', 'materi.id', '=', 'activity_log.materi_id')
        //     ->
        //     ->select('activity_log.*', 'materi.judul')
        //     ->first();

        // dd($activityLogs);
        return view('pages.detail-materi', compact('materi', 'activityLog'));
    }



    public function create()
    {
        return view('pages.add-riset');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request) {
            if ($request->hasFile('file')) {

                // $getPegawaiBaru = Pegawai::orderBy('created_at', 'desc')->first();
                // $getKonfigCuti = Konfig_cuti::where('tahun',(new \DateTime())->format('Y'))->first();
                // $request->file('image')->move('img/materi', $request->file('gambar')->getClientOriginalName());
                $fileName = $request->file('file')->getClientOriginalName();
                $request->file('file')->move('file_upload/riset', $fileName);

                $riset = new Riset;
                $riset->judul = $request->judul;
                $riset->no_dokumen = $request->no_dokumen;
                $riset->nama = $request->nama;
                $riset->file = $fileName;
                $riset->created_at = Carbon::now();
                $riset->updated_at = Carbon::now();
                $riset->save();





                return redirect('/admin/riset');
            }
            // ->with('success', 'Berhasil membuat Materi');
        } else {
            return redirect('/admin/riset');
            // ->with('failed', 'Gagal membuat Materi');
        }
    }
    public function edit(Request $request)
    {
        // $data['karyawan'] = Pegawai::where([
        //     'id' => $request->segment(3)
        // ])->first();
        $riset = Riset::where([
            'id' => $request->segment(3)
        ])->first();

        return view('pages.edit-riset', compact('riset'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $riset = Riset::where([
            'id' => $request->segment(3)
        ])->first();
        // dd($request->all());
        $riset->judul = $request->judul;
        $riset->no_dokumen = $request->no_dokumen;
        $riset->nama = $request->nama;
        $riset->created_at = Carbon::now();
        $riset->updated_at = Carbon::now();
        // $karyawan->image=$request->image;

        // if ($riset->save()) {
        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file('file')->move('file_upload/riset', $fileName);

            $riset->gambar = $fileName;
            $riset->save();
            return redirect('/admin/riset');
        } else {
            $riset->save();
            return redirect('/admin/riset');
        }
    }

    public function destroy(Request $request, $id)
    {
        $riset = Riset::findOrFail($id);



        if ($riset->delete()) {
            return redirect('/admin/riset');
        } else {
            return redirect('/admin/riset');
        }
    }
}
