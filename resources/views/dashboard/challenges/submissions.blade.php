@extends("layouts.auto")

@section("title")
    Les défi soumis
@endsection

@section("smalltitle")
    il faut valider ces défi envoyés par les équipes !
@endsection

@section("content")
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Liste des validations</h3>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nom de l'équipe</th>
                        <th>Nom du défi</th>
                        <th>Preuve</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($validations_pending as $validation)
                        <tr>
                            <td>{{ $validation->teams()->first()->name }}</td>
                            <td>{{ $validation->challenges()->first()->name }}</td>
                            <td>
                                @if($validation->isPic())
                                    <a href={{ route("validation_proofs.normal", ["name" => $validation->proof_url]) }}>
                                            <img src="{{ route("validation_proofs.small", ["name" => $validation->proof_url]) }}" class="img-fluid rounded" alt="Image de validation du défis">
                                    </a>
                                @else
                                    <iframe class="embed-responsive-item" src="{{ $validation->proof_url }}" width=400 heigth=400></iframe>
                                @endif
                            </td>
                            <td>
                                <form method="post" action={{ route("validation.accept", ["validationId" => $validation->id]) }}>
                                <input class="btn btn-xs btn-primary" type="submit" value="Valider">
                                </form>
                                <a href="{{ route("validation.refuseForm", ["validationId" => $validation->id]) }}"><button class="btn btn-xs btn-danger">Refuser (avec un motif)</button></a>
                            </td>
                        </tr>
                    @empty
                        <p>Aucune validation</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="box box-default">
        <div class="box-header with-border">Historique</div>
        <div class="box-body table-responsive-no-padding">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nom de l'équipe</th>
                        <th>Nom du défis</th>
                        <th>Preuve</th>
                        <th>Statut</th>
                        <th>Message</th>
                        <th>Traité par</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($validations_treated as $validation)
                            <td>{{ $validation->teams()->first()->name }}</td>
                            <td>{{ $validation->challenges()->first()->name }}</td>
                            <td>
                                @if($validation->isPic())
                                    <a href={{ route("validation_proofs.normal", ["name" => $validation->proof_url]) }}>
                                            <img src="{{ route("validation_proofs.small", ["name" => $validation->proof_url]) }}" class="img-fluid rounded" alt="Image de validation du défis">
                                    </a>
                                @else
                                    <iframe class="embed-responsive-item" src="{{ $validation->proof_url }}" width=400 heigth=400></iframe>
                                @endif
                            </td>
                            <td><span class="{{ $validation->prettyStatus()["css"] }}">{{ $validation->prettyStatus()["content"] }}</span></td>
                            <td>{{ $validation->message }}</td>
                            <td>{{
                                $validation->update_author()->first()->first_name." ".$validation->update_author()->first()->last_name
                            }}</td>
                            <td>
                                <form method="post" action={{ route("validation.reset", ["validationId" => $validation->id]) }}><input class="btn btn-xs btn-warning" type="submit" value="Annuler dernière action"></form>
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
