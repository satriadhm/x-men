<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendor = Vendor::all();
        return view('vendor.index', compact('vendor'));
    }

    public function create()
    {
        return view('vendor.create');
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
            'logo' => 'required',
        ]);

        Vendor::create($request->all());

        return redirect()->route('vendor.index')
            ->with('success', 'Vendor created successfully.');
    }

    public function show(Vendor $vendor)
    {
        return view('vendor.show', compact('vendor'));
    }

    public function edit(Vendor $vendor)
    {
        return view('vendor.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
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

        $vendor->update($request->all());

        return redirect()->route('vendor.index')
            ->with('success', 'Vendor updated successfully');
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendor.index')
            ->with('success', 'Vendor deleted successfully');
    }


}
