@extends('layouts.app2')
@section('content')
@section('title','CREATE | JGX')
<div class="row">
    <form method="POST" action="/packets">
        @csrf
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Pengirim Paket
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label for="nama_pengirim">Nama</label>
                        <input class="form-control @error('nama_pengirim') is-invalid @enderror" id="nama" value="{{old('nama_pengirim')}}" type="text" name="nama_pengirim">
                    </div>
                    <div class="form-group">
                        <label for="nohp_pengirim">No HP</label>
                        <input class="form-control @error('nohp_pengirim') is-invalid @enderror" id="nohp"  value="{{old('nohp_pengirim')}}" type="text" name="nohp_pengirim">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pegirim">Alamat</label>
                        <textarea rows="2" class="form-control  @error('alamat_pengirim') is-invalid @enderror" name="alamat_pengirim" id="alamat_pengirim">{{old('alamat_pengirim')}}</textarea>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
                Penerima Paket
            </div>
            <div class="panel-body">       
                    <div class="form-group">
                        <label for="nama_penerima">Nama</label>
                        <input class="form-control @error('nama_penerima') is-invalid @enderror" id="nama" value="{{old('nama_penerima')}}" type="text" name="nama_penerima">
                    </div>
                    <div class="form-group">
                        <label for="nohp_penerima">No HP</label>
                        <input class="form-control @error('nohp_penerima') is-invalid @enderror" id="nohp"  value="{{old('nohp_penerima')}}" type="text" name="nohp_penerima">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pegirim">Alamat</label>
                        <textarea rows="2" class="form-control  @error('alamat_penerima') is-invalid @enderror" name="alamat_penerima" id="alamat_penerima">{{old('alamat_penerima')}}</textarea>
                    </div>
            </div>
        </div>
    </div>
        <!--/.ROW-->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    PAKET
                </div>
                <div class="panel-body">
                    <hr>
                    <div class="form-group">
                        <label for="berat_pkt">berat (/kg)</label>
                        <input class="form-control @error('berat_pkt') is-invalid @enderror" id="berat" value="{{old('berat_pkt')}}" type="text" name="berat_pkt">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>COD</label>
                        <div class="checkbox my-3">
                            <label>
                                <input type="checkbox" value="">Ya
                            </label>
                        </div>
                        <div class="checkbox d-inline">
                            <label>
                                <input type="checkbox" value="">Tidak
                            </label>
                        </div>
                        
                    </div>
                    <hr>
                    
                    <button type="submit" class="btn btn-info">Submit </button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
  @endsection