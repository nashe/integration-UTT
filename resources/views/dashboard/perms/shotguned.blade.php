@extends('layouts.dashboard')

@section('title')
    Permanences que tu as prises
@endsection

@section('smalltitle')
    Liste des permanences que tu as prises.
@endsection

@section('content')
    <div class="callout callout-info">
        <h4>Liste de tes permanences</h4>
    </div>
    <div class="box box-default">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover align-middle text-center">
                <tbody>
                <tr>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Date</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Permanenciers</th>
                    <th>Description</th>
                    <th>Points</th>
                    <th>Quitter</th>
                </tr>
                @foreach ($perms as $perm)
                    <tr class="align-middle">
                        <td>{{ $perm->type->name }}</td>
                        <td>{{ $perm->place }}</td>
                        <td>{{ date('j/n/y', $perm->start) }}</td>
                        <td>{{ date('G\\Hi', $perm->start) }}</td>
                        <td>{{ date('G\\Hi', $perm->end) }}</td>
                        <td>{{ $perm->permanenciers->count().'/'.$perm->nbr_permanenciers }}</td>
                        <td>{{ $perm->description }}</td>
                        <td>{{ $perm->type->points }}</td>
                        <td>
                            <form action="{{ url('dashboard/perm/unshotgun/'.$perm->id) }}" method="post">
                                <button class="btn btn-xl btn-danger" type="submit">Quitter</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
