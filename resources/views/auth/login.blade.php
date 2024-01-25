@extends('layouts.layout')
@section('content')
@section('title', 'login')

<div class="col-lg-8 p-3 mx-auto" style="height: 60vh;">
    <div class="card mb-5 mx-auto bg-gradient-danger" style="width: 60%;">
        <form action="{{ route('authentification') }}" method="post">
            @csrf
            <div class="card-header display-6 text-center">
                <h1 class="display-5 bg-gradient-danger text-white">@lang('lang.text_login')</h1>
            </div>
            <div class="card-body">
                @if(!$errors->isEmpty())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>    
                    @endforeach
                    </ul>
                </div>
                @endif
                <div class="control-group col-12">
                    <label for="email">@lang('lang.text_username')</label>
                    <input type="email" id="username" name="email" class="form-control" value="{{ old('email')}}">
                    @if($errors->has('username')) 
                        <span class="text-danger">{{$errors->first('username')}}</span>
                    @endif
                </div>
                <div class="control-group col-12">
                    <label for="password">@lang('lang.text_password')</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
            </div>
            <div class="card-footer text-center">
            <input type="submit" class="btn btn-info" value="@lang('lang.text_login')">
            </div>
            <div class="mb-4 mr-1 text-center">
            "@lang('lang.text_no_account')" <a href="{{ route('registration') }}">"@lang('lang.text_sign_up_now')"</a>
            </div>
        </form>
    </div>
</div>

@endsection