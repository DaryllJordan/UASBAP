<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewtahun;
use PDF;


class tahunController extends Controller
{
    //
    public function index()
    {  
        $tahun = Viewtahun::all();
        return view('admin.tahun.index', ['title' => 'tahun'],compact('tahun'));
    }

    public function print_pdf()
    {
    	$tahun = Viewtahun::all();
 
    	$pdf = PDF::loadView('admin.tahun.print_pdf',compact('tahun'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('tahun-pdf.pdf');
    }
}
