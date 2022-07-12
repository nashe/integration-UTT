@extends('layouts.dashboard')

@section('title')
    Permanences
@endsection

@section('smalltitle')
    Liste de toutes les permanences.
@endsection

@section('content')

    <div class="callout callout-info">
        <h4>Liste de toutes les permanences</h4>
        {{--
        <p>
            Une permanence a TODO
        </p>
        --}}
    </div>

    <div class="box-header with-border row">
        <div class="col-md-8">
            <h3 class="box-title">Création d'une permanence</h3>
            <a href="{{ url('dashboard/perm/create') }}" class="btn btn-box-tool">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <form method="POST" action="{{ url('dashboard/perm/import') }}" enctype="multipart/form-data" class="col-md-4 text-right" id="form">
            <input type="file" name="csv" accept=".csv,.xls,.xlsx" class="hidden" required>
            <button type="button" class="btn btn-default">
                Importer un fichier CSV
            </button>
        </form>
    </div>

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Liste des permanences</h3>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Nom</th>
                        <th>Lieu</th>
                        <th>Date</th>
                        <th>Ouverture</th>
                        <th>Permanenciers</th>
                        <th>Description</th>
                        <th>Responsables</th>
                        <th>Points</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($perms as $perm)
                        <tr>
                            <td>{{ $perm->type->name }}</td>
                            <td>{{ $perm->place }}</td>
                            <td>Le {{ date('d/m', $perm->start).' de '.date('H:i', $perm->start).' à '.date('H:i', $perm->end) }}</td>
                            @if($perm->open)
                              <td>
                                  @if($perm->pre_open) <span class="label label-warning"><span class="glyphicon glyphicon-signal"></span> - {{ date('d/m', $perm->pre_open).' à '.date('H:i', $perm->pre_open) }}</span> @endif
                                  <span class="label label-success">{{ date('d/m', $perm->open).' à '.date('H:i', $perm->open) }}</span>
                                </td>
                            @else
                              <td><span class="label label-danger">Jamais</span></td>
                             @endif
                            <td>{{ $perm->permanenciers->count().'/'.$perm->nbr_permanenciers }}</td>
                            <td>{{ $perm->description }}</td>
                            <td>
                              @foreach ($perm->respos as $respo)
                                  <span class="label label-info">{{ $respo->first_name.' '.$respo->last_name }}</span>
                              @endforeach
                            </td>
                            <td>{{ $perm->type->points }}</td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ url('dashboard/perm/'.$perm->id.'/users') }}">Liste des permanenciers</a>
                                <a class="btn btn-xs btn-warning" href="{{ url('dashboard/perm/edit/'.$perm->id) }}">Modifier</a>
                                <form action="{{ url('dashboard/perm/'.$perm->id) }}" method="post">
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-xs btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/permupload.js') }}"></script>
@endsection
