<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\models\Admin;
use App\Models\Materi;
use App\Models\Notifikasi;
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





    public function create()
    {
        return view('pages.add-topik-riset');
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
                $request->file('file')->move('file_upload/topik-riset', $fileName);

                $riset = new TopikRiset;
                $riset->isu_permasalahan = $request->isu_permasalahan;
                $riset->permasalahan = $request->permasalahan;
                $riset->pertanyaan_riset = $request->pertanyaan_riset;
                $riset->keterangan = $request->keterangan;
                // $riset->judul = $request->judul;
                // $riset->no_dokumen = $request->no_dokumen;
                // $riset->nama = $request->nama;
                $riset->file = $fileName;
                $riset->created_at = Carbon::now();
                $riset->updated_at = Carbon::now();
                $riset->save();





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

        $riset = TopikRiset::where([
            'id' => $request->segment(3)
        ])->first();
        // dd($request->all());
        $riset->isu_permasalahan = $request->isu_permasalahan;
        $riset->permasalahan = $request->permasalahan;
        $riset->pertanyaan_riset = $request->pertanyaan_riset;
        $riset->keterangan = $request->keterangan;
        // $riset->judul = $request->judul;
        // $riset->no_dokumen = $request->no_dokumen;
        // $riset->nama = $request->nama;
        $riset->created_at = Carbon::now();
        $riset->updated_at = Carbon::now();
        // $karyawan->image=$request->image;

        // if ($riset->save()) {
        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file('file')->move('file_upload/topik-riset', $fileName);

            $riset->gambar = $fileName;
            $riset->save();
            return redirect('/admin/topik-riset');
        } else {
            $riset->save();
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
