<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\User;
use App\Models\Informations;
use App\Models\Ppdbs;
use Carbon\Carbon;
use PDF;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        $users = User::where('acc', 'Siswa Baru')->get();
        $info = Informations::all();
        return view('ppdb.dashboard', compact('users', 'info'));
    }

    public function siswa()
    {
        $users = Ppdbs::all();
        return view('ppdb.siswa', compact('users'));
    }

    public function siswaedit($id)
    {
        $siswa = Ppdbs::find($id);
        return view('ppdb.siswaedit', compact('siswa'));
    }

    public function siswaupdate(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $siswa = Ppdbs::find($id);
        $siswa->status = $request->input('status');


        $siswa->save();

        return redirect()->route('siswa')->with('success', 'Informasi berhasil diperbarui');
    }


    public function infoedit($id)
    {
        $info = Informations::find($id);
        return view('ppdb.infoedit', compact('info'));
    }

    public function infoupdate(Request $request, $id)
    {
        $request->validate([
            'headline' => 'required',
            'tgl_akhir' => 'date',
            'news' => 'required',
        ]);

        $info = Informations::find($id);
        $info->headline = $request->input('headline');
        $info->tgl_akhir = $request->input('tgl_akhir');
        $info->news = $request->input('news');

        $info->save();

        return redirect()->route('dashboard')->with('success', 'Informasi berhasil diperbarui');
    }


    public function cekstatus(Request $request)
    {
        $request->validate([
            'kode_daftar' => 'required',
        ]);

        $ppdb = Ppdbs::where('kode_daftar', $request->input('kode_daftar'))->first();

        return view('ppdb.cekstatus', compact('ppdb'));
    }

    public function showForm()
    {
        return view('ppdb.cekstatus');
    }

    public function changesetting(Request $request)
    {
        $request->validate([
            'image_profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $image = $request->file('image_profile');
        $imgName = time() . rand() . '.' . $image->extension();
        if (!file_exists(public_path('/assets/img/users/' . $image->getClientOriginalName()))) {
            $destinationPath = public_path('/assets/img/users');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        } else {
            $uploaded = $image->getClientOriginalName();
        }

        User::where('id', Auth::user()->id)->update([
            'image_profile' => $uploaded
        ]);

        return redirect()->route('dashboard.setting')->with('successUploadImg', 'Foto Profile Berhasil diperbarui');
    }

    public function settingUpload()
    {
        return view('ppdb.upload-profile');
    }

    public function complete()
    {
        return view('siswa.complete');
    }

    public function setting()
    {
        $users = User::where('id', Auth::user()->id)->first();
        $data = Ppdbs::where('s_namalengkap', Auth::user()->nama)->first();
        return view('ppdb.setting', compact('users', 'data'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function lengkap(Request $request)
    {
        $request->validate([
            's_namalengkap' => 'required',
            's_namapanggilan' => 'required',
            's_jk' => 'required',
            's_ttl' => 'required',
            's_agama' => 'required',
            's_ttinggal' => 'required',
            's_tlgmasuk' => 'nullable',
            's_sklhlama' => 'required',
            's_tglterima' => 'nullable',
            's_kls' => 'nullable',
            'otl_nama' => 'required',
            'otl_ttl' => 'required',
            'otl_pendidikan' => 'required',
            'otl_pekerjaan' => 'required',
            'otl_agama' => 'required',
            'otp_nama' => 'required',
            'otp_ttl' => 'required',
            'otp_pendidikan' => 'required',
            'otp_pekerjaan' => 'required',
            'otp_agama' => 'required',
            'image_dokumen' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $request->file('image_dokumen');
        $imgName = time() . rand() . '.' . $image->extension();
        if (!file_exists(public_path('/assets/img/dokumen' . $image->getClientOriginalName()))) {
            $destinationPath = public_path('/assets/img/dokumen');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        } else {
            $uploaded = $image->getClientOriginalName();
        }

        // Generate registration code (6 angka random)
        $kode_daftar = '#' . substr(str_shuffle('0123456789'), 0, 6);

        // Masukkan kode pendaftaran ke dalam data request sebelum membuat record
        $request->merge(['kode_daftar' => $kode_daftar]);

        // Buat record dalam tabel Ppdbs
        Ppdbs::create([
            's_namalengkap' => $request->s_namalengkap,
            's_namapanggilan' => $request->s_namapanggilan,
            'kode_daftar' => $request->kode_daftar,
            's_jk' => $request->s_jk,
            's_ttl' => $request->s_ttl,
            's_agama' => $request->s_agama,
            's_ttinggal' => $request->s_ttinggal,
            's_sklhlama' => $request->s_sklhlama,
            'otl_nama' => $request->otl_nama,
            'otl_ttl' => $request->otl_ttl,
            'otl_pendidikan' => $request->otl_pendidikan,
            'otl_pekerjaan' => $request->otl_pekerjaan,
            'otl_agama' => $request->otl_agama,
            'otp_nama' => $request->otp_nama,
            'otp_ttl' => $request->otp_ttl,
            'otp_pendidikan' => $request->otp_pendidikan,
            'otp_pekerjaan' => $request->otp_pekerjaan,
            'otp_agama' => $request->otp_agama,
            'image_dokumen' => $uploaded,
        ]);

        User::where('id', Auth::user()->id)->update([
            'status' => 1,
        ]);

        return redirect()->route('printdaftar')->with('success', 'Data pendaftaran siswa berhasil dibuat!');
    }

    public function printdaftar()
    {
        $item = Ppdbs::where('s_namalengkap', Auth::user()->nama)->first();

        return view('ppdb.printdaftar', compact('item'));
    }

    public function printkartu()
    {
        $item = Ppdbs::where('s_namalengkap', Auth::user()->nama)->first();

        return view('ppdb.printkartu', compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdbs $ppdb)
    {
        //
    }
}
