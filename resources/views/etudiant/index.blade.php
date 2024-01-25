
@extends('layouts/layout')
@section('content')
@section('title','Liste de étudiants')


<a href="{{route('home')}}" class="btn btn-outline-info btn-sm mb-3">← Retour</a>

<div class="col-xl-10 mx-auto d-flex flex-column gap-4 text-center vh-100 justify-content-center" style="max-height: 80vh; overflow: auto;">
    <div class="d-flex align-items-start justify-content-between mt-3">
    <h2>Liste des étudiants</h2>
        <a href="{{route('etudiant.create')}}" class="btn btn-outline-info btn-sm mb-3">Ajouter un étudiant</a>
    </div>  

    <div class="card h-100">
        <div class="card-body m-12 h-100">
            <div class="row h-100">
                @forelse($etudiants as $index => $etudiant)
          
                <div class="col-md-5 m-2">
                    <a href="{{route('etudiant.show', $etudiant->id)}}" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover no-underline">
                        <div class="card h-100 {{ ['bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info'][$index % 6] }}  hover-card">  
                            <div class="card-body">
                          
                                <i class="bi bi-person-fill"></i>
                                {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}
                                
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-md-12"><em>No students at the moment</em></div>
                @endforelse
            </div>
        </div>  
    </div>
    {{ $etudiants }}
</div>  
@endsection
