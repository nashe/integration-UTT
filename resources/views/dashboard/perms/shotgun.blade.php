@extends('layouts.dashboard')

@section('title')
    Récapitulatif
@endsection

@section('smalltitle')
    Liste de toutes les contributions des permanenciers.
@endsection

@section('content')
    <div class="callout callout-info">
        <h4>Shotgun des permanences</h4>
    </div>
    <div class="box box-default">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover align-middle text-center">
                <tbody>
                <tr>
                    <th>Rejoindre</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Jour</th>
                    <th>Heure</th>
                    <th>Durée</th>
                    <th>Permanenciers</th>
                    <th>Description</th>
                    <th>Points</th>
                </tr>
                @foreach ($perms as $perm)
                    <tr class="align-middle" style="">
                        <td>
                            <form action="{{ url('dashboard/perm/'.($perm->isAlreadyIn ? 'unshotgun' : 'shotgun').'/'.$perm->id) }}" method="post">
                                <button class="btn btn-xl {{ $perm->isAlreadyIn ? 'btn-danger' : 'btn-success' }}" type="submit">{{ $perm->isAlreadyIn ? 'Quitter' : "S'inscrire" }}</button>
                            </form>
                        </td>
                        <td>{{ $perm->type->name }}</td>
                        <td>{{ $perm->place }}</td>
                        <td>{{ date('l', $perm->start) }}</td>
                        <td>{{ date('G\\Hi', $perm->start) }}</td>
                        <td>{{ gmdate('G\\Hi', $perm->end - $perm->start) }}</td>
                        <td>{{ $perm->permanenciers->count().'/'.$perm->nbr_permanenciers }}</td>
                        <td>{{ $perm->description }}</td>
                        <td>{{ $perm->type->points }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
