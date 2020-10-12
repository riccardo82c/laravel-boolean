@extends('layouts.app')

@section('titolo','Studenti')
	 
@section('main')
	
	
<div class="card-group">
	@foreach ($studenti as $studente)
	<div class="card">
    <img src="{{$studente['img']}}" class="card-img-top ml-auto mr-auto" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$studente['name']}}</h5>
      <p class="card-text">{{$studente['descr']}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">{{$studente['work']}}</small>
    </div>
   </div> 
	@endforeach
</div>




   

	



@endsection