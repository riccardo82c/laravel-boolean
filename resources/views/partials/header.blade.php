<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Boolean</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
		<a class="nav-link {{url()->current() == route('home') ? 'active' : ''}}" href="{{route('home')}}">Home </a>
		</li>

		

		@if (url()->current() == route('home') || url()->current() == route('contact')) 

		{{-- studenti li no drop --}}
		<li class="nav-item">
        <a class="nav-link {{url()->current() == route('student') ? 'active' : ''}}" href="{{route('student')}}">Studenti</a>
		</li>
			 
		@else

		{{-- personal student li  dropdown--}}
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Studenti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			 @foreach ($studenti as $key => $studente)
          	<a class="dropdown-item" href="{{route('show',['id' => $key])}}">{{$studente['name']}}</a>
			 @endforeach
			 <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('student')}}">Tutti gli studenti</a>
        </div>
      </li>
			 
		@endif

		<li class="nav-item">
        <a class="nav-link {{url()->current() == route('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contatti</a>
      </li>
    </ul>
  </div>
</nav>