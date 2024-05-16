<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use App\Models\Pelatihan;
use App\Models\Talent;
use App\Models\Vendor;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $talent = Talent::all();
        $pendidikan = Pendidikan::all();
        $pelatihan = Pelatihan::all();
        $vendor = Vendor::all();

        return view('statistics', compact('talent', 'pendidikan', 'pelatihan', 'vendor'));
    }

   public function countTalent()
    {
        $talent = Talent::all();
        $count = $talent->count();
        return view('statistics', compact('count'));
    }

    public function countPendidikan()
    {
        $pendidikan = Pendidikan::all();
        $count = $pendidikan->count();
        return view('statistics', compact('count'));
    }

    public function countPelatihan()
    {
        $pelatihan = Pelatihan::all();
        $count = $pelatihan->count();
        return view('statistics', compact('count'));
    }

    public function countVendor()
    {
        $vendor = Vendor::all();
        $count = $vendor->count();
        return view('statistics', compact('count'));
    }

    


}
