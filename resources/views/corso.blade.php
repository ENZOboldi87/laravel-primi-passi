@extends('layouts.layouts')
@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection
@section('content')
  <section class="ms_jumbotron_corso">
    <div class="background-image">
      <img src="{{asset('img/jumbo.jpg')}}" alt="background-image">
      <div class="filtro"></div>
    </div>
    <div class="container">
      <div class="content-corso">
        <h1 class="titolo-principale text-white"> SVILUPPATORE WEB
          <strong>IN 6 MESI</strong>
        </h1>
        <p class="sottoTitolo-principale text-white">Un corso a tempo pieno per diventare un professionista del web.
          Collegati alla classe virtuale e segui ogni giorno
           le lezioni in diretta da casa tua.
        </p>
      </div>
    </div>
  </section>
  <section class="ads-grey-details grey-bg text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title-section">A un passo dalla tua nuova professione</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="button-content">
            <ul class="list-unstyled d-flex justify-content-center">
              <li class="ms_button_ads green-bg text-white text-nowrap">
                <a href="#">Scopri il corso</a>
              </li>
              <li class="ms_button_ads blue-bg text-white text-nowrap">
                <a href="#">Guarda una lezione</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
