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

    public function getListRiset()
    {
        // $data = Riset::join('user', 'user.id', '=', 'materi.user_id')
        //     ->select('materi.*', 'user.nama_lengkap')
        //     ->get();

        $data = Riset::all();


        // dd($data);
        return response()->json(['status' => 200, 'data' => $data]);
    }




    public function create()
    {
        return view('pages.add-riset');
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
                $request->file('upload_file')->move('file_upload/riset', $fileName);

                $topik_riset = new Riset;
                $topik_riset->judul = $request->judul;
                $topik_riset->tahun = $request->tahun;
                $topik_riset->no_telepon = $request->no_telepon;
                $topik_riset->abstrak = $request->abstrak;
                $topik_riset->is_publish = $request->is_publish;
                $topik_riset->upload_file = $fileName;
                $topik_riset->created_at = Carbon::now();
                $topik_riset->updated_at = Carbon::now();
                $topik_riset->save();





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

        $topik_riset = Riset::where([
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
            $request->file('upload_file')->move('file_upload/riset', $fileName);

            $topik_riset->upload_file = $fileName;
            $topik_riset->save();
            return redirect('/admin/riset');
        } else {
            $topik_riset->save();
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
