@extends('layouts.newcomer')

@section('title')
Accueil
@endsection

@section('smalltitle')
Informations diverses pour toi !
@endsection

@section('content')
<div class="box box-default">

        <div class="box-header with-border">
            <h3 class="box-title">Bienvenue et félicitations !</h3>
        </div>
        <div class="box-body">
            <p>
                Ça y est, après tant d’efforts tu y es arrivé ! Ton rêve se réalise enfin ! Tu fais maintenant partie de la grande famille des UTTiens !
            </p>
            <img src="{{ asset('img/gifs/welcome.webp') }}" alt="Welcome" style="text-align:center; max-width:50%; max-height: 200px;">
            <p>
                Pour t'accueillir, nous te préparons deux semaines d'intégration dignes de ce nom ! Le but de ces semaines est de rencontrer les anciens et nouveaux UTTiens autour des différents repas et activités que nous organisons tout spécialement pour toi.
            </p>
            <p>
                Ta première semaine dans notre belle école sera plutôt chargée en activités, mais ne t'inquiète pas ! Tu recevras un planning détaillé de ta semaine dès ton arrivée.
                @if(Auth::user()->branch == 'TC')
                    Tout ce que tu as à savoir pour le moment, c'est que tu dois être là <strong>{{ Config::get('services.reentry.tc.date') }} à {{ Config::get('services.reentry.tc.time') }} à l'UTT</strong>,
                    pour que nous puissions <strong>t'offrir un petit dej'</strong> de bienvenue.
                @elseif( in_array( Auth::user()->branch, array('ISC','PAIP', 'RE') ) )
                    Tout ce que tu as à savoir pour le moment, c'est que tu dois être là <strong>{{ Config::get('services.reentry.masters.date') }} à {{ Config::get('services.reentry.masters.time') }} à l'UTT</strong>,
                    pour que nous puissions <strong>t'offrir un petit dej'</strong> de bienvenue.
                @elseif(Auth::user()->branch != 'MM')
                    Tout ce que tu as à savoir pour le moment, c'est que tu dois être là <strong>{{ Config::get('services.reentry.branches.date') }} à {{ Config::get('services.reentry.branches.time') }} à l'UTT</strong>,
                    pour que nous puissions <strong>t'offrir un petit dej'</strong> de bienvenue.
                @endif
            </p>

            <p>
                Les premiers cours débuteront pendant la deuxième mais tu n'en auras que très peu. D'autres activités seront donc organisées cette semaine là également, en après-midi et en soirée ! 
            </p>

            <p>
                Ce site est là pour te permettre d'être prêt pour ton intégration, il va récapituler tous les petits trucs auxquels tu devras penser.<br />
                J’espère que tu es prêt à vivre deux de tes meilleures semaines étudiantes, embarque, mets ta ceinture et zéééé parti
            </p>
            <img src="{{ asset('img/gifs/cestparti.webp') }}" alt="Let's go" style="text-align:center; max-width:50%; max-height: 200px;">
            <p>
                Si tu as la moindre question, tu peux nous contacter sur <a href="https://www.instagram.com/bdeutt/" target="_blank">Instagram</a>, <a href="https://www.facebook.com/bde.utt/" target="_blank">Facebook</a>  ou en <a href="{{ route('contact') }}">cliquant ici</a> !
            </p>
            <div class="text-center">
                <a class="btn btn-primary" href="{{{ route('newcomer.'.Auth::user()->getNextCheck()['page']) }}}">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
            </div>
        </div>

    </div>
@endsection
