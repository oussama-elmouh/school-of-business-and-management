@extends('layouts.app')  <!-- Assure-toi que ton layout est correctement inclus -->

@section('content')
    <div class="container">
        <h1>Liste des élèves</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date Naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->id }}</td>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->date_naissance }}</td>
                        <td>
                            <a href="{{ route('eleves.show', $eleve->id) }}" class="btn btn-info">Voir</a>
                            {{-- <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-warning">Modifier</a> --}}
                            <!-- Tu peux ajouter un bouton pour supprimer ou d'autres actions -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @section('contente')
        <h1>bonjour</h1>
        @endsection
    </div>
@endsection
