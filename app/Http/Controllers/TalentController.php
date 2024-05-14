<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\NarasumberPembicara;
use App\Models\NilaiVisi;
use App\Models\Pendidikan;
use App\Models\Penghargaan;
use App\Models\Referensi;
use App\Models\Talent;
use App\Models\Organisasi;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function index()
    {
        return view('talent.index');
    }

    public function create()
    {
        return view('talent.create');
    }

    public function storeIndividualData(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'gelar' => 'required|string',
            'nik' => 'required|string',
            //tempat lahir drop down
            'id_kota' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'jabatan_terakhir' => 'required|string',
            'alamat_rumah' => 'required|string',
            'nomor_telefon' => 'required|string',
            'email' => 'required|email',
            'npwp' => 'required|string',
            //suku drop down
            'suku' => 'required|string',
            'golongan_darah' => 'required|in:A,B,AB,O',
            'status_perkawinan' => 'required|in:belum kawin,kawin,cerai hidup,cerai mati',
            'agama' => 'required|string',
        ]);

        $talent = new Talent();
        $talent->nama_talent = $request->name;
        $talent->gelar_akademik = $request->gelar;
        $talent->nik = $request->nik;
        $talent->tempat_lahir = $request->tempat_lahir;
        $talent->tanggal_lahir = $request->tanggal_lahir;
        $talent->jenis_kelamin = $request->jenis_kelamin;
        $talent->jabatan_terakhir = $request->jabatan_terakhir;
        $talent->alamat_rumah = $request->alamat_rumah;
        $talent->nomor_telefon = $request->nomor_telefon;
        $talent->email = $request->email;
        $talent->npwp = $request->npwp;
        $talent->suku = $request->suku;
        $talent->golongan_darah = $request->golongan_darah;
        $talent->status_perkawinan = $request->status_perkawinan;
        $talent->agama = $request->agama;
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function edit($id)
    {
        $talent = Talent::find($id);
        return view('talent.edit', compact('talent'));
    }

    public function updateIndividualData(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'gelar' => 'required|string',
            'nik' => 'required|string',
            //tempat lahir drop down
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'jabatan_terakhir' => 'required|string',
            'alamat_rumah' => 'required|string',
            'nomor_telefon' => 'required|string',
            'email' => 'required|email',
            'npwp' => 'required|string',
            //suku drop down
            'suku' => 'required|string',
            'golongan_darah' => 'required|in:A,B,AB,O',
            'status_perkawinan' => 'required|in:belum kawin,kawin,cerai hidup,cerai mati',
            'agama' => 'required|string',
        ]);

        $talent = Talent::find($id);
        $talent->nama_talent = $request->name;
        $talent->gelar_akademik = $request->gelar;
        $talent->nik = $request->nik;
        $talent->tempat_lahir = $request->tempat_lahir;
        $talent->tanggal_lahir = $request->tanggal_lahir;
        $talent->jenis_kelamin = $request->jenis_kelamin;
        $talent->jabatan_terakhir = $request->jabatan_terakhir;
        $talent->alamat_rumah = $request->alamat_rumah;
        $talent->nomor_telefon = $request->nomor_telefon;
        $talent->email = $request->email;
        $talent->npwp = $request->npwp;
        $talent->suku = $request->suku;
        $talent->golongan_darah = $request->golongan_darah;
        $talent->status_perkawinan = $request->status_perkawinan;
        $talent->agama = $request->agama;
        $talent->save();

        return redirect()->route('talent.index');

    }

    public function destroy($id)
    {
        $talent = Talent::find($id);
        $talent->delete();

        return redirect()->route('talent.index');
    }

    public function show($id)
    {
        $talent = Talent::find($id);
        return view('talent.show', compact('talent'));
    }

    public function updateNilaiVisi(Request $request, $idTalent)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $talent = NilaiVisi::where('talent_id', $idTalent)->first();
        $talent->nilai_pribadi = $request->nilai_pribadi;
        $talent->visi_pribadi = $request->visi_pribadi;
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function updatePublikasi(Request $request, $idTalent)
    {
        $request->validate([
            'judul_publikasi' => 'required|string',
            'media_publikasi' => 'required|string',
            'tahun' => 'required|date',
        ]);

        $talent = Talent::where('talent_id', $idTalent)->first();
        $talent->judul_publikasi = $request->judul_publikasi;
        $talent->media_publikasi = $request->media_publikasi;
        $talent->tahun = $request->tahun;
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function updatePenghargaan(Request $request, $idTalent)
    {
        $request->validate([
            'jenis_penghargaan' => 'required|string',
            'tingkat' => 'required|in:internasional,nasional,institusi',
            'diberikan_oleh' => 'required|string',
            'tahun' => 'required|date',
        ]);

        $talent = Penghargaan::where('talent_id', $idTalent)->first();
        $talent->jenis_penghargaan = $request->jenis_penghargaan;
        $talent->tingkat = $request->tingkat;
        $talent->diberikan_oleh = $request->diberikan_oleh;
        $talent->tahun = $request->tahun;
        $talent->save();


        return redirect()->route('talent.index');
    }

    public function updateOrganisasi(Request $request, $idTalent)
    {
        $request->validate([
            'nama_organisasi' => 'required|string',
            'jabatan' => 'required|string',
            'jenis_organisasi' => 'required|in:professional,non-formal',
            'tahun_awal' => 'required|date',
            'tahun_akhir' => 'required|date',
            'uraian_singkat_organisasi' => 'required|string',
        ]);

        $talent = Organisasi::where('talent_id', $idTalent)->first();
        $talent->nama_organisasi = $request->nama_organisasi;
        $talent->jabatan = $request->jabatan;
        $talent->jenis_organisasi = $request->jenis_organisasi;
        $talent->tahun_awal = $request->tahun_awal;
        $talent->tahun_akhir = $request->tahun_akhir;
        $talent->uraian_singkat_organisasi = $request->uraian_singkat_organisasi;
        $talent->save();

        return redirect()->route('talent.index');
    }



    public function updatePendidikan(Request $request, $idTalent)
    {
        $request->validate([
            'jenjang_pendidikan' => 'required|string',
            'perguruan_tinggi' => 'required|string',
            //drop down kota
            'id_kota' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|date',
        ]);

        $talent = Pendidikan::where('talent_id', $idTalent)->first();
        $talent->jenjang_pendidikan = $request->jenjang_pendidikan;
        $talent->jurusan = $request->jurusan;
        $talent->tahun_lulus = $request->tahun_lulus;
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function updateReferensi(Request $request, $idTalent)
    {
        $request->validate([
            'nama_referensi' => 'required|string',
            'jabatan_referensi' => 'required|string',
            'nomor_telefon_referensi' => 'required|string',
            'email_referensi' => 'required|email',
        ]);

        $talent = Referensi::where('talent_id', $idTalent)->first();
        $talent->nama_referensi = $request->nama_referensi;
        $talent->jabatan_referensi = $request->jabatan_referensi;
        $talent->nomor_telefon_referensi = $request->nomor_telefon_referensi;
        $talent->email_referensi = $request->email_referensi;
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function updateInterest(Request $request, $idTalent)
    {
        $request->validate([
            'ekonomi_bisnis' => 'required|string',
            'pengembangan_kapasitas_kepemimpinan' => 'required|string',
            'relasi_jejaring' => 'required|string'
        ]);

        $talent = Interest::where('talent_id', $idTalent)->first();
       
        $talent->save();

        return redirect()->route('talent.index');
    }

    public function updateNarasumberPembicara(Request $request, $idTalent)
    {
        $request->validate([
           'acara' => 'required|string',
           'penyelenggara' => 'required|string',
           'tahun' => 'required|date',
           'lokasi' => 'required|string',
           'peserta' => 'required|int',
        ]);

        $talent = NarasumberPembicara::where('talent_id', $idTalent)->first();
        $talent->acara = $request->acara;
        $talent->penyelenggara = $request->penyelenggara;
        $talent->tahun = $request->tahun;
        $talent->lokasi = $request->lokasi;
        $talent->peserta = $request->peserta;
       
        $talent->save();

        return redirect()->route('talent.index');
    }

    

}
