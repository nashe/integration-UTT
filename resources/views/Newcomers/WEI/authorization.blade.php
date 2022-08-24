@extends('layouts.newcomer')

@section('title')
Autorisation parentale
@endsection

@section('smalltitle')
Le Week-End d'Intégration
@endsection

@section('content')
		<div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Tu as besoin d'une autorisation parentale</h3>
            </div>
		    <div class="box-body text-center">
                <p>Comme tu es mineur, nous avons besoin de l'autorisation de tes parents pour pouvoir t'emmener au week-end d'intégration.</p>
                <p>Tu as normalement déjà reçu la fiche d'autorisation parentale en question mais la revoici si tu ne retrouves plus le mail. Elle est à rendre au moment de l'inscription administrative !</p>
                <a href="{{ asset('docs/autorisation.pdf')}}" class="btn btn-primary">Télécharger l'autorisation parentale</a><br/>
                <br/>

		N'oublie pas de la faire signer et de la mettre dans ton sac !<br/>
		<a href="{{ route('newcomer.wei')}}" class="btn btn-success">C'est bon ! L'autorisation est signée et déjà dans le sac !</a>
		<p>
		</div>
        </div>
@endsection
