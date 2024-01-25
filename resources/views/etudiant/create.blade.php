@extends('layouts.layout')
@section('content')
@section('title', 'Enregistrement des étudiants')

<div class="col-lg-8 p-3 mx-auto">
    <a href="{{route('etudiant.index')}}" class="btn btn-outline-info btn-sm mb-3">← Retour</a>


    <div class="card mb-5 mx-auto bg-gradient-danger">
        <form method="post">
            @csrf
            <div class="card-header text-center text-warning">
                <h1 class="display-5 bg-gradient-danger text-white">Ajouter un étudiant</h1>
            </div>
            <div class="card-body">
                <div class="control-group col-12 mt-2">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="{{old('nom')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" value="{{old('prenom')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{old('date_naissance')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="matricule">Matricule</label>
                    <input type="text" id="matricule" name="matricule" class="form-control" value="{{old('matricule')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{old('adresse')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="telephone">Télephone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" placeholder="format 123456879" value="{{old('telephone')}}" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="ville_id">Ville</label>
                    <select id="ville_id" name="ville_id" class="form-control">
                        @foreach($villes as $ville)
                        <option value="{{$ville->id}}" {{ $ville->id == old('ville_id') ? 'selected' : '' }}>{{$ville->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer text-center">
                <input type="submit" class="btn btn-info" value="Ajouter">
            </div>
        </form>
    </div>
</div>
@endsection