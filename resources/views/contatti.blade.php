@extends('layouts.app')

@section('titolo','Contatti')
	 
@section('main')
<div class="container">
	<form class="contatti-form">
	<div class="form-group">
		<label for="exampleFormControlInput1">Inserisci la tua mail</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@esempio.it">
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Compila la tua richiesta di info</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-lg btn-block btn-green-bool">Block level button</button>
	</form>
</div>


@endsection