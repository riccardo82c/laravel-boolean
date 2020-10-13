@extends('layouts.app')

@section('titolo','Studenti')
	 
@section('main')
	
<div class="card-group">
	@foreach ($studenti as $key => $studente)
	<div class="card">
    <img src="{{$studente['img']}}" class="card-img-top ml-auto mr-auto student-photo" alt="...">
    <div class="card-body">
	 <a href="{{route('show',['id' => $key])}}">
			<h5 class="card-title text-center">{{$studente['name']}}</h5>
		</a>
     <p class="card-text">Anni: {{$studente['age']}}</p>
	   <p class="card-text">{{$studente['descr']}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">{{$studente['work']}}</small>
    </div>
   </div> 
	@endforeach
</div>

@endsection