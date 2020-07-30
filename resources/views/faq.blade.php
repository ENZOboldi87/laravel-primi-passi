@extends('layouts.layouts')
@section('title')
  FAQ
@endsection
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che
          stai cercando? <a href="#">Contattaci</a> e saremo felici di darti
          una mano.
        </p>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="faq-content bg-light text-blue">
          <h2>Prima del corso</h2>
          <div class="faq_question">
            @foreach ($faqs_list_left as $faq)
              <h3>{{ $faq['question']}}
                <i class="fas fa-plus"></i>
              </h3>
              <p class="answer">{{$faq['answer']}}</p>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="faq-content blue-bg text-white">
          <h2>Dopo il corso</h2>
          <div class="faq_question">
            @foreach ($faqs_list_right as $faq)
              <h3>{{ $faq['question-right']}}
                <i class="fas fa-plus"></i>
              </h3>
              <p class="answer">{{$faq['answer-right']}}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
