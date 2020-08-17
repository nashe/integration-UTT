<p>Comme tu es dans l’équipe {{ $user->team->safe_name ? $user->team->safe_name : $user->team->name }}, ton inscription administrative aura lieu <strong>
    @if($user->team_id == 1)
        lundi à 14h
    @elseif($user->team_id == 2)
        lundi à 14h25
    @elseif($user->team_id == 3)
        lundi à 14h50
    @elseif($user->team_id == 4)
        lundi à 15h15
    @elseif($user->team_id == 5)
        lundi à 15h40
    @elseif($user->team_id == 6)
        lundi à 16h05
    @elseif($user->team_id == 10)
        lundi à 16h30
    @elseif($user->team_id == 7)
        mardi à 9h
    @elseif($user->team_id == 8)
        mardi à 9h30
    @elseif($user->team_id == 9)
        mardi à 10h
    @elseif($user->team_id == 17)
        mercredi à 9h
    @elseif($user->team_id == 18)
        mercredi à 9h25
    @elseif($user->team_id == 19)
        mercredi à 9h50
    @elseif($user->team_id == 22)
        mercredi à 10h15
    @elseif($user->team_id == 23)
        mercredi à 10h40
    @elseif($user->team_id == 14)
        mercredi à 11h05
    @elseif($user->team_id == 13)
        mercredi à 11h30
    @endif
         en P203</strong>.</p>
