@extends('layouts/layout')
@section('content')
@section('title', 'Détail de l\'étudiant')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Avertissement : Cette action est irréversible !</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet étudiant ?<br>{{$etudiant->nom}} {{$etudiant->prenom}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        
                <form method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail de l'étudiant -->
<div class="col-xl-8 mx-auto">
    <a href="{{route('etudiant.index')}}" class="btn btn-outline-info btn-sm">← Retour</a>
</div>

<div class="d-flex flex-column align-items-center h-100 justify-content-between border border-secondary p-5 mt-3 mb-5 rounded-lg">
<h4 class="display-4 mb-4 fw-bold">{{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}</h4> 

    <div class="row">
    <div class="col-md-6 d-flex flex-column">
        <ul class="list-group list-group-flush flex-grow-1 d-flex flex-column">
            <li class="list-group-item bg-gradient-danger border rounded flex-grow-1">
                <strong>Matricule :</strong><br>
                {{$etudiant->matricule}}
            </li>
            <li class="list-group-item bg-gradient-danger border rounded flex-grow-1">
                <strong>Birthday :</strong><br> 
                {{$etudiant->date_naissance}}
            </li>
            <li class="list-group-item bg-gradient-danger border rounded flex-grow-1">
                <strong>Adresse :</strong><br>
                {{$etudiant->adresse}}
            </li>
        </ul>
    </div>
    <div class="col-md-6 d-flex flex-column">
        <ul class="list-group list-group-flush d-flex flex-column">
            <li class="list-group-item bg-gradient-danger border rounded p-3">
                <strong>Email :</strong> 
                {{$etudiant->email}}
            </li>
            <li class="list-group-item bg-gradient-danger border rounded p-3">
                <strong>Téléphone :</strong><br>     
                {{$etudiant->telephone}}
            </li>
            <li class="list-group-item bg-gradient-danger border rounded p-3">
                <strong>Ville :</strong><br>
                {{$etudiant->etudiantHasVille->nom}}
            </li>
        </ul>
    </div>
</div>  
    <div class="mt-4 d-flex gap-3 justify-content-center p-5 m-5">
        <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-primary">Update</a>
        <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
    </div>
</div>

@endsection