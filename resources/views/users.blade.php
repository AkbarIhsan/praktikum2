@extends('adminlte::page')

@section('content')
<br>
<center>
    <div class="card" style="width: 18rem;">
        @if(Auth::user()->foto)
        <img src="{{ asset('images/' . Auth::user()->foto) }}" alt="Profile foto">
    @else
        <p>No photo available</p>
    @endif
    
    <div class="card-body">
      <h5 class="card-text"><center>{{$users->name}}</center></h5>
      <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="foto">
        <button type="submit">Upload</button></form>
      </li>
      <li class="list-group-item">{{ $users->gender}}</li>
      <li class="list-group-item">{{$users->alamat}}</li>
    </ul>
  </div>
</center>

@endsection

@section('footer')
    ini footer yak
@endsection