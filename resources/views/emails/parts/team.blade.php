<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
    @if ($user->team)
	<strong>Ton équipe t'attend !</strong>
    @else
    <strong>Ton équipe d'intégration</strong>
    @endif
  </span>
</div>

<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">
    Durant l'intégration, tu seras intégré dans une 'équipe d'intégration', composée de nouveaux et de chefs d'équipes (des étudiants qui ont en général un an de plus que toi). Ils sont là pour t'accompagner et te faire profiter de l'intégration au maximum.
  </span>
</div>

@if ($user->team)
<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">

    Tu es dans l'équipe <em>{{ $user->team->safeName ?? $user->team->name }} de la faction <strong>{{ $user->team->faction->name }}</strong></em> ! Celle-ci est mené par {{ $user->team->ce->count() }} chefs d'équipes.
    <br>&nbsp;<br>
    {{-- <img src="{{ asset('/uploads/teams-logo/'.$user->team->id.'.'.$user->team->img) }}" alt="team_picture" style="float:left;width:140px;"/> TODO : Fix --}}
    <br>&nbsp;<br>
  </span>
  @if(substr($user->team->facebook, 0, 4) == 'http')
  <div style="background-color: #E74360; margin: auto; padding: 10px 10px; text-align: center; width: max-content;">
    <a href="{{ $user->team->facebook }}" target="_blank" style="color: #FFFFFF; text-decoration: none;font-size: 1em;line-height: 1.3333333;">Clique pour rejoindre le groupe Facebook <br><strong>Rejoins les sur Facebook !</strong></a>
  </div>
  @endif
</div>
@else
<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">
Dans les prochaines semaines, une équipe te sera attribuée.
  </span>
</div>
@endif
