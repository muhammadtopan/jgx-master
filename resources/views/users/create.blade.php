@extends('layouts.app2')
@section('content')
@section('title','ADD KURIR | JGX')
<div class="row">
    <form method="POST" action="/users/index">
        @csrf
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Biodata Kurir
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}" type="text" name="password">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>
  @endsection