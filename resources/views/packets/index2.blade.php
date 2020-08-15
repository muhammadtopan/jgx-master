@extends('layouts.app')
@section('content')
@section('title','HOME | JGX'); 
   
  {{-- form --}}
  <div class="container">
    <h3>Daftar Paket</h3>
    <div class="row">
      <a href="generate-pdf" class="btn btn-primary my-3" target="_blank"> Print</a>
  </div>
		<table class='table table-bordered'>
    <a href="/packets/create" class="btn btn-primary my-3">Tambah Baru</a>
  @if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif
  {{-- <p>Cari Data Packet :</p>
  <form action="{{url('packets.cari')}}" method="GET">
    {{ @csrf_field() }}
		<input type="text" name="cari" placeholder="Cari Packets .." >
		<input type="submit" class="btn btn-md btn-outline-primary">
	</form> --}}
  <form action="{{url('packets.cari')}}" method="GET">
    {{ @csrf_field() }}
		<input type="text" name="cari" placeholder="Cari Packets .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    {{-- <table class="table table-hover mt-3"> --}}
    <table class="table table-bordered table-hover mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          {{-- <th scope="col">@sortablelink('nama_pengirim') </th> --}}
          <th><b>@sortablelink('nama_pengirim', 'Nama Pengirim')</b><i class="fa fa-fw fa-sort"></i></th>
          <th><b>@sortablelink('created_at', 'Waktu Pengiriman')</b><i class="fa fa-fw fa-sort"></i></th>
          <th scope="col">Volume</th>
          <th scope="col">Berat (/kg)</th>
          <th scope="col">Jenis</th>
          <th scope="col">Kemasan</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
        @if($packets->count())
        @foreach ($packets as $pkt)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
          <td>{{ $pkt->nama_pengirim}}</td>
          <td>{{ $pkt->created_at}}</td>
          <td>{{ $pkt->volume_pkt}}</td>
          <td>{{ $pkt->berat_pkt}}</td>
          {{-- <td>{{ $pkt->resi_pkt}}</td> --}}
          <td>{{ $pkt->jenis_pkt}}</td>
          <td>{{ $pkt->kemasan_pkt}}</td>
          <td>{{ $pkt->status_pkt}}</td>
          {{-- <td><span class="label label-warning"><a href="/packets/{{ $pkt->id }}"></a> Detail</span></td> --}}
          <td><a href="/packets/{{ $pkt->id }}" class="badge badge-warning">Detail</a></td>
        {{-- <td><button type="button" href="/packets/{{$pkt->id}}" class="btn btn-primary btn-sm">Detail</button></td> --}}
        </tr>
        
        @endforeach
        @endif
      </tbody>
    </table>
    {!! $packets->appends(\Request::except('page'))->render() !!}
    <h6>Jumlah Data : {{ $packets->total()}} </h6>
    {{-- {{ $packets->links() }} --}}
  </div>
  @endsection
        
