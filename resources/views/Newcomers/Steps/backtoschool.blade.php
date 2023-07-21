@extends('layouts.newcomer')

@section('title')
Pause partenaire !
@endsection

@section('smalltitle')
@endsection

@section('content')
<div class="box box-default">
    <div class="box-body">
        <p>L'intégration et le BDE se joignent à des partenaires locaux pour t'offrir différentes réductions et permettre de financer les activités les plus folles de l'Intégration.
        On tenait à te présenter les plus importants ;)</p>

        <h3>Pour trouver un logement</h3>
        <p>Tu cherches un appartement en résidence étudiante, meublé, près de l'UTT ou plutôt en centre ville ? Damonte Immobilier propose forcément ce que tu cherches !</p>
        <p>Pour voir ce qu'ils proposent, une seule adresse : <a href="http://www.yves-damonte.fr/location-immobiliere-troyes/logement-etudiant/" target="_blank">yves-damonte.fr</a></p>

        <div class="text-center">
            <a href="http://www.yves-damonte.fr/location-immobiliere-troyes/logement-etudiant/" target="_blank">
                <img src="{{ asset('img/sponsors/damonte/residence.jpg') }}" class="img-thumbnail hidden-xs" style="max-height:120px;"/>
                <img src="{{ asset('img/sponsors/damonte/appart1.jpg') }}" class="img-thumbnail hidden-sm hidden-xs" style="max-height:120px;"/>
                <img src="{{ asset('img/sponsors/damonte/appart2.jpg') }}" class="img-thumbnail" style="max-height:120px;"/>
                <br />
                <img src="{{ asset('img/sponsors/damonte.png') }}" class="img-thumbnail" style="max-width: 40%;" />
            </a>
        </div>

        <h3>Pour ton compte en banque</h3>
        <p>
            Le CIC offre aux cotisants BDE 100€ pour l’ouverture d’un nouveau compte bancaire dans une des agences de Troyes. Et à chaque rentrée scolaire, tu recevras aussi 50€.
        </p>
        <div class="text-center">
            <a href="https://www.cic.fr/fr/index.html" target="_blank"><img src="{{ asset('img/sponsors/cic_est.png') }}" class="img-thumbnail" /></a>
        </div>

        <h3>Pour ton permis</h3>
        <p>
            Parce que le bus c'est pas le plus pratique, et que le vélo sous la pluie, ça mouille, l'auto-école Popeye propose 50€ de réduction pour les cotisants BDE UTT sur le permis de conduire. <br/>Tu l'as déjà, profites en alors pour passer le permis moto ou remorque !
        </p>
        <div class="text-center">
            <a href="https://www.popeye-troyes.fr" target="_blank"><img src="{{ asset('img/sponsors/deals/popeye_resultat.png') }}" class="img-thumbnail" /></a>
        </div>

        <!--<h3>MC2i</h3>
        <p>
            Sopra Steria, l’un des leaders européens de la Tech reconnu pour ses activités de conseil, de services numériques et d’édition de logiciels, aide ses clients à mener leur transformation numérique et à obtenir des bénéfices concrets et durables. Le Groupe apporte une réponse globale aux enjeux de compétitivité des grandes entreprises et organisations, en combinant une connaissance approfondie des secteurs d’activité et des technologies innovantes à une approche résolument collaborative.</br>
            Avec plus de 20 000 collaborateurs à travers la France, 30 familles de métiers, 11 secteurs d'activité (Défense, Énergie, Banque...) et 6 filiales (Cybersécurité, Aéronautique, Édition de logiciels...), le Groupe Sopra Steria, certifié Great Place To Work, offre une multitude d’opportunités pour t'épanouir. Alors, n'hésite plus et rejoins-nous dès maintenant en stage, en alternance ou pour ton premier job !
        </p>
        <div class="text-center">
            <a href="https://www.soprasteria.fr/carrieres" target="_blank"><img src="{{ asset('img/sponsors/deals/soprasteria_rsz.png') }}" class="img-thumbnail" /></a>
        </div>
        -->

        <h3>Plus de bon plans</h3>
        <p>Tu en veux plus ? <a href="{{ route('newcomer.deals')}}">Clique ici</a> pour découvrir les autres partenaires de l'intégration, ou rendez vous sur <a href="https://bde.utt.fr/nos-partenaires" target="_blank">bde.utt.fr</a> pour découvrir les partenaires du BDE à l'année.</p>
        <div class="text-center" id="question">
            @if(Auth::user()->isChecked('back_to_school'))
                <div class="text-center">
                    <a class="btn btn-primary" href="{{{ route('newcomer.'.Auth::user()->getNextCheck()['page']) }}}">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
                </div>
            @else
                <a href="{{ route('newcomer.backtoschool', [ 'step' => 'yes']) }}#question" class="btn btn-success">Suivant !</a>
            @endif
        </div>
    </div>
</div>
@endsection
