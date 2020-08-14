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
    {{-- L'intégration comportera différentes activités dont le thème est : <strong>{{ Config::get('services.theme') }}</strong>
    <br>&nbsp;<br>
    {{-- Sur ce thème, {{ Config::get('services.ce.maxTeamTc')+Config::get('services.ce.maxTeamBranch') }} équipes, réparties dans <strong>deux factions</strong> vont s'affronter tout au long de la semaine. --}}
    <br>&nbsp;<br>
    @if( $user->isTc())
        Sache, jeune padawan, que tu es attendu dès le <strong>{{ Config::get('services.reentry.tc.date') }} à {{ Config::get('services.reentry.tc.time') }}</strong>.
        <br>&nbsp;<br>
    @elseif( $user->isMaster() )
        Sache, jeune padawan, que tu es attendu dès le <strong>{{ Config::get('services.reentry.masters.date') }} à {{ Config::get('services.reentry.masters.time') }}</strong>.
        <br>&nbsp;<br>
        Malheureusement, les masters rentrant cette année une semaine après les ingénieurs, nous ne pourront pas assurer d'activités d'intégration pour toi hormis une visite le lundi matin.
    @elseif( $user->isBranch() )
        Sache, jeune padawan, que tu es attendu dès le <strong>{{ Config::get('services.reentry.branches.date') }} à {{ Config::get('services.reentry.branches.time') }}</strong>.
        <br>&nbsp;<br>
    @endif
    @if ( $user->isTc() or $user->isBranch() )
        Durant ta semaine, il y aura des activités d’intégration COVID-friendly sur le thème {{ Config::get('services.theme') }} ainsi que ton inscription administrative.
        Sur ce thème, {{ Config::get('services.ce.maxTeamTc')+Config::get('services.ce.maxTeamBranch') }} équipes, réparties dans <strong>deux factions</strong> vont s'affronter tout au long de la semaine.
    @endif
  </span>
</div>

@include('emails.parts.team')
@include('emails.parts.nutt')
@include('emails.parts.cahier_de_vacances')

@endsection
