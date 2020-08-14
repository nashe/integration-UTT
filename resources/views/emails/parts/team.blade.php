@if ($user->team)
<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
	<strong>Ton équipe t'attend !</strong>
  </span>
</div>

<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">
    Tu est dans l'équipe <em>{{ $user->team->safeName ?? $user->team->name }}</em> !
    Celle ci est composé de nouveaux et de {{ $user->team->ce->count() }} chefs d'équipes qui t'accompagneront pendant toute ta semaine d'intégration dans les différents jeux et activités qui te seront proposés.
    <br>&nbsp;<br>
    <img src="{{ asset('/uploads/teams-logo/'.$user->team->id.'.'.$user->team->img) }}" alt="Equipe" style="float:left;width:140px;"/>
    Ton équipe s'appelle <strong>{{ $user->team->safeName ?? $user->team->name }}</strong><br/>
    Elle est dans la faction <strong>{{ $user->team->faction->name }}</strong><br/>
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
Dans les prochaines semaines, une équipe te sera attribuée. Elle sera composée de nouveaux et de chefs d'équipes qui t'accompagneront pendant toute ta semaine d'intégration dans les différents jeux et activités qui te seront proposés.
  </span>
</div>
@endif
