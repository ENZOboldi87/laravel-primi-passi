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
  <section class="ads-grey grey-bg text-blue padding80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Corso full time</h3>
            <p>Il corso richiede un <strong>impegno a tempo pieno</strong> e,
               come in una vera scuola, è richiesta la partecipazione a tutte
               le attività, 5 giorni su 7, mattina e pomeriggio.
            </p>
            <p>Al mattino, <strong>lezioni di teoria con i teacher</strong>
              per imparare nuovi concetti.
            </p>
            <p>Al pomeriggio, <strong>esercizi pratici</strong> per mettere
              subito in pratica ciò che hai imparato, <strong>affiancato dai
                nostri tutor.</strong>
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="timing-lesson">
            <img src="{{asset('img/book.svg')}}" alt="book-image">
            <span class="sottoTitolo-principale">9:30 - 13:00 Teoria</span>
          </div>
          <div class="timing-lesson">
            <img src="{{asset('img/cibo.svg')}}" alt="cibo-image">
            <span class="sottoTitolo-principale">13:00 - 15:00 Pausa</span>
          </div>
          <div class="timing-lesson">
            <img src="{{asset('img/codepom.svg')}}" alt="codepom-image">
            <span class="sottoTitolo-principale">15:00 - 18:00 Si sviluppa!</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ads-blue blue-bg text-white padding80 text-right">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/aulavirtuale.png')}}" alt="aulavirtuale-image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h3>In classe senza muoversi da casa</h3>
            <p>Tutte le lezioni si svolgono nella nostra aula virtuale.</p>
            <p>Dalle 9.30 del mattino fino a tardo pomeriggio, assimili nozioni
              e le metti in pratica: comodamente da casa.
            </p>
            <p>Grazie alle <strong>400 ore di esercitazione assistita</strong>,
              puoi contare sul supporto dei tutor per risolvere ogni dubbio.
              Così risparmi tempo e massimizzi i risultati.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="why-boolean bg-white text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title-section">Sei un principiante? <br>
            Nessun problema.
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>Il corso parte da zero e non richiede alcuna competenza di
            programmazione.<br> Siamo convinti che la capacità di ragionamento,
            la passione e l'impegno siano i soli requisiti indispensabili.
          </p>
          <p>Ecco cosa imparerai in 6 mesi:</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/html.png')}}" alt="html-img">
            <h4>HTML 5 e CSS3</h4>
            <p>Saprai creare da zero layout di siti complessi.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/js.png')}}" alt="javascript-img">
            <h4>Javascript e jQuery</h4>
            <p>Per aggiungere elementi interattivi alle pagine.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/php.png')}}" alt="php-img">
            <h4>PHP</h4>
            <p>Imparerai i principi della programmazione ad oggetti.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/mysql.png')}}" alt="mysql-img">
            <h4>MySQL e SQL</h4>
            <p>Imparerai a progettare e interrogare i database</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/laravel.png')}}" alt="laravel-img">
            <h4>Laravel</h4>
            <p>Creerai complesse applicazioni con Laravel.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/vuejs.png')}}" alt="vuejs-img">
            <h4>VueJS</h4>
            <p>Utilizzerai VueJS per creare web app moderne.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ms_jumbotron_corso blue-bg">
    <div class="background-image">
      {{-- <img src="{{asset('img/jumbo.jpg')}}" alt="background-image"> --}}
      <div class="filtro"></div>
    </div>
    <div class="container">
      {{-- <div class="content-corso">
        <h1 class="titolo-principale text-white"> SVILUPPATORE WEB
          <strong>IN 6 MESI</strong>
        </h1>
        <p class="sottoTitolo-principale text-white">Un corso a tempo pieno per diventare un professionista del web.
          Collegati alla classe virtuale e segui ogni giorno
           le lezioni in diretta da casa tua.
        </p>
      </div> --}}
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
