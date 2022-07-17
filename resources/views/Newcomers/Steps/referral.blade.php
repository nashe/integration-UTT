@extends('layouts.newcomer')

@section('title')
{{ (Auth::user()->godFather && Auth::user()->godFather->sex)?'Ta marraine':'Ton parrain' }}
@endsection

@section('smalltitle')
La personne qui te guidera tout au long de ta vie à l'UTT
@endsection

@section('content')
<div class="box box-default">

    @if(Auth::user()->referral_id === null)
        <div class="box-header with-border">
            <h3 class="box-title">Pourquoi avoir un parrain ?</h3>
        </div>
        <div class="box-body">
        <p>
            Pour que ta rentrée se passe au mieux et que tu puisses intégrer notre belle école dans les meilleures conditions, nous allons t'attribuer un parrain ou une marraine.
            <br />
            Tu pourras compter sur lui ou elle, et sur son expérience, afin de ne pas être seul et qu'il te partage ses petites astuces de survie ;) Il pourra t'aider à découvrir l'école, mais aussi la vie troyenne étudiante : les soirées, les associations, les logements, les cours…
        </p>
        <p>
            Pour qu’il te corresponde au mieux, nous te proposons un petit questionnaire à remplir avec sincérité afin qu'on te trouve la personne parfaite :)
            <br />
            Si tu ne le remplis pas, il te sera attribué au hasard, ça serait dommage.
            <br />
            Une fois le questionnaire rempli, nous t'enverrons dans les jours qui viennent ses coordonnées
            Mais pas d'inquiétude ! Tu as le choix de le contacter ou non : tu auras ses coordonnées mais il n'aura pas les tiennes.
        </p>
        <p>
            Questionnaire si tu rentres en Tronc Commun (1ère année) : <a href="https://forms.gle/QD1awJ8paPhAtGwP9">https://forms.gle/QD1awJ8paPhAtGwP9</a>
            <br />
            Questionnaire si tu rentres en Branche (3ème année) : <a href="https://forms.gle/V1BMMV4fSEp4ydEC8">https://forms.gle/V1BMMV4fSEp4ydEC8</a>
            <br />
            Questionnaire si tu rentres en Master : <a href="https://forms.gle/zWoYoFBawehWLEvV6">https://forms.gle/zWoYoFBawehWLEvV6</a>
        </p>
        <div class="text-center">
            <a class="btn btn-primary" href="{{{ route('newcomer.'.Auth::user()->getNextCheck()['page']) }}}">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
        </div>
    @else
        <div class="box-header with-border">
            <h3 class="box-title">{{ Auth::user()->godFather->first_name }} {{ Auth::user()->godFather->last_name }}, {{ (Auth::user()->godFather->sex)?'ta marraine':'ton parrain' }} !</h3>
        </div>
        <div class="box-body">
            <div class="thumbnail col-lg-2">
                <img src="{{ asset('/uploads/students-trombi/'.Auth::user()->referral_id.'.jpg') }}" alt="Photo"/>
            </div>
                <div class="caption col-lg-10">
                    <div style="position:relative;margin-bottom:5px;">
                        <i class="fa fa-mobile" aria-hidden="true"  style="position:absolute;top:3px;left:3px;vertical-align:bottom;"></i>
                        <span style="margin-left:25px;text-align:justify;">{{ Auth::user()->godFather->phone }}</span>
                    </div>
                    <div style="position:relative;margin-bottom:5px;">
                        <i class="fa fa-at" aria-hidden="true" style="position:absolute;top:3px;vertical-align:bottom;"></i>
                        <span style="margin-left:25px;text-align:justify;">{{ Auth::user()->godFather->email }}</span>
                    </div>
                    <div style="position:relative;margin-bottom:5px;">
                        <i class="fa fa-map-marker" aria-hidden="true" style="position:absolute;top:3px;vertical-align:bottom;"></i>
                        <span style="margin-left:25px;text-align:justify;">
                            {{ (Auth::user()->godFather->sex)?'Elle':'Il' }}
                            vient de {{ Auth::user()->godFather->city }}, {{ Auth::user()->godFather->postal_code }}, {{ Auth::user()->godFather->country }}</span>
                    </div>
                    @if(substr(Auth::user()->godFather->facebook, 0, 4) == 'http')
                        <div style="position:relative;margin-bottom:5px;">
                            <i class="fa fa-facebook" aria-hidden="true" style="position:absolute;top:3px;vertical-align:bottom;"></i>
                            <span style="margin-left:25px;text-align:justify;"><a href="{{ Auth::user()->godFather->facebook }}">Profil Facebook</a></span>
                        </div>
                    @endif
                    @if(Auth::user()->godFather->surname)
                        <div style="position:relative;margin-bottom:5px;">
                            <i class="fa fa-user" aria-hidden="true" style="position:absolute;top:3px;vertical-align:bottom;"></i>
                            <span style="margin-left:25px;text-align:justify;">On le surnomme <em>{{Auth::user()->godFather->surname}}</em></span>
                        </div>
                    @endif
                </div>
                <div class="clearfix"></div>
                <h4>{{ (Auth::user()->godFather->sex)?'Elle':'Il' }} a un message pour toi !</h4>
                <p style="text-align:justify;font-size:1.1em"><em>{!! nl2br(e(Auth::user()->godFather->referral_text)) !!}</em></p>

                <hr style="margin-top:0px;"/>
                <h4>Mais pourquoi avoir un parrain ?</h4>
                <p>
					Pour que ta rentrée se passe au mieux et que tu puisses intégrer notre belle école dans les meilleures conditions, nous allons t'attribuer un parrain ou une marraine.
                    <br />
                    Tu pourras compter sur lui ou elle, et sur son expérience, afin de ne pas être seul et qu'il te partage ses petites astuces de survie ;) Il pourra t'aider à découvrir l'école, mais aussi la vie troyenne étudiante : les soirées, les associations, les logements, les cours…
				</p>
                <p>
                    Cependant, ton parrain ne sait pas qui tu es, il sait juste qu'il a un fillot ! C'est donc à toi de faire le premier pas et de lui
                    envoyer un doux message. Pas besoin de faire compliqué, un simple <em>&laquo;&nbsp;Salut, je suis ton fillot !&nbsp;&raquo;</em> suffira. ;)
                </p>
                <hr/>

                <div class="text-center">
                @if(Auth::user()->isChecked('referral'))
                    <h4 id="question">Félicitation, tu as pris contact avec {{ (Auth::user()->godFather->sex)?'ta marraine':'ton parrain' }} !</h4>
                    <a href="{{ route('newcomer.referral', [ 'step' => 'cancel']) }}#question" class="btn btn-danger">Ce n'est pas le cas ?</a>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{{ route('newcomer.'.Auth::user()->getNextCheck()['page']) }}}">Prochaine action à faire<br/><strong>{{{ Auth::user()->getNextCheck()['action'] }}}</strong></a>
                    </div>
                @elseif($step == 'contacted')
                    <h4 id="question">A-t-il répondu ?</h4>
                    <a href="{{ route('newcomer.referral', [ 'step' => 'answered']) }}#question" class="btn btn-primary">Oui</a>
                    <a href="{{ route('newcomer.referral', [ 'step' => 'notAnswered']) }}#question" class="btn btn-danger">Non</a>
                @elseif($step == 'notAnswered')
                    <h4 id="question">Ah :/</h4>
                    <p>{{ (Auth::user()->godFather->sex)?'Ta marraine':'Ton parrain' }} est peut-être en vacances ou à l'étranger..</p>
                    <p>Tente de {{ (Auth::user()->godFather->sex)?'la':'le' }} contacter par tous les moyens disponibles : SMS, mail, Facebook, canard ...</p>
                    @if(!Auth::user()->referral_emailed)
                        <p>Si tu le souhaites, nous pouvons lui envoyer tes coordonnées par mail, pour qu'{{ (Auth::user()->godFather->sex)?'elle':'il' }} puisse te contacter dès que possible.</p>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <form action="{{ route('newcomer.referral.submit') }}"method="post">
                                    <input class="form-control" name="email" id="email" placeholder="Mail" type="text" value="{{{ old('email') ?? Auth::user()->email }}}">
                                    <input class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" type="text" value="{{{ old('phone') ?? Auth::user()->phone }}}">
                                    <input class="form-control btn btn-primary" type="submit" value="Envoyer mes coordonées à mon parrain">
                                </form>
                            </div>
                        </div>
                    @else
                        <p><em>Un mail avec tes coordonnées a déjà été envoyé à {{ (Auth::user()->godFather->sex)?'ta marraine':'ton parrain' }}.</em></p>
                        <a href="{{ route('newcomer.referral') }}#question" class="btn btn-danger">Retour</a>
                    @endif
                @elseif($step == 'notContacted')
                    <h4 id="question">Bah alors ?</h4>
                    <p>Essaye de lui envoyer un petit SMS, mail ou un message Facebook rapidement !</p>
                    @if(!Auth::user()->referral_emailed)
                        <p>Si tu le souhaites, nous pouvons aussi lui envoyer tes coordonnées par mail, pour qu'{{ (Auth::user()->godFather->sex)?'elle':'il' }} puisse te contacter de lui même.</p>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <form action="{{ route('newcomer.referral.submit') }}"method="post">
                                    <input class="form-control" name="email" id="email" placeholder="Email" type="text" value="{{{ old('email') ?? Auth::user()->email }}}">
                                    <input class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" type="text" value="{{{ old('phone') ?? Auth::user()->phone }}}">
                                    <input class="form-control btn btn-primary" type="submit" value="Envoyer mes coordonées à mon parrain">
                                </form>
                            </div>
                        </div>
                    @else
                        <p><em>Un mail avec tes coordonnées a déjà été envoyé à {{ (Auth::user()->godFather->sex)?'ta marraine':'ton parrain' }}.</em></p>
                        <a href="{{ route('newcomer.referral') }}#question" class="btn btn-danger">Retour</a>
                    @endif
                @else
                    <h4 id="question">As-tu déjà essayé de contacter {{ (Auth::user()->godFather->sex)?'ta marraine':'ton parrain' }} ?</h4>
                    <a href="{{ route('newcomer.referral', [ 'step' => 'contacted']) }}#question" class="btn btn-primary">Oui</a>
                    <a href="{{ route('newcomer.referral', [ 'step' => 'notContacted']) }}#question" class="btn btn-danger">Non</a><br/>
                @endif
                </div>
        </div>
    @endif
</div>
@endsection
