@extends('adminlte::page')

@section('content')
<br>
<center>
    <div class="card" style="width: 18rem;">
    {{-- <img src=" {{asset($users->foto)}}" class="card-img-top" alt="..."> --}}
    <div class="card-body">
      <h5 class="card-text"><center>{{$users->name}}</center></h5>
      <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $users->gender}}</li>
      <li class="list-group-item">{{$users->alamat}}</li>
    </ul>
  </div>
</center>

@endsection

@section('footer')
    ini footer yak
@endsection