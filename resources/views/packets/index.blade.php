@extends('layouts.app2')
   
@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        {{-- <h1 class="page-subhead-line">You are normal user.</h1> --}}
                        @if (session('status'))
                        <div class="alert alert-success">
                          {{session('status')}}
                        </div>
                        @endif
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="/packets/create">
                                <i class="fa fa-bolt fa-5x"></i>
                                <h5>Express</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="/packets/create_reguler">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5>Reguler</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Reguler Optional</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      {{-- <th scope="col">@sortablelink('nama_pengirim') </th> --}}
                                      <th><b>@sortablelink('nama_pengirim', 'Nama Pengirim')</b><i class="fa fa-fw fa-sort"></i></th>
                                      <th><b>@sortablelink('created_at', 'Waktu Pengiriman')</b><i class="fa fa-fw fa-sort"></i></th>
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
                                    {{-- <td>{{ $pkt->resi_pkt}}</td> --}}
                                    <td>{{ $pkt->jenis_pkt}}</td>
                                    <td>{{ $pkt->kemasan_pkt}}</td>
                                    <td>{{ $pkt->status_pkt}}</td>
                                    {{-- <button class="btn"><i class="glyphicon glyphicon-headphones"></i>View</button> --}}
                                    {{-- <td><a href="/packets/{{ $pkt->id }}" class="label label-warning"></a> Detail</td> --}}
                                    <td><a href="/packets/{{ $pkt->id }}" class="label label-warning">Detail</a></td>
                                  {{-- <td><button type="button" href="/packets/{{$pkt->id}}" class="btn btn-primary btn-sm">Detail</button></td> --}}
                                  </tr>
                                  
                                  @endforeach
                                  @endif
                                  
                                </tbody>
                            </table>
                            <h6>Jumlah Data : {{ $packets->total()}} </h6>
                            {!! $packets->appends(\Request::except('page'))->render() !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Recent Comments Example
                            </div>
                            <div class="panel-body">
                                <ul class="media-list">

                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle img-comments" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Nulla gravida vitae  </h4>
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              <!-- Nested media object -->
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Amet ligula enim</h4>
                                                            Donec sit amet ligula enim .
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle img-comments" src="assets/img/user.png" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Donec t ligula enim</h4>
                                                            Donec sit amet  amet ligula enim . 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
       

 
@endsection