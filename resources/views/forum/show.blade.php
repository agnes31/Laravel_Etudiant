@extends('layouts/layout')
@section('content')
@section('title','Forum des étudiants')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">@lang('lang.text_alert')</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @lang('lang.text_alert_title_forum')<br>{{$forum->title}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.text_annule')</button>

                <form method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="@lang('lang.text_delete')" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail de l'étudiant -->
<div class="col-xl-8 mx-auto">
    <a href="{{route('forum.index')}}" class="btn btn-outline-info btn-sm">← @lang('lang.text_retour_forum')</a>
</div>

<div class="d-flex flex-column align-items-center h-100 justify-content-between border border-secondary p-5 mt-3 mb-5 rounded-lg">
    <h5 class="display-4 mb-4 fw-bold">@lang('lang.text_en')</h5>
    <div class="row">
        <div class="col-md-6 d-flex flex-column">
            <ul class="list-group list-group-flush flex-grow-1 d-flex flex-column">
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_title') :</strong><br>
                    {{$forum->title}}
                </li>
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_article') :</strong><br>
                    {{$forum->body}}
                </li>
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_date') :</strong><br>
                    {{$forum->date->format('d/m/Y')}}
                </li>

            </ul>
        </div>
    </div>
    <br />
    <h5 class="display-4 mb-4 fw-bold">@lang('lang.text_fr')</h5>
    <div class="row">
        <div class="col-md-6 d-flex flex-column">
            <ul class="list-group list-group-flush flex-grow-1 d-flex flex-column">
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_title') :</strong><br>
                    {{$forum->title_fr}}
                </li>
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_article') :</strong><br>
                    {{$forum->body_fr}}
                </li>
                <li class="list-group-item bg-gradient-danger border rounded flex-grow-1" style="width: 500px;">
                    <strong>@lang('lang.text_date') :</strong><br>
                    {{$forum->date->format('d/m/Y')}}
                </li>

            </ul>
        </div>
    </div>
    <div class="mt-4 d-flex gap-3 justify-content-center p-5 m-5">
        <a href="{{route('forum.edit', $forum->id)}}" class="btn btn-primary">@lang('lang.text_update')</a>
        <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal">@lang('lang.text_delete')</button>
    </div>
</div>

@endsection