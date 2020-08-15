<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $packets = \App\Packet::all();
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('myPDF', $data, compact('packets'));
       
        // return $pdf->download('itsolutionstuff.pdf');
        return $pdf->stream();
    }
}