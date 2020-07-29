<header>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo.png')}}" alt="immagine-logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sezione-corso')}}">Corso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sezione-dopoILcorso')}}">Dopo il corso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">lezione gratuita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">assumi i nostri studenti</a>
          </li>
          <li class="nav-item ms_button">
            <a class="nav-link text-white" href="#">candidati ora</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
