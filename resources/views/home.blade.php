@extends('layouts.layouts')
@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection
@section('content')
  <section class="jumbotron bg-white">
    <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>DIVENTA
          <strong>SVILUPPATORE WEB</strong>
        </h1>
        <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
        <ul>
          <li> <strong>6 mesi</strong> di corso intensivo online in diretta </li>
          <li><strong>nessuna competenza</strong> di programmazione richiesta</li>
          <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong> </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="left-content">
          <img src="{{asset('img/pc-black-gif.gif')}}" alt="pc-image">
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="under-jumbo">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="data-left">
            <h3>98%</h3>
            <p>La percentuale dei nostri studenti che ora lavora come web developer,
              oltre la metà a tempo indeterminato.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data-center">
            <h3>23.000</h3>
            <p>Lo stipendio medio lordo di partenza
               degli studenti assunti dalle nostre aziende partner.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data-right">
            <h3>#1</h3>
            <p>Siamo il primo istituto online in Italia per
              indice di gradimento e risultati conseguiti.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
