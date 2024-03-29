@extends('layouts.layout')
@section('content')
@section('title', 'liste des etudiants')


<div class="row">
    <div class="col-md-12 card m-3">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Forum</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($users as $user )
                        <tr>
                            <td></td>
                            <td>{{ $user->name}}</td>
                            <td>
                                <ul>
                                    @forelse($user->etudiants as $etudiant)
                                        <li><a href="{{route('etudiant.show', $etudiant->id)}}">{{$etudiant->title}}</a></li>
                                    @empty
                                         <li>Pas de article</li>
                                    @endforelse
                                </ul>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users}}
        </div>

    </div>
</div>
@endsection