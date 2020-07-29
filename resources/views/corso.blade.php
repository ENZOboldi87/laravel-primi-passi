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

@endsection
