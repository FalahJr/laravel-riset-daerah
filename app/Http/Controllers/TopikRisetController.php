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
use App\Models\TopikRiset;
use App\Models\User;
use Carbon\Carbon;

class TopikRisetController extends Controller
{

    public function index()
    {
        // $data = Riset::join('user', 'user.id', '=', 'materi.user_id')
        //     ->select('materi.*', 'user.nama_lengkap')
        //     ->get();

        $data = TopikRiset::all();


        // dd($data);
        return view('pages.manage-topik-riset', compact('data'));
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
        return view('pages.add-topik-riset');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request) {
            if ($request->hasFile('upload_file')) {

                // $getPegawaiBaru = Pegawai::orderBy('created_at', 'desc')->first();
                // $getKonfigCuti = Konfig_cuti::where('tahun',(new \DateTime())->format('Y'))->first();
                // $request->file('image')->move('img/materi', $request->file('gambar')->getClientOriginalName());
                $fileName = $request->file('upload_file')->getClientOriginalName();
                $request->file('upload_file')->move('file_upload/topik-riset', $fileName);

                $topik_riset = new TopikRiset;
                $topik_riset->judul = $request->judul;
                $topik_riset->tahun = $request->tahun;
                $topik_riset->no_telepon = $request->no_telepon;
                $topik_riset->abstrak = $request->abstrak;
                $topik_riset->is_publish = $request->is_publish;
                $topik_riset->upload_file = $fileName;
                $topik_riset->created_at = Carbon::now();
                $topik_riset->updated_at = Carbon::now();
                $topik_riset->save();





                return redirect('/admin/topik-riset');
            }
            // ->with('success', 'Berhasil membuat Materi');
        } else {
            return redirect('/admin/topik-riset');
            // ->with('failed', 'Gagal membuat Materi');
        }
    }
    public function edit(Request $request)
    {
        // $data['karyawan'] = Pegawai::where([
        //     'id' => $request->segment(3)
        // ])->first();
        $topik_riset = TopikRiset::where([
            'id' => $request->segment(3)
        ])->first();

        return view('pages.edit-topik-riset', compact('topik_riset'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $topik_riset = TopikRiset::where([
            'id' => $request->segment(3)
        ])->first();
        // dd($request->all());
        $topik_riset->judul = $request->judul;
        $topik_riset->tahun = $request->tahun;
        $topik_riset->no_telepon = $request->no_telepon;
        $topik_riset->abstrak = $request->abstrak;
        $topik_riset->is_publish = $request->is_publish;
        $topik_riset->created_at = Carbon::now();
        $topik_riset->updated_at = Carbon::now();
        // $karyawan->image=$request->image;

        // if ($topik_riset->save()) {
        if ($request->hasFile('upload_file')) {
            $fileName = $request->file('upload_file')->getClientOriginalName();
            $request->file('upload_file')->move('file_upload/topik-riset', $fileName);

            $topik_riset->upload_file = $fileName;
            $topik_riset->save();
            return redirect('/admin/topik-riset');
        } else {
            $topik_riset->save();
            return redirect('/admin/topik-riset');
        }
    }

    public function destroy(Request $request, $id)
    {
        $riset = TopikRiset::findOrFail($id);



        if ($riset->delete()) {
            return redirect('/admin/topik-riset');
        } else {
            return redirect('/admin/topik-riset');
        }
    }
}
