@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:30px; color:red; font-weight:bold;">
        Coucou à toi nouvel UTTien
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Ton grand jour approche, <span style="color: red; font-weight:bold;">lundi 31 août</span> c'est la rentrée à l'UTT et on t'a préparé une semaine de folie. Comme je suis sympa, je te transmets quelques infos absolument nécessaires pour survivre !</p>
</div>
<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
	<strong>Le planning</strong>
  </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Comme on le sait tous, les meilleurs plannings sont bien les nôtres ! Trêve de bavardage, <a href="{{ URL::to('/docs/planning_inte2020.pdf') }}" style="color:deepskyblue; font-weight:bold;">voilà le programme</a>.</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Alors panique pas, je sais que tu ne comprends pas la moitié mais on t'expliquera tout, tes chefs d'équipes (CE) sont là pour te guider ! Si tu n'as pas encore rejoint ton équipe ou contacté ton/ta parrain/marraine, il n'est pas trop tard pour le faire, <a href="http://integration.utt.fr" style="color:deepskyblue; font-weight:bold;">voici le site pour ton intégration en cas de besoin.</a></p>
    <p>On espère de tout coeur que ton déguisement est reluisant et que tu nous le montreras fièrement chaque jour. Toutefois, pas de panique, il n'est en aucun cas obligatoire de faire quelque chose que tu ne souhaites pas faire et te déguiser ne fait pas exception. Après, si tu souhaites signer notre pétition pour rendre nécessaire le port d'un accoutrement ridicule à l'UTT, n'hésites pas à contacter le BDE !</p>
</div>
@if ($user->isMaster())
    <div style="background-color: #E74360; text-align: center; padding: 15px">
      <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
        <strong>Intégration des Master</strong>
      </span>
    </div>
    <div style="text-align: justify; margin: 15px 10px;">
        <p>Tu arrives en master et on ne t'oublie pas ! Si tu souhaites participer à l'intégration, sache que tu seras accueilli les bras ouvert <span style="color:red;font-weight: bold">mardi 1er septembre à 13h</span> au niveau de l'accueil de l'UTT !</p>
    </div>
@else
    <div style="background-color: #E74360; text-align: center; padding: 15px">
      <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
        <strong>L'inscription administrative</strong>
      </span>
    </div>
    @if ($user->team)
    <div style="text-align: justify; margin: 15px 10px;">
        <p>Tu as pu le voir dans le planning, des horaires sont dédiés à ton inscription administrative. C'est avec ton équipe le <span style="color:red; font-weight:bold;">{{ $user->team->registration_date }}</span> qu'elle se fera. Si tu as des questions, je te redirige vers tes CE !</p>
    </div>
    @else
        <div style="text-align: justify; margin: 15px 10px;">
            <p>Tu as pu le voir dans le planning, des horaires sont dédiés à ton inscription administrative. C'est normalement avec ton équipe qu'elle se fait mais tu ne sembles pas en avoir. Je t'invite à contacter integration@utt.fr si tu penses qu'il s'agit d'une erreur.</p>
        </div>
    @endif
@endif
<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
	<strong>Dépistage Covid-19</strong>
  </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Un <span style="color:red; font-weight:bold;">dépistage gratuit et sans ordonnance</span> est organisé pour les étudiants <span style="color:red; font-weight:bold;">mardi 8 et mercredi 9 septembre de 11h à 14h et de 15h à 18h</span> entre les bâtiments H et M à l'UTT. N'hésite vraiment pas à te présenter avec ta carte vitale pour aider dans la lutte contre la pandémie !</p>
</div>
<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
	<strong>Venir à l’UTT</strong>
  </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:20px; color:black; font-weight:bold;">A. En bus</span>
    <p>Ici, les bus sont gérés par la TCAT. Voici un <a href="https://www.tcat.fr/plan-interactif-eh/" style="color:deepskyblue; font-weight:bold;">plan</a> du réseau.</p>
    <p><b>Les arrêts de bus proches de l'UTT :</b></p>
    <img alt="" src="https://integration.utt.fr/img/mails/infos1/image2.png" style="width: 601.70px; height: 319.51px;" title="">
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:20px; color:black; font-weight:bold;">B. En voiture</span>
    <p><b>Les parkings à l'UTT :</b></p>
    <img alt="" src="https://integration.utt.fr/img/mails/infos1/image1.png" style="width: 601.70px; height: 319.51px;" title="">
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:20px; color:black; font-weight:bold;">C. En vélo</span>
    <p>Pour ceux qui viennent à vélo, l'école met à disposition des garages à vélos sécurisés auxquels l'accès est possible avec sa carte étudiante. Il faudra cependant se contenter des emplacements disponibles près de l'accueil en attendant ta carte.</span></p>
</div>
@endsection
