<?php

namespace App\Http\Controllers;

use App\Company;
use App\Packet;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class PacketsController extends Controller
{
    /**
     * Create a new controller instance.
     *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $packets = DB::table('packets')->paginate(10);
        $packets = Packet::sortable()->paginate(15);
        // $packets = \App\Packet::all()->paginate(3);
        // dump($packet); 
        return view('packets.index', compact('packets'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
            $packet = \App\Packet::all()
		->where('volume_pkt','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('packets.index',compact('packets'));
 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function autocomplete(Request $request)
    // {
    //     $data = Packet::select("nama_pengirim")
    //             ->where("nama_pengirim","LIKE","%{$request->query}%")
    //             ->get();
   
    //     return response()->json($data);
    // }
    public function cetak_pdf()
    {
        return 'test';
    	// $packets = \App\Packet::all();
 
    	// $pdf = PDF::loadview('/packets/cetak_pdf',compact('packets'));
        // // return $pdf->download('laporan-packet-pdf');
        // return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'nohp_pengirim' => 'required',
            'alamat_pengirim' => 'required',
            'nama_penerima' => 'required',
            'nohp_penerima' => 'required',
            'alamat_penerima' => 'required',
            // 'jenis_pkt' => 'required',
            'berat_pkt' => 'required',
            'kemasan_pkt' => 'required',
            'volume_pkt' => 'required',
            'pengiriman_pkt' => 'required',

        ]);
       //19/7
       $company=Company::where('id', $request->id_companies)->first();
       $packet=Packet::where('id_companies', $request->id_companies)->get();
       $nubRow=count($packet)+1;
       if($nubRow <10){
           $resi_pkt=$company->kode_comp.'-'.date('DdMY').'-'."00".$nubRow;
       }
       elseif($nubRow >=10 && $nubRow <=99){
           $resi_pkt=$company->kode_comp.'-'.date('DdMY').'-'."0".$nubRow;
       }
       $data=new Packet;
       $data->nama_pengirim=$request->nama_pengirim;
       $data->nohp_pengirim=$request->nohp_pengirim;
       $data->alamat_pengirim=$request->alamat_pengirim;
       $data->nama_penerima=$request->nama_penerima;
       $data->nohp_penerima=$request->nohp_penerima;
    //    $data->tujuan_pkt=$request->tujuan_pkt;
       $data->alamat_penerima=$request->alamat_penerima;
    //    $data->jenis_pkt=$request->jenis_pkt;
       $data->berat_pkt=$request->berat_pkt;
       $data->kemasan_pkt=$request->kemasan_pkt;
       $data->volume_pkt=$request->volume_pkt;
       $data->pengiriman_pkt=$request->pengiriman_pkt;
       $data->end_pkt=$request->end_pkt;
       $data->status_pkt=$request->status_pkt;
       $data->resi_pkt=$resi_pkt;
       $data->ongkir_pkt=$request->berat_pkt*$request->volume_pkt*13000;
    //    $data->id_companies=$request->id_companies;
       $data->save();
       //19/7
        
        // Packet::create($request->all()); //tambahkan filable pada model terlebih dahulu agar bisa menjalankan request all
    return redirect('/packets')->with('status', 'Paket berhasil ditambahkan  ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Packet  $packet
     * @return \Illuminate\Http\Response
     */ 
    public function show(Packet $packet)
    {
        return view('packets.show', compact('packet'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function edit(Packet $packet)
    {
        return view('packets.edit',compact('packet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packet $packet)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'nohp_pengirim' => 'required',
            // 'alamat_pengirim' => 'required',
            'nama_penerima' => 'required',
            'nohp_penerima' => 'required',
            // 'tujuan_pkt' => 'required',
            'alamat_penerima' => 'required',
            'jenis_pkt' => 'required',
            'berat_pkt' => 'required',
            'kemasan_pkt' => 'required',
            'volume_pkt' => 'required',
            'pengiriman_pkt' => 'required',
            'end_pkt' => 'required',
            'status_pkt' => 'required',
            // 'id_companies' => 'required',

        ]);

        Packet::where('id', $packet->id)
        ->update([
            'nama_pengirim' => $request->nama_pengirim,
            'nohp_pengirim' => $request->nohp_pengirim,
            'alamat_pengirim' => $request->alamat_pengirim,
            'nama_penerima' => $request->nama_penerima,
            'nohp_penerima' => $request->nohp_penerima,
            'tujuan_pkt' => $request->tujuan_pkt,
            'alamat_penerima' => $request->alamat_penerima,
            'jenis_pkt' => $request->jenis_pkt,
            'berat_pkt' => $request->berat_pkt,
            'kemasan_pkt' => $request->kemasan_pkt,
            'volume_pkt' => $request->volume_pkt,
            'pengiriman_pkt' => $request->pengiriman_pkt,
            'end_pkt' => $request->end_pkt,
            'status_pkt' => $request->status_pkt,
            'id_companies' => $request->id_companies,

        ]);
        return redirect('/packets')->with('status', 'Paket berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packet $packet)
    {
        Packet::destroy($packet->id);
        return redirect('/packets')->with('status', 'Paket berhasil dihapus!');

    }
/**
* @param Request $request
*/

// public function paginate(Request $request)
// {
//     $packets = Packet::when($request->keyword, function ($query) use ($request) {
//         $query->where('nama_pengirim', 'like', "%{$request->keyword}%")
//             ->orWhere('alamat_pengirim', 'like', "%{$request->keyword}%");
//     })->paginate($request->limit ?? 20);

//     $packets->appends($request->only('keyword'));

//     return view('packets.paginate', compact('packets'));
// }
    
}
