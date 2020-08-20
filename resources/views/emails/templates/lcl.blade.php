@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:#E74360">
        Salut à toi jeune nouveau de l’ellipse !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Aujourd’hui, on te présente notre partenaire LCL qui propose des offres étudiantes fabuleuses :
    </span>
    <ul>
        <li>55€ offerts pour toute ouverture de compte,</li>
        <li>La carte Visa Premier à 1€ pendant 4 ans,</li>
        <li>Des offres internationales étudiantes pour ton futur semestre à l’étranger,</li>
        <li>La possibilité d'ouvrir ton compte depuis chez toi <a href="https://bienvenue.secure.lcl.fr/#/offre=ouvrir-un-compte-lcl-etudiant" style="color: blue;">(clique ici)</a>,</li>
        <li>Une plateforme LCL Mon Campus adaptée aux étudiants</li>
    </ul>
    <span>
        Je sais mon ami que ça t'impressionne, mais tu n'as pas encore tout vu ! Saute sur <a href="{{ URL::to('/docs/flyerLCL.pdf') }}" style="color: blue;">cette plaquette</a> pour tous les détails et tes connaissances seront des plus totales !
    </span>
</div>
<div style="text-align: center; margin: 10px 10px;">
    <span style="font-weight: bold;">
        Pour plus d’informations, vous pouvez vous rendre dans l’agence du centre ville :
    </span>
</div>
<div style="text-align: center; margin: 10px 10px;">
    <span style="color: grey">
        AGENCE LCL<br>
        12 Place AUDIFFRED<br>
        10000 Troyes
    </span>
<div style="text-align: center; margin: 10px 10px;">
    <span style="font-weight: bold;">
        Tu peux aussi téléphoner :<br>03 25 43 53 96
    </span>
</div>
<div>
    <img align="center" src="{{ URL::to('/img/sponsors/lcl/image002.png') }}" style="max-width:600px">
    <img align="center" src="{{ URL::to('/img/sponsors/lcl/image007.jpg') }}" style="max-width:600px">
</div>

</div>
@include('emails.parts.publicity-explained')
@endsection
