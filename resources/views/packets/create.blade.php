@extends('layouts.app2')

@section('content')
@section('title','CREATE PACKET | JGX')
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
                        <label for="alamat_pegirim">Alamatd</label>
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
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   Informasi Paket
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="berat_pkt">Berat (/kg)</label>
                        <input class="form-control @error('berat_pkt') is-invalid @enderror" id="berat_pkt" value="{{old('berat_pkt')}}" type="text" name="berat_pkt">
                    </div>
                    <div class="form-group">
                        <label for="volume_pkt">volume</label>
                        <input class="form-control @error('volume_pkt') is-invalid @enderror" id="volume_pkt" value="{{old('volume_pkt')}}" type="text" name="volume_pkt">
                    </div>
                    <div class="form-group">
                        <label for="kemasan_pkt">Kemasan</label>
                        <input class="form-control @error('kemasan_pkt') is-invalid @enderror" id="kemasan_pkt" value="{{old('kemasan_pkt')}}" type="text" name="kemasan_pkt">
                    </div>
                    <div class="form-group">
                        <label for="pengiriman_pkt"> Pengiriman</label>
                        <select class="form-control @error('pengiriman_pkt') is-invalid @enderror" name="pengiriman_pkt" id="pengiriman_pkt" >
                          <option></option>
                          <option>Kantor Ke Rumah</option>
                          <option>Rumah Ke Rumah</option>
                          <option>Kantor Ke Kantor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pkt">Status</label>
                        <input class="form-control @error('status_pkt') is-invalid @enderror" id="status_pkt" value="{{old('status_pkt')}}" type="text" name="status_pkt">
                    </div>
                    <div class="form-group">
                        <label for="end_pkt">Waktu Pengiriman</label>
                        <input class="form-control @error('end_pkt') is-invalid @enderror" id="end_pkt" value="{{old('end_pkt')}}" type="datetime-local" name="end_pkt">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="id">Asal</label>
                        <select class="form-control @error('id_companies') is-invalid @enderror" name="id_companies" id="id_companies" value="{{old('id_companies')}}">
                            <option></option>
                            @foreach(App\Company::all() as $data)
                            <option value="{{$data->id}}">{{$data->kota_comp}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    {{-- new 5agus 2020 --}}
                    Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
    <div id="ifYes" style="visibility:hidden">
        If yes, explain: <input type='text' id='yes' name='yes'><br>
        What can we do to accommodate you?  <input type='text' id='acc' name='acc'>
    </div>
                    <script type="text/javascript">
                         window.onload = function() {
        document.getElementById('ifYes').style.display = 'none';
    }
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

},
   </script>
                </div>
                    {{-- new 5agus 2020 --}}
                    
                    {{-- <div class="form-group">
                        <label>COD</label>
                        <div class="checkbox my-3">
                            <label>
                                <input type="checkbox" value="">Ya
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="checkbox" value="">Tidak
                            </label>
                        </div>
                    </div> --}}
                    
                    <button type="submit" class="btn btn-info">Submit </button>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- new 7agus 2020 --}}

<h2 align="center">Menampilkan Form dengan Radio Button</h2>
<table id="tampilan">
      <tr>
          <td width="25%"><label for="alamat">Data Penerima</label></td>

        <td>
            <input type="radio" name="alamat" value="sama" class="detail"> Sama dengan data Pembeli		
            
        </td>
        <td width="40%">
            <input type="radio" name="alamat" value="berbeda" class="detail">Data berbeda
        </td>
      </tr>
      
      <tr>
          <td>
        </td>
        <td>
        </td>
        
        <td>
            <div id="form-input">
                  
                    <p>Nama<br />
                    <input type="text" name="nama"></p>
                      <p>Telpon/HP<br />
                    <input type="text" name="telpon"></p>
                    <p>Email<br />
                    <input type="text" name="email"></p>
              
              </div>
        </td>
        
      </tr>
  </table>
  
      <p align="center"><i>Catatan : Pilih radio button <b>Data bebeda</b> untuk menampilkan form.</i></p>
      <p align="center"><a href="http://www.eplusgo.com/">ePlusGo</a></p>
      <script type="text/javascript">
        $(document).ready(function(){
        $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
            $(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
                if ($("input[name='alamat']:checked").val() == "berbeda" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
                    $("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
                } else {
                    $("#form-input").slideUp("fast");  //Efek Slide Up (Menghilangkan Form Input)
                }
             });
         });
    </script>
{{-- new 7agus 2020 --}}
  @endsection