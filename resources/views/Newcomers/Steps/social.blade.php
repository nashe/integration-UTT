@extends('layouts.newcomer')

@section('title')
Application de l'intégration
@endsection

@section('smalltitle')
@endsection

@section('content')
<div class="box box-default">

    <div class="box-header with-border">
        <h3 class="box-title">Réseaux Sociaux</h3>
    </div>
    <div class="box-body">
        {{-- <div class="caption col-lg-10">
            <div class="clearfix"></div>


            <a href="{{ route('app') }}" class="btn btn-success" target="_blank">Télécharger l'application</a>
        </div>
        <div class="clearfix"></div>
        <hr/>
        <h4>Mais pourquoi télécharger l'application ?</h4>
        <p>
            Cette application te permet de <strong>recevoir des notifications</strong> tout au long de l'intégration ! De plus elle intègre un <strong>calendrier des événements</strong> pour être toujours au courant de
            ce qu'il se passe pendant l'inté !
        </p>
        <p>
            Tu y retrouveras aussi ton profil et diverses informations. De plus, elle sera <strong>mise à jour tout l'été</strong> pour te fournir toujours plus de contenu !
        </p>
        <hr/> --}}

        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('newcomer.app', [ 'step' => 'yes']) }}#question">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
        </div>
    </div>
</div>
@endsection
