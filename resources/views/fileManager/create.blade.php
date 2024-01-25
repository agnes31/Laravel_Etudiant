@extends('layouts.layout')
@section('content')
@section('title', 'Enregistrement un document')

<div class="col-lg-8 p-3 mx-auto" style="min-height: 70vh;">
    <a href="{{route('fileManager.index')}}" class="btn btn-outline-info btn-sm mb-3">← @lang('lang.text_back_file')</a>

    <div class="card mb-5 mx-auto bg-gradient-danger flex-grow-1 d-flex flex-column">
        <form method="post" class="d-flex flex-column flex-grow-1">
            @csrf
            <div class="card-header text-center text-warning">
                <h1 class="display-5 bg-gradient-danger text-white">@lang('lang.text_add_file')</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-en-tab" data-bs-toggle="tab" data-bs-target="#nav-en" type="button" role="tab" aria-controls="nav-en" aria-selected="true">@lang('lang.text_en')</button>
                                <button class="nav-link" id="nav-fr-tab" data-bs-toggle="tab" data-bs-target="#nav-fr" type="button" role="tab" aria-controls="nav-fr" aria-selected="false">@lang('lang.text_fr')</button>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-en" role="tabpanel" aria-labelledby="nav-en-tab" tabindex="0">
                                <div class="control-group col-12">
                                    <label for="title">@lang('lang.text_title')</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}" required>
                                    @if($errors->has('title'))
                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-fr" role="tabpanel" aria-labelledby="nav-fr-tab" tabindex="0">
                                <div class="control-group col-12">
                                    <label for="title_fr">@lang('lang.text_title')</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{old('title_fr')}}">
                                    @if($errors->has('title_fr'))
                                    <span class="text-danger">{{$errors->first('title_fr')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <input type="submit" class="btn btn-info" value="@lang('lang.text_save')">
            </div>
        </form>
    </div>
</div>
@endsection