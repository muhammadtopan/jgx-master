@extends('layouts.app2')
@section('content')
@section('title','SHOW PAKET | JGX')
      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">INVOICE </h1>
              <div class="page-subhead-line">
          <div class="row pad-top-botm">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <a href="{{ $packet->id}}/edit" class="btn btn-success btn-md" >Edit</a>
              &nbsp;&nbsp;&nbsp;
              <a href="/packets" class="btn btn-info btn-md" >Kembali</a>
              &nbsp;&nbsp;&nbsp;
              <a href="#" class="btn btn-warning btn-md" >Print</a>
               </div>
            </div>
          </div>
          </div>
      </div>
      <!-- /. ROW  -->
      <div class="row">
          <div class="col-md-12">
             <div >

<div class="row pad-top-botm ">
<div class="col-lg-3 col-md-3 col-sm-3 ">
  <img src="{{ asset('img/logo toko.jpg') }}" class="img-thumbnail" style="padding-bottom:10px;" /> 
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
  
     <strong>Jam Gadang Express</strong>
    <br />
        <i>Alamat :</i> Padang
    <br />
        Forth Street , Deumark,
    <br />
        United States.
    
</div>
</div>
<div  class="row text-center contact-info">
<div class="col-lg-12 col-md-12 col-sm-12">
   <hr />
   <span>
       <strong>Email : </strong>  info@yourdomain.com 
   </span>
   <span>
       <strong>Call : </strong>  +95 - 890- 789- 9087 
   </span>
    <span>
       <strong>Fax : </strong>  +012340-908- 890 
   </span>
   <hr />
</div>
</div>
<div  class="row pad-top-botm client-info">
<div class="col-lg-6 col-md-6 col-sm-6">
<h4>  <strong>Informasi Pengirim Paket</strong></h4>
<strong>{{ $packet->nama_pengirim}}</strong>
<br />
<b>Alamat :</b>{{ $packet->alamat_pengirim}}
<br />
{{-- {{ $packet->id_companies}}
<br /> --}}
<b>No HP :</b> {{ $packet->nohp_pengirim}}
<br />
<br />
<h4>  <strong>Informasi Paket</strong></h4>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
  
     <h4>  <strong>Informasi Penerima Paket </strong></h4>
     <strong>{{ $packet->nama_penerima}}</strong>
     <br />
          <b>Alamat :</b>{{ $packet->alamat_penerima}}
      <br />
     <b>No HP :</b> {{ $packet->nohp_penerima}}
      <br />
     <b>Waktu Pengiriman:</b> 
     <script>
      CountDownTimer('{{$packet->created_at}}', 'countdown');
      function CountDownTimer(dt, id)
      {
        var end = new Date('{{$packet->end_pkt}}');
        // var end = 600000000;
        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;
        function showRemaining() {
          var now = new Date();
          var distance = end - now;
          if (distance < 0) {

            clearInterval(timer);
            document.getElementById(id).innerHTML = '<b>SELESAI</b> ';
            return;
          }
          var days = Math.floor(distance / _day);
          var hours = Math.floor((distance % _day) / _hour);
          var minutes = Math.floor((distance % _hour) / _minute);
          var seconds = Math.floor((distance % _minute) / _second);

          document.getElementById(id).innerHTML = days + 'days ';
          document.getElementById(id).innerHTML += hours + 'hrs ';
          document.getElementById(id).innerHTML += minutes + 'mins ';
          document.getElementById(id).innerHTML += seconds + 'secs';
          document.getElementById(id).innerHTML +='<h6>DALAM PROSES</h6>';
        }
        timer = setInterval(showRemaining, 1000);
      }
    </script>
    <div id="countdown">
    </div>
      <br />
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
 <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No Resi</th>
                          <th>Berat</th>
                          <th>Jenis</th>
                          <th>Kemasan</th>
                          <th>Status</th>
                           <th>Pengiriman</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{ $packet->resi_pkt}}</td>
                          <td>{{ $packet->berat_pkt}}</td>
                          <td>{{ $packet->jenis_pkt}}</td>
                          <td>{{ $packet->kemasan_pkt}}</td>
                          <td>{{ $packet->status_pkt}}</td>
                          <td>300 USD</td>
                      </tr>
                     
                  </tbody>
              </table>
     </div>
   <hr />
   <div class="ttl-amts">
     <h5>  Total :<strong>{{ $packet->ongkir_pkt}}</strong></h5> 
   </div>
   <hr />
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
  <strong> Catatan Penting </strong>
   <ol>
        <li>
          This is an electronic generated invoice so doesn't require any signature.

       </li>
       <li>
           Please read all terms and polices on  www.yourdomaon.com for returns, replacement and other issues.

       </li>
   </ol>
   </div>
</div>
<div class="row pad-top-botm">
<div class="col-lg-6 col-md-12 col-sm-12">
   <hr />
   <p>
     <form action="{{$packet->id}}" method="POST" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger btn-lg "><i class="glyphicon glyphicon-trash"></i> Hapus</button>
    </form>
  </p>
   </div>
</div>
</div>
          </div>
      </div>

@endsection