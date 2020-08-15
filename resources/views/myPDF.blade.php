<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

   
	<table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Volume</th>
            <th scope="col">Berat</th>
            <th scope="col">Resi</th>
            <th scope="col">Jenis</th>
            <th scope="col">Kemasan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
  
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach ($packets as $pkt)
          <tr>
          <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $pkt->nama_pengirim}}</td>
            <td>{{ $pkt->volume_pkt}}</td>
            <td>{{ $pkt->berat_pkt}}</td>
            {{-- <td>{{ $pkt->resi_pkt}}</td> --}}
            <td>{{ $pkt->jenis_pkt}}</td>
            <td>{{ $pkt->kemasan_pkt}}</td>
            {{-- <td>{{ $pkt->status_pkt}}</td> --}}
            <td><a href="/packets/{{ $pkt->id }}" class="badge badge-warning">Detail</a></td>
          {{-- <td><button type="button" href="/packets/{{$pkt->id}}" class="btn btn-primary btn-sm">Detail</button></td> --}}
          </tr>
          
          @endforeach
        </tbody>
      </table>
     	
</body>
</html>
