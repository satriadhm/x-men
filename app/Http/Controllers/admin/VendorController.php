<?php

namespace App\Http\Controllers\admin;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index()
    {
        $vendor = Vendor::all();
        return view('admin.vendor.index', compact('vendor'));
    }

    public function create()
    {
        return view('admin.vendor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_vendor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'website' => 'required',
            'bidang_usaha' => 'required',
            'tahun_berdiri' => 'required',
            'jumlah_karyawan' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            $logoPath = 'uploads/' . $fileName;
        }
        $vendor = Vendor::create([
            'nama_vendor' => $request->nama_vendor,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'website' => $request->website,
            'bidang_usaha' => $request->bidang_usaha,
            'tahun_berdiri' => $request->tahun_berdiri,
            'jumlah_karyawan' => $request->jumlah_karyawan,
            'deskripsi' => $request->deskripsi,
            'logo' => $logoPath,
        ]);
        if($vendor) {
            alert()->success('Berhasil memasukkan data', 'Berhasil memasukkan data yeayyy');
            return back();
        }else {
            alert()->error('Opss ada yang salah', 'perhatikan kembali apa yang salah');
        }


    }

    public function show($id)
    {
        $vendor = Vendor::find($id);


        return view('vendor.show', compact('vendor'));
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_vendor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'website' => 'required',
            'bidang_usaha' => 'required',
            'tahun_berdiri' => 'required',
            'jumlah_karyawan' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
        ]);
        $vendor = Vendor::find($id);
        $vendor->update($request->all());

        return redirect()->route('vendor.index')
            ->with('success', 'Vendor updated successfully');
    }

    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();

        return redirect()->route('vendor.index')
            ->with('success', 'Vendor deleted successfully');
    }
}
