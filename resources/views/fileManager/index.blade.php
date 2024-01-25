@extends('layouts/layout')
@section('content')
@section('title','Documents des étudiants')

<a href="{{route('home')}}" class="btn btn-outline-info btn-sm mb-3">← @lang('lang.text_back')</a>

<div class="col-xl-10 mx-auto d-flex flex-column gap-4 text-center vh-100 justify-content-center">
    <div class="d-flex align-items-start justify-content-between mt-3">
        <h2>@lang('lang.text_title_file')</h2>
        <a href="{{route('fileManager.create')}}" class="btn btn-outline-info btn-sm mb-3">@lang('lang.text_add_file')</a>
    </div>

    <div class="card h-100">
        <div class="card-body m-12 h-100">
            <div class="row h-100">
                @forelse($files as $index => $fileManager)

                <div class="col-md-5 m-2">
                    <a href="{{route('fileManager.show', $fileManager->id)}}" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover no-underline">
                        <div class="card h-100 {{ ['bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info'][$index % 6] }}  hover-card">
                            <div class="card-body"><i class="bi bi-chat-fill"></i>

                                <small class="text-muted">
                                    {{ $fileManager->date->format('d/m/Y') }}
                                </small>
                                <h5 class="card-title">
                                    <h3 class="text-white">{{ ucfirst($fileManager->title) }} </h3>
                                </h5>

                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-md-12"><em>No posts at the moment</em></div>
                @endforelse
            </div>
        </div>
    </div>
    {{ $files }}
</div>
@endsection