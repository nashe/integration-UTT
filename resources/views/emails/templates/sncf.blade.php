@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:#E74360">
        Salut depuis l'ellipse !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <b>SNCF</b> est l'un des 1er groupes mondiaux de mobilité, de logistique et de marchandises présent dans 120 pays, <b>un CA de 35,1 mds€</b> et <b>270 000 salariés</b> à fin 2019. Notre vocation ? Simplifier vos déplacements, fluidifier le transport des personnes et des marchandises, et développer la mobilité de demain. <b>SNCF recrute</b> dans plus de 150 métiers ouverts à tous. Nous rejoindre, c'est être au cœur de l'innovation, participer à des projets de grande ampleur et contribuer à la transformation.
    </span>
</div>
<div style="text-align: justify; margin: 20px 10px;">
    <span>
        Vous souhaitez nous rejoindre ? Découvrez une offre vous correspondant et <b>déposez votre candidature</b> sur notre site emploi SNCF <a href="https://www.emploi.sncf.com/nos-offres">https://www.emploi.sncf.com/nos-offres</a> (dans le respect de la protection de vos données personnelles).
    </span>
</div>
<div style="text-align: justify; margin: 35px 10px 10px 10px;">
    <img align="center" src="{{ URL::to('/img/sponsors/Logo_SNCF_2011.svg.png') }}" style="max-width:600px">
</div>
@include('emails.parts.publicity-explained')
@endsection
