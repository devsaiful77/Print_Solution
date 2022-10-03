<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeedModel;
use PDF;
use Illuminate\Support\Carbon;


class SeedController extends Controller
{
    //
    public function seedList()
    {
        $data['lists'] = SeedModel::where('status',1)->get();
        return view('seeder.list',$data);
    }
    public function listSeederpdf()
    {
        $data['lists'] = SeedModel::where('status',1)->get();
            $pdfFileName = 'seeder-pdf-'.Carbon::now()->format('YmdHis').'.pdf';
            $pdf = PDF::loadView('seeder.seed-pdf',$data)->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->stream($pdfFileName);
    }
}
