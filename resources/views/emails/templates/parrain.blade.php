@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:red">
        Salut à toi jeune ingénieur !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <p>Si tu reçois ce mail c’est que tu as choisi d’assumer le rôle de parrain/marraine à l’inté et nous t’en remercions &#128525</p>

        <p>Sache que tu as <span style="color:red"> {{ $user->nbTCReferrals() }} fillots en TC</span>, <span style="color:red">{{ $user->nbBranchReferrals() }} fillots en branche</span> et <span style="color:red">{{ $user->nbMasterReferrals() }} fillots en master</span> !</p>

        <p>Être parrain/marraine n’est pas extrêmement demandant en soi, mais il faut quand même être présent à quelques moments de la semaine prochaine.</p>

        <p>Tout d’abord, il faudra être présent pour récupérer les fillots à la sortie de l’amphi inté, donc <span style="color:blue">lundi à 12h00 pour les fillots en TC</span> et <span style="color:blue">mardi à 12h00 pour les fillots en branche</span>. Soyez présents un peu avant (genre 11h45) le temps de vous répartir. On vous répartira par ordre alphabétique de votre nom de famille en amphi de verdure, donc on se retrouve là-bas &#128521 </p>

        <p>Après ça, il faudra manger avec eux (la bouffe c’est la vie, ne l’oubliez pas), mais faites attention, les places au RU seront limitées (mesures covid toussa toussa) donc si vous voulez vous pouvez pique-niquer dans le parc vers l’UTT pour libérer de la place.</p>

        <p>Ensuite, si vous êtes motivés pour avoir plus de fillots, contactez-moi et venez à SOS Parrains lundi et mardi midi &#128521</p>

        <p>Petite information un peu importante si vous n’êtes pas au courant, <span style="color:red">il n’y a pas de WEI cette année</span> #covided &#128557</p>

        <p>De plus, évitez de faire des gros regroupements pour les rencontres parrains-fillots, privilégiez plutôt les petites soirées en appart/au bar.</p>

        <p>Sur ce, des bisous,</p>

        <p>Au plaisir de vous voir à l’inté,</p>
    </span>
</div>
@endsection
