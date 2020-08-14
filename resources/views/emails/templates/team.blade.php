@extends('emails.master_layout')

@section('title')
Ton équipe d'intégration
@endsection

@section('content')
<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #E74360;">
    <strong>Salut {{ $user->first_name }}</strong>
  </span>
</div>

<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">
    Nous t'avons déjà présenté ton parrain dans un précédent email, il est donc temps de te parler un peu plus de ce qui va se passer à la rentrée.
    L'intégration comportera différentes activités dont le thème est : <strong>{{ Config::get('services.theme') }}</strong>
    <br>&nbsp;<br>
    Sur ce thème, {{ Config::get('services.ce.maxTeamTc')+Config::get('services.ce.maxTeamBranch') }} équipes, réparties dans <strong>deux factions</strong> vont s'affronter tout au long de la semaine.
  </span>
</div>

@include('emails.parts.team')
@include('emails.parts.nutt')
@include('emails.parts.cahier_de_vacances')

@endsection
