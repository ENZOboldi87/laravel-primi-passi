@extends('layouts.layouts')
@section('title')
  Il corso per diventare web developer e trovare un nuovo lavoro
@endsection
@section('content')
  <section class="ms_jumbotron bg-white text-blue padding80">
    <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="titolo-principale">DIVENTA
          <strong>SVILUPPATORE WEB</strong>
        </h1>
        <p class="sottoTitolo-principale">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
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
  <section class="under-jumbo blue-bg text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="data text-center">
            <h3>98%</h3>
            <p>La percentuale dei nostri studenti che ora lavora come web developer,
              oltre la metà a tempo indeterminato.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data text-center">
            <h3>23.000</h3>
            <p>Lo stipendio medio lordo di partenza
               degli studenti assunti dalle nostre aziende partner.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data text-center">
            <h3>#1</h3>
            <p>Siamo il primo istituto online in Italia per
              indice di gradimento e risultati conseguiti.
            </p>
          </div>
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
      <div class="companies d-flex align-items-center">
        <div class="image-company">
          <img src="{{asset('img/facileit.png')}}" alt="facileit-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/oneday.png')}}" alt="oneday-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/prima.png')}}" alt="prima-image">
        </div>
      </div>
      <div class="companies d-flex justify-content-end text-right">
        <div class="image-company">
          <img src="{{asset('img/fabbrica-digitale-big.png')}}" alt="fabbricaDigitale-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/nephila.png')}}" alt="nephila-image">
        </div>
        <div class="image-company">
          <img src="{{asset('img/rds.png')}}" alt="rds-image">
        </div>
      </div>
    </div>
  </section>
  <section class="school-gif-section grey-bg text-blue padding80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Una vera scuola a casa tua</h3>
            <p>Le lezioni si svolgono tutti i giorni, dal lunedì al venerdì,
              in <strong> aula virtuale.</strong>
            </p>
            <ul>
              <li> <strong>Il mattino</strong> è maggiormente dedicato alla
                teoria con lezioni in diretta. Comodamente da casa tua, puoi
                interagire con i tuoi compagni e con il <strong>teacher</strong>,
                proprio come se fossi a scuola.
              </li>
              <li> <strong>Il pomeriggio</strong> è dedicato alle esercitazioni.
                  <br>In qualsiasi momento puoi chiedere supporto ai
                  <strong>tutor</strong> per risolvere gli esercizi che ti
                  abbiamo assegnato. Alza la mano e siamo subito da te!
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/slack.gif')}}" alt="gif-school">
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
            <img src="{{asset('img/boolflix.png')}}" alt="boolflix-image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h3>Un programma fortemente pratico</h3>
            <p>Ogni concetto teorico che assimili è seguito da un esercizio.</p>
            <p>Il piano di studi pensato per incrementare le tue competenze
              trae spunto da case study reali, così da proporti esercizi
              sempre nuovi.
            </p>
            <p>Così sei pronto per entrare nel mercato del lavoro.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ads-grey grey-bg text-blue padding80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Un dipartimento placement dedicato</h3>
            <p>Finito il corso, il nostro compito è quello di <strong>offrirti
              un costante e attivo sostegno nella ricerca del lavoro.</strong>
            </p>
            <p>A seconda della tua personalità e delle tue attitudini, <strong>
              ti presentiamo alle aziende che più si avvicinano alle tue
              esigenze</strong> , insegnandoti a utilizzare strumenti e metodi
              per rendere il tuo profilo accattivante per il mercato del lavoro.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/studente.png')}}" alt="studente-image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="why-boolean bg-white text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Perche Boolean?</h3>
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
            <p>8 studenti su 10 trovano che le lezioni in aula virtuale siano migliori rispetto alle lezioni tradizionali in classe.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/pen.svg')}}" alt="pen-img">
            <h4>Corso pratico e interattivo</h4>
            <p>Più del 40% del tuo tempo è dedicato a esercitazioni e a case study. Intervieni in diretta e fai domande quando vuoi.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/chat.svg')}}" alt="chat-img">
            <h4>Esercitazione assistita</h4>
            <p>Per ogni tuo dubbio, in aula virtuale c’è sempre un tutor pronto a darti una mano e a incoraggiarti.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/bag.svg')}}" alt="bag-img">
            <h4>Colloqui garantiti</h4>
            <p>Ti presentiamo alle nostre aziende partner e se entro 6 mesi non trovi lavoro, puoi usufruire della garanzia Money Back</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/code.svg')}}" alt="code-img">
            <h4>Rivedi le lezioni</h4>
            <p>Sei stato assente o non hai capito? Niente paura, hai a disposizione le registrazioni di ogni lezione.</p>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <img class="thumbnail" src="{{asset('img/light.svg')}}" alt="light-img">
            <h4>Un'esperienza condivisa</h4>
            <p>Segui il corso insieme a ragazzi con la tua stessa motivazione e la tua stessa determinazione. Insieme si va lontano.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ads-career-grey grey-bg text-blue padding80 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Dai una svolta alla tua carriera</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>Le storie di successo di studenti e aziende partner</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/boolflix.png')}}" alt="boolflix-image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content text-right">
            <h3>Il mio lavoro dopo Boolean</h3>
            <p>Partendo da zero, in due settimane ho costruito il mio primo sito! Sono molto soddisfatto di aver scelto questo corso: l'impressione che si ha è quella di entrare in una classe vera e propria. Un corso innovativo che mi ha stupito”.
            </p>
            <p>Alessandro Biagini - Studente Boolean assunto da DISC SPA come web developer</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Un network di aziende di livello</h3>
            <p>"La richiesta di web developer da parte delle aziende è molto alta. I pochi professionisti sul mercato vengono contattati quotidianamente da aziende potenzialmente interessate ad assumerli. La laurea non è un requisito fondamentale per questa professione: lo sono la voglia di formarsi e di crescere professionalmente".
            </p>
            <p>Stefania Gardini - HR Talent Acquisition in Facile.it</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-logo">
            <img src="{{asset('img/career-2.png')}}" alt="career-image">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
