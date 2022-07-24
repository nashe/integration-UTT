@extends('layouts.newcomer')

@section('title')
Réseaux Sociaux
@endsection

@section('smalltitle')
@endsection

@section('content')
<div class="box box-default">

    <div class="box-header with-border">
        <h3 class="box-title">Nos Réseaux Sociaux</h3>
    </div>
    <div class="box-body">

        <p>
            N'hésite pas à nous rejoindre sur nos différents réseaux sociaux afin de ne louper aucune information concernant l'Intégration ! On communiquera essentiellement par <a href="https://www.facebook.com/bde.utt"><strong>Facebook</strong></a> (BDE UTT), <a href="https://www.instagram.com/bdeutt"><strong>Instagram</strong></a> (@bdeutt) et <a href="https://discord.gg/8N7FfmeDKu"><strong>Discord</strong></a> (UTT - Intégration) !
        </p>
        <div class="text-center">
            <a href="https://www.facebook.com/bde.utt">
                <img src="{{ asset('img/icons/facebook.png') }}" alt="Facebook" style="max-width:75px; margin-left:5px; margin-right: 5px;">
            </a>
            <a href="https://www.instagram.com/bdeutt">
                <img src="{{ asset('img/icons/instagram.png') }}" alt="Instagram" style="max-width:75px; margin-left:5px; margin-right: 5px;">
            </a>
            <a href="https://discord.gg/9wFZCnmmXe">    
                <img src="{{ asset('img/icons/discord.png') }}" alt="Discord" style="max-width:90px; margin-left:5px; margin-right: 5px;">
            </a>
        </div>
        <br/>
        <p>
            Et si tu as la moindre question, tu peux nous la poser sur l'un de ces réseaux !
        </p>

        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('newcomer.app', [ 'step' => 'yes']) }}#question">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
        </div>
    </div>
</div>
@endsection
