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
          <strong>@lang('lang.text_welcome')</strong>@lang('lang.text_present')
      </p>
      <a href="{{route('forum.index')}}" class="btn btn-info btn-sm">@lang('lang.text_post')</a>
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