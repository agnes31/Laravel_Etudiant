@extends('layouts.layout')
@section('content')
@section('title','Accueil')

<div class="container mb-3">
  <div class="row">
    <div class="col-sm">
      <img src="{{ asset('assets/images/un.jpeg') }}" class="img-fluid rounded" alt="Description de l'image">
    </div>
    <div class="col-sm">
      <img src="{{ asset('assets/images/deux.jpeg') }}" class="img-fluid rounded" alt="Description de l'image">
    </div>
    <div class="col-sm">
      <img src="{{ asset('assets/images/trois.jpeg') }}"class="img-fluid rounded" alt="Description de l'image">
    </div>
  </div>
</div>
<div class="container mb-3">
  <div class="row">
    <div class="col-sm">
      <img src="{{ asset('assets/images/quatre.jpeg') }}" class="img-fluid rounded" alt="Description de l'image">
    </div>
    <div class="col-sm d-flex flex-column justify-content-center align-items-center">
      <p>
          <strong>Bienvenue</strong> sur notre forum étudiant ! Ici, vous pouvez partager des idées, poser des questions et discuter de divers sujets liés à la vie étudiante.
      </p>
      <a href="{{route('etudiant.index')}}" class="btn btn-info btn-sm">Voir la liste des étudiants</a>
    </div>
    <div class="col-sm">
      <img src="{{ asset('assets/images/cinq.jpeg') }}"class="img-fluid rounded" alt="Description de l'image">
    </div>
  </div>
</div>
<div class="container mb-3">
  <div class="row">
    <div class="col-sm">
      <img src="{{ asset('assets/images/sept.jpeg') }}" class="img-fluid rounded" alt="Description de l'image">
    </div>
    <div class="col-sm">
      <img src="{{ asset('assets/images/huit.jpeg') }}" class="img-fluid rounded" alt="Description de l'image">
    </div>
    <div class="col-sm">
      <img src="{{ asset('assets/images/neuf.jpeg') }}"class="img-fluid rounded" alt="Description de l'image">
    </div>
  </div>
</div>
@endsection