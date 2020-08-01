@extends('layouts.layouts')
@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection
@section('content')
  <section class="interactive-video bg-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="video-lesson">
          </div>
      </div>
    </div>
  </section>
  <section class="why-boolean bg-white text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title-section">Perche Boolean?</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>Siamo con te dal rpimo giorno di corso alla firma del tuo contratto
             di assunzione.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/home.svg')}}" alt="home-img">
            <h4>Impara da casa tua</h4>
            <p>8 studenti su 10 trovano che le lezioni in
              aula virtuale siano migliori rispetto alle
              lezioni tradizionali in classe.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/pen.svg')}}" alt="pen-img">
            <h4>Corso pratico e interattivo</h4>
            <p>Più del 40% del tuo tempo è dedicato a
              esercitazioni e a case study. Intervieni in
              diretta e fai domande quando vuoi.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/chat.svg')}}" alt="chat-img">
            <h4>Esercitazione assistita</h4>
            <p>Per ogni tuo dubbio, in aula virtuale c’è sempre un
              tutor pronto a darti una mano e a
              incoraggiarti.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/bag.svg')}}" alt="bag-img">
            <h4>Colloqui garantiti</h4>
            <p>Ti presentiamo alle nostre aziende partner e se
              entro 6 mesi non trovi lavoro, puoi usufruire della
              garanzia Money Back
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/code.svg')}}" alt="code-img">
            <h4>Rivedi le lezioni</h4>
            <p>Sei stato assente o non hai capito? Niente paura,
              hai a disposizione le registrazioni
              di ogni lezione.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/light.svg')}}" alt="light-img">
            <h4>Un'esperienza condivisa</h4>
            <p>Segui il corso insieme a ragazzi con la tua stessa motivazione
              e la tua stessa determinazione. Insieme si va
              lontano.
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
