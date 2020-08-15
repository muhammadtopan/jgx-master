@extends('layouts.app2')
@section('title','EDIT | JGX'); 
@section('content')
<div class="row">
  <div class="col-md-12">
      <h1 class="page-head-line">EDIT PAKET</h1>
      <div class="page-subhead-line">
  <div class="row pad-top-botm">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <a href="/packets" class="btn btn-info btn-md" >Kembali</a>
       </div>
    </div>
  </div>
  </div>
</div>
      <form method="POST" action="/packets/{{$packet->id}}">
        @method('patch')
        @csrf
    <div class="form-group">
      <div class="form-row">
        <div class="form-group col-md-6">
          <h5>Pengirim Paket</h5>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama_pengirim">Nama</label>
        <input type="text" name="nama_pengirim" class="form-control @error('nama_pengirim') is-invalid @enderror" id="nama_pengirim" value="{{ $packet->nama_pengirim}}">
          <label for="nohp_pengirim">No HP</label>
          <input type="text" name="nohp_pengirim" class="form-control @error('nohp_pengirim') is-invalid @enderror" id="nohp_pengirim" value="{{ $packet->nohp_pengirim}}">
        </div>
        <div class="form-group col-md-6">
          <label for="tujuan_pkt">tujuan</label>
          <select class="form-control @error('tujuan_pkt') is-invalid @enderror" name="tujuan_pkt" id="tujuan_pkt" value="{{$packet->tujuan_pkt}}">
            <option></option>
            <option>Padang</option>
            <option>Bukittinggi</option>
            <option>Payakumbuh</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="alamat_pengirim">Alamat</label>
    <textarea class="form-control @error('alamat_pengirim') is-invalid @enderror" name="alamat_pengirim" id="alamat_pengirim" value="{{ $packet->alamat_pengirim}}" rows="3" >{{ $packet->alamat_pengirim}}</textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <h5>Penerima Paket</h5>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama_penerima">Nama</label>
          <input type="text" name="nama_penerima" class="form-control @error('nama_penerima') is-invalid @enderror" id="nama_penerima" value="{{ $packet->nama_penerima}}">
          <label for="nohp_penerima">No HP</label>
          <input type="text" name="nohp_penerima" class="form-control @error('nohp_penerima') is-invalid @enderror" id="nohp_penerima" value="{{ $packet->nohp_penerima}}">
        </div>
        <div class="form-group col-md-6">
          <label for="id">Asal</label>
          <select class="form-control @error('id_companies') is-invalid @enderror" name="id_companies" id="id_companies" value="{{old('id_companies')}}">
            <option>Pilih Asal</option>
            @foreach(App\Company::all() as $data)
          <option value="{{$data->id}}">{{$data->kota_comp}} </option>
           @endforeach
          </select>
        </div>
        {{-- <div class="form-group col-md-6">
          <label for="asal_pkt">asal</label>
          <select class="form-control @error('asal_pkt') is-invalid @enderror" name="asal_pkt" id="asal_pkt" value="{{$packet->asal_pkt}}">
            <option></option>
            <option>Padang</option>
            <option>Bukittinggi</option>
            <option>Payakumbuh</option>
          </select> --}}
        </div>
        <div class="form-group col-md-6">
          <label for="alamat_penerima">Alamat</label>
    <textarea class="form-control @error('alamat_penerima') is-invalid @enderror" name="alamat_penerima" id="alamat_penerima" rows="3" value="{{ $packet->alamat_penerima}}">{{ $packet->alamat_penerima}}</textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <h5>Status Paket</h5>
        </div>
        <div class="form-group col-md-6">
          {{-- <h5>Penerima Paket</h5> --}}
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="jenis_pkt">Jenis Paket</label>
          <input type="text" name="jenis_pkt" class="form-control @error('jenis_pkt') is-invalid @enderror" id="jenis_pkt" value="{{ $packet->jenis_pkt}}">
        </div>
        <div class="form-group col-md-6">
          <label for="berat_pkt">Berat (kg)</label>
          <input type="number" name="berat_pkt" class="form-control @error('berat_pkt') is-invalid @enderror" id="berat_pkt" value="{{ $packet->berat_pkt}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="kemasan_pkt">Bentuk Kemasan</label>
          <select class="form-control @error('kemasan_pkt') is-invalid @enderror" name="kemasan_pkt" id="kemasan_pkt" value="{{$packet->kemasan_pkt}}">
            <option></option>
            <option>Amplop</option>
            <option>Karung</option>
            <option>Kotak</option>
            <option>Plastik</option>
            <option>Dan Lainnya</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="volume_pkt">Volume</label>
          <input type="number" name="volume_pkt"class="form-control @error('volume_pkt') is-invalid @enderror" id="volume_pkt" value="{{ $packet->volume_pkt}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="pengiriman_pkt">Jenis Pengiriman</label>
          <select class="form-control @error('pengiriman_pkt') is-invalid @enderror" name="pengiriman_pkt" id="pengiriman_pkt" value="{{ $packet->pengiriman_pkt}}">
            <option></option>
            <option>Reguler</option>
            <option>Express</option>
          </select>
        </div>
        <div class="form-group col-md-6">
            <label for="end_pkt">Deadtime</label>
            <input type="text" name="end_pkt"class="form-control @error('end_pkt') is-invalid @enderror" id="end_pkt" value="{{old('volume_pkt')}}">
            {{-- <input type="time" name="end_pkt"class="form-control @error('end_pkt') is-invalid @enderror" id="end_pkt" value="{{old('volume_pkt')}}"> --}}
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="status_pkt">Status Paket</label>
            <input type="text" name="status_pkt" class="form-control @error('status_pkt') is-invalid @enderror" id="status_pkt" value="{{old('status_pkt')}}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    {{-- <div class="form-row mt-2">
      <div class="form-group col-md-6">
        <div class="alert alert-success" role="alert">
          Total Ongkir
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="alert alert-success" role="alert">
         No Resi
        </div>
      </div>
    </div> --}}
  </form>
</div>
  @endsection