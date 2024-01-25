@extends('layouts.layout')
@section('content')
@section('title', 'connexion des étudiants')

<div class="col-lg-8 p-3 mx-auto" style="height: 85vh;">
    <div class="card mb-5 mx-auto bg-gradient-danger" style="width: 60%;">
        <form method="post">
            @csrf
            <div class="card-header text-center text-warning">
                <h1 class="display-5 bg-gradient-danger text-white">@lang('lang.text_add_new')</h1>
            </div>
            <div class="card-body">
            <div class="control-group col-12 mt-2">
                    <label for="name">@lang('lang.text_name')</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name')}}" maxlength="50" required>
                    @if($errors->has('name')) 
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="email">@lang('lang.text_email')</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email')}}">
                    @if($errors->has('email')) 
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="adresse">@lang('lang.text_address')</label>
                    <input id="adresse" name="adresse" class="form-control" value="{{ old('adresse') }}"></input>
                    @if ($errors->has('adresse'))
                    <div class="text-danger-danger">
                        {{$errors->first('adresse')}}
                    </div>
                    @endif
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="body">@lang('lang.text_ville')</label>
                    <select id="ville_id" name="ville_id" class="form-control">
                        @foreach($villes as $ville)
                        <option value="{{$ville->id}}" {{ $ville->id == old('ville_id') ? 'selected' : '' }}>{{$ville->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="telephone">@lang('lang.text_telephone')</label>
                    <input id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}"></input>
                    @if ($errors->has('telephone'))
                    <div class="text-danger-danger">
                        {{$errors->first('telephone')}}
                    </div>
                    @endif
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="date_naissance">@lang('lang.text_date_naissance')</label>
                    <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ old('date_naissance') }}"></input>
                    @if ($errors->has('date_naissance'))
                    <div class="text-danger-danger">
                        {{$errors->first('date_naissance')}}
                    </div>
                    @endif
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="password">@lang('lang.text_password')</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @if($errors->has('password')) 
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
            </div>
            <div class="card-footer text-center">
                <input type="submit" class="btn btn-info" value="@lang('lang.text_save')">
            </div>
        </form> 
    </div>
</div>
@endsection