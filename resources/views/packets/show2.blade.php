@extends('layouts.app')
@section('content')
@section('title','DETAIL | JGX'); 
<div class="container">
<a href="{{ $packet->id}}/edit" class="btn btn-primary my-3"> Edit</a>
<form action="{{$packet->id}}" method="POST" class="d-inline">
@method('delete')
@csrf
  <button type="submit" class="btn btn-danger my-3"> Hapus</button>
</form>
<a href="/packets" class="card-link my-3">Kembali</a>
<table class="table table-hover">
    <thead>
      <h5>Pengirim</h5>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Nama</th>
        <td>{{ $packet->nama_pengirim}}</td>
        <th scope="row">No HP</th>
        <td>{{ $packet->nohp_pengirim}}</td>
      </tr>
      <tr>
        <th scope="row">Alamat</th>
        <td>{{ $packet->alamat_pengirim}}</td>
        <th scope="row">Asal Paket</th>
        <td>{{ $packet->id_companies}}</td>
      </tr>
      </tbody>
  </table>
  <table class="table table-hover">
    <thead>
      <h5>Penerima</h5>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Nama</th>
        <td>{{ $packet->nama_penerima}}</td>
        <th scope="row">No HP</th>
        <td>{{ $packet->nohp_penerima}}</td>
      </tr>
      <tr>
        <th scope="row-6">Alamat</th>
        <td>{{ $packet->alamat_penerima}}</td>
        <th scope="row">Tujuan</th>
        <td>{{ $packet->tujuan_pkt}}</td>
      </tr>
      </tbody>
  </table>
  <table class="table table-hover">
    <thead>
      <h5>Detail Paket</h5>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Volume</th>
        <td>{{ $packet->volume_pkt}}</td>
        <th scope="row">Berat</th>
        <td>{{ $packet->berat_pkt}}</td>
      </tr>
      <tr>
        <th scope="row-6">Resi</th>
        <td>{{ $packet->resi_pkt}}</td>
        <th scope="row">Jenis</th>
        <td>{{ $packet->jenis_pkt}}</td>
      </tr>
      <tr>
        <th scope="row-6">Kemasan</th>
        <td>{{ $packet->kemasan_pkt}}</td>
        <th scope="row">Count Down</th>
        <td><script>
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
              document.getElementById(id).innerHTML +='<h2>DALAM PROSES</h2>';
            }
            timer = setInterval(showRemaining, 1000);
          }
        </script>
        <div id="countdown"> </td>
      </tr>
      <tr>
        <th scope="row-6">Status Paket</th>
        <td>{{ $packet->status_pkt}}</td>
      </tr>
      </tbody>
  </table>
</div>
@endsection