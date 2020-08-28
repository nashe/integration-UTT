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
    <p>Ton grand jour approche, <span style="color: red; font-weight:bold;">lundi 31 août</span> c'est la rentrée à l'UTT et on t'as préparé une semaine de folie. Comme je suis sympa, je te transmet quelques infos absolument nécessaires pour survivre !</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:25px; color:blue; font-weight:bold;">I. Le planning</span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Comme on le sait tous, les meilleurs plannings sont bien les nôtres ! Trève de bavardage, <a href="{{ URL::to('/docs/planning_inte2020.pdf') }}" style="color:deepskyblue; font-weight:bold;">voilà le programme</a>.</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Alors panique pas, je sais que tu ne comprends pas la moitié mais on t'expliquera tout, tes chefs d'équipes (CE) sont là pour te guider ! Si tu n'as pas encore rejoins ton équipe ou contacté ton/ta parrain/marraine, il n'est pas trop tard pour le faire, <a href="http://integration.utt.fr" style="color:deepskyblue; font-weight:bold;">voici le site pour ton intégration en cas de besoin.</a></p>
    <p>On espère de tout coeur que ton déguisement est reluisant et que tu nous le montrera fièrement chaque jour. Toutefois, pas de panique, il n'est en aucun cas obligatoire de faire quelque chose que tu ne souhaites pas faire et te déguiser ne fait pas exception. Après, si tu souhaites signer notre pétition pour rendre nécessaire le port d'un acoutrement ridicule à l'UTT, n'hésites pas à contacter le BDE !</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:25px; color:blue; font-weight:bold;">II. L'inscription administrative</span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Tu as pu le voir dans le planning, des horaires sont dédiés à ton inscription administrative. C'est avec ton équipe à une date et heure que tu peux consulter <a href="{{ URL::to('/docs/planning_inte2020.pdf') }}" style="color:deepskyblue; font-weight:bold;">ici</a> qu'elle se fera. Si tu as des questions, je te redirige vers tes CE !</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:25px; color:blue; font-weight:bold;">III. Dépistage Covid-19</span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <p>Un <span style="color:red; font-weight:bold;">dépistage gratuit et sans ordonnance</span> est organisé pour les étudiants <span style="color:red; font-weight:bold;">mardi 8 et mercredi 9 septembre de 11h à 14h et de 15h à 18h</span> entre les bâtiments H et M à l'UTT. N'hésites vraiment pas à t'y présenter avec ta carte vitale pour aider dans la lute contre la pandémie !</p>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-size:25px; color:blue; font-weight:bold;">IV. Venir à l’UTT</span>
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
