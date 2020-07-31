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
  <section class="why-boolean bg-white text-blue padding80 text-center">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-6">
          <div class="content p-0">
            <img class="thumbnail p-5" src="{{asset('img/check.svg')}}" alt="check-img">
            <h4>Rimborso se non trovi lavoro</h4>
            <p>Siamo così sicuri della qualità della nostra formazione che se
              non troverai lavoro entro 6 mesi, pur avendoci messo tutto
              l'impegno possibile, ti rimborsiamo ciò che hai pagato.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content p-0">
            <img class="thumbnail p-5" src="{{asset('img/check.svg')}}" alt="check-img">
            <h4>Supporto alla ricerca del lavoro</h4>
            <p>Ti prepariamo al meglio: CV, Linkedin e simulazioni di colloqui
              tecnici. Poi ti presentiamo alle aziende interessate ad assumere
              sviluppatori in tutta Italia e all'estero.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-lg-6">
          <div class="content p-0">
            <img class="thumbnail p-5" src="{{asset('img/check.svg')}}" alt="check-img">
            <h4>Oltre 700 ore di corso intensivo</h4>
            <p>300 ore di lezioni frontali in diretta al mattino.<br>
              400 ore di esercitazioni con supporto dedicato al pomeriggio.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content p-0">
            <img class="thumbnail p-5" src="{{asset('img/check.svg')}}" alt="check-img">
            <h4>Attestato Boolean</h4>
            <p>Rilasciamo un attestato finale che certifica la partecipazione <br>
              al corso e le competenze acquisite.
            </p>
          </div>
        </div>
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
