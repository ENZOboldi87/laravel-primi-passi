@extends('layouts.layouts')
@section('title')
  FAQ
@endsection
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="faq-content">
          <h2 class="text-blue">Domande frequenti</h2>
          <p class="text-blue">Le nostre risposte a tutte le tue domande. Non trovi la risposta che
            stai cercando? <a href="#">Contattaci</a> e saremo felici di darti
            una mano.
          </p>
        </div>
      </div>
    </div>
  </div>
    <div class="row no-gutters">
      <div class="col-lg-6 bg-light">
        <div class="faq-content text-blue">
          <h3>Prima del corso</h3>
          @foreach ($faqs_list_left as $faq)
          <div class="faq_question">
              <h4>{{ $faq['question']}}
                <i id="icon" class="fas fa-plus"></i>
              </h4>
              <p class="answer">{{$faq['answer']}}</p>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-6 blue-bg">
        <div class="faq-content text-white">
          <h3>Dopo il corso</h3>
          @foreach ($faqs_list_right as $faq)
          <div class="faq_question">
              <h4>{{ $faq['question-right']}}
                <i id="icon" class="fas fa-plus"></i>
              </h4>
              <p class="answer">{{$faq['answer-right']}}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
