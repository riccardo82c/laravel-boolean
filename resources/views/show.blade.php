@extends('layouts.app')

@section('titolo','Info studente')
	 
@section('main')
	


<div class="card-group">
	<div class="card">
    <img src="{{$studente['img']}}" class="card-img-top mx-auto student-photo" alt="immagine studente">
    <div class="card-body">
		<h5 class="card-title text-center">{{$studente['name']}}</h5>
		
		<p class="card-text">{{$studente['descr']}}</p>
		<p class="card-text">Anni: {{$studente['age']}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lavora presso: {{$studente['work']}}</small>
    </div>
   </div> 
</div>

@endsection