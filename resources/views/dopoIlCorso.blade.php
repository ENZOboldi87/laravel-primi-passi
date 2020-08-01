@extends('layouts.layouts')
@section('title')
  Dopo il corso, carriere lavorative
@endsection
@section('content')
  <section class="ms_jumbotron_corso">
    <div class="background-image">
      <img src="{{asset('img/jumbodopo.jpg')}}" alt="background-image">
      <div class="filtro"></div>
    </div>
    <div class="container">
      <div class="content-corso">
        <h1 class="titolo-principale text-white"> IL MONDO DEL LAVORO
          <strong>TI STA ASPETTANDO</strong>
        </h1>
        <p class="sottoTitolo-principale text-white">La professione del web
          developer è molto richiesta. Terminato il corso, i nostri studenti
          ricevono offerte da aziende pronte ad assumerli in ambienti di lavoro
          stimolanti.
        </p>
      </div>
    </div>
  </section>
  <section class="ads-grey-details grey-bg text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="title-section">62.000</h3>
          <p>Le posizioni di lavoro aperte in ambito ICT in Italia nel triennio
            2019-2021.
          </p>
          <span>(*Osservatorio delle Competenze Digitali 2018)</span>
        </div>
        <div class="col">
          <h3 class="title-section">49,1%</h3>
          <p>La percentuale delle posizioni aperte sopracitate dedicata agli
            sviluppatori.
          </p>
        </div>
        <div class="col">
          <h3 class="title-section">12</h3>
          <p>I giorni che mediamente trascorrono dalla fine delle lezioni al
            primo colloquio.
          </p>
        </div>
    </div>
  </section>
  <section class="why-boolean bg-white text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title-section">Siamo con te dal primo giorno di corso alla firma del tuo contratto
             di assunzione.
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/bag.svg')}}" alt="bag-img">
            <h4>Career coach</h4>
            <p>Il career coach ti aiuta a costruire un CV e un portfolio
              efficaci così da presentarti al meglio alle aziende. Al termine
              del corso ricevi <strong>assistenza</strong> per affrontare con
              serenità i primi colloqui di lavoro.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/chat.svg')}}" alt="chat-img">
            <h4>Aziende partner</h4>
            <p>Il network dei partner Boolean conta <strong>oltre
              100 aziende</strong> sparse in Italia e all’estero. Selezioniamo
              ogni impresa con cura, in modo da offrirti ambienti lavorativi
              con i nostri stessi valori e dall’elevata professionalità.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/home.svg')}}" alt="home-img">
            <h4>Inserimento lavorativo</h4>
            <p>Il 75% dei nostri studenti trova lavoro <strong>entro 30
              giorni</strong> dalla fine delle lezioni, il 98% entro 6 mesi.
              Tutto ciò grazie all’allineamento tra la richiesta di mercato e
              le competenze che ti trasmettiamo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="school-gif-section grey-bg text-blue padding40">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Una professione con retribuzioni sopra la media</h3>
            <p>Più della metà dei nostri studenti parte direttamente da un
              <strong>contratto a tempo indeterminato</strong> con retribuzioni
              destinate a crescere. Preziose nella fase di placement le
              simulazioni di colloqui con i career coach e l’ottimizzazione del
              profilo Linkedin e del portfolio GitHub.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/grafico.png')}}" alt="grafico-image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="money-back bg-white text-blue padding40">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title-section text-center">Money Back: la nostra garanzia</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <p>A partire dalla fine del corso, <strong>il nostro dipartimento
            placement ti supporterà in tutte le fasi di ricerca del lavoro.
            </strong> L’impegno che avrai dimostrato durante il corso,
            la tua resilienza e le competenze acquisite faranno la differenza.
            Se dopo 6 mesi di ricerca attiva non avrai trovato un impiego,
            <strong>ti rimborseremo l’intero ammontare del corso</strong>
            grazie alla nostra garanzia Money Back.
          </p>
        </div>
        <div class="col-lg-6">
          <p>Requisiti per la Garanzia di Rimborso:</p>
          <ul class="list-unstyled">
            <li>Presenziare all’80% delle lezioni teoriche</li>
            <li>Consegnare almeno il 90% degli esercizi assegnati</li>
            <li>Essere disponibile a lavorare nelle più grandi città italiane</li>
            <li>Avere un’età compresa tra i 18 e i 40 anni</li>
          </ul>
          <span>Per saperne di più, <a href="#">clicca qui</a> </span>
        </div>
      </div>
    </div>
  </section>
  <section class="clients bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h5>I nostri studenti sono stati assunti da:</h5>
        </div>
      </div>
      <div class="companies mb-4 d-flex align-items-center">
        <div class="image-company">
          <img src="{{asset('img/eleva.png')}}" alt="eleva-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/armadio-verde.png')}}" alt="armadio-verde-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/intesys.png')}}" alt="intesys-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/zanichelli.png')}}" alt="zanichelli-image">
        </div>
      </div>
      <div class="companies mb-4 d-flex justify-content-end text-right">
        <div class="image-company">
          <img src="{{asset('img/wiseemotions.png')}}" alt="wiseemotions-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/keypartner.png')}}" alt="keypartner-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/fabbrica-digitale.png')}}" alt="fabbrica-digitale-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/atoms.png')}}" alt="atoms-image">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="button text-center padding40">
            <button class="ms_button_ads blue-bg text-white text-nowrap" type="button" name="button">SEI UN'AZIENDA? CONTATTACI</button>
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
