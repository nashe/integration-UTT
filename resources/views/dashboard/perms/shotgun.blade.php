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
    <div class="box-body">
        <a href="{{ route('dashboard.perm.shotgun', ['day' => 1]) }}">
            <button class="btn btn-primary" {{ $day == 1 ? 'disabled' : '' }}>Lundi</button>
        </a>
        <a href="{{ route('dashboard.perm.shotgun', ['day' => 2]) }}">
            <button class="btn btn-primary" {{ $day == 2 ? 'disabled' : '' }}>Mardi</button>
        </a>
        <a href="{{ route('dashboard.perm.shotgun', ['day' => 3]) }}">
            <button class="btn btn-primary" {{ $day == 3 ? 'disabled' : '' }}>Mercredi</button>
        </a>
        <a href="{{ route('dashboard.perm.shotgun', ['day' => 4]) }}">
            <button class="btn btn-primary" {{ $day == 4 ? 'disabled' : '' }}>Jeudi</button>
        </a>
    </div>
    <div class="box box-default">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover align-middle text-center">
                <tbody>
                <tr>
                    <th>Rejoindre</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Lieu</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Permanenciers</th>
                    <th>Points</th>
                </tr>
                @foreach ($perms as $perm)
                    <tr class="align-middle">
                        <td>
                            <form action="{{ url('dashboard/perm/'.($perm->isAlreadyIn ? 'unshotgun' : 'shotgun').'/'.$perm->id.'?day='.$day) }}" method="post">
                                <button class="btn btn-xl {{ $perm->isAlreadyIn ? 'btn-danger' : 'btn-success' }}"
                                        {{ !$perm->isOpen || ($perm->permanenciers->count() >= $perm->nbr_permanenciers && !$perm->isAlreadyIn) ? 'disabled' : '' }}
                                        type="submit">
                                    {{ $perm->isAlreadyIn ? 'Quitter' : "S'inscrire" }}
                                </button>
                            </form>
                        </td>
                        <td>{{ $perm->type->name }}</td>
                        <td>{{ $perm->description }}</td>
                        <td>{{ $perm->place }}</td>
                        <td>{{ date('G\\Hi', $perm->start) }}</td>
                        <td>{{ date('G\\Hi', $perm->end) }}</td>
                        <td>{{ $perm->permanenciers->count().'/'.$perm->nbr_permanenciers }}</td>
                        <td>{{ $perm->type->points }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
