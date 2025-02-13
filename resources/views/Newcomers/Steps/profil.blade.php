@extends('layouts.newcomer')

@section('title')
Mon profil
@endsection

@section('smalltitle')
Mes informations personnelles
@endsection

@section('content')
<div class="box box-default">

        <div class="box-header with-border">
            <h3 class="box-title">Modification de mon profil</h3>
        </div>
        <div class="box-body">
        <form class="form-horizontal" action="{{ route('newcomer.profil') }}" method="post">
            <fieldset>
                <legend>Informations de contact</legend>
                <p class="text-center">
                    Pour que tu sois sûr de ne rien rater de ton intégration, nous avons besoin de pouvoir t'envoyer des petits messages !<br />
                    Toutes les informations personnelles que tu entres ici seront supprimées juste après l'intégration et en aucun cas elles ne seront transmises à d'autres personnes qu'aux organisateurs de l'intégration. On est des étudiants, comme toi, on n'a pas envie de recevoir du spam. ;)
                </p>

                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Nom complet</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" id="name" name="name" disabled value="{{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}}">
                    </div>
                </div>

                <div class="form-group {{{ Auth::user()->isChecked('profil_email')?'form-group-success':'' }}}">
                    <label for="email" class="col-lg-2 control-label">Mail</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="email" id="email" placeholder="email@domain.fr" type="text" value="{{{ old('email') ?? Auth::user()->email }}}">
                        <small class="text-muted">Il sera utilisé pour te tenir informé avant l'intégration. Par exemple, pour te prévenir qu'il y a une nouveauté sur le site.<br/>Si tu ne souhaites plus recevoir de mails, tu peux à tout moment revenir sur ce site et retirer ton adresse.</small>
                    </div>
                </div>

                <div class="form-group {{{ Auth::user()->isChecked('profil_phone')?'form-group-success':'' }}}">
                    <label for="phone" class="col-lg-2 control-label">Portable</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="phone" id="phone" placeholder="06.12.34.56.78" type="text" value="{{{ old('phone') ?? Auth::user()->phone }}}">
                        <small class="text-muted">Il sera utilisé pour te tenir informé par SMS pendant l'intégration. Par exemple, pour te prévenir d'un changement de programme le lendemain.<br/>Si tu ne souhaites plus recevoir de SMS tu peux à tout moment revenir sur ce site et supprimer ton numéro.</small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="discord" class="col-lg-2 control-label">Discord</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="discord" id="discord" placeholder="User#1234" type="text" value="{{{ old('discord') ?? Auth::user()->discord }}}">
                        <small class="text-muted">Il te permettra de contacter ton équipe d’intégration, les autres nouveaux et les organisateurs te relaieront des informations tout au long de l’intégration. <a href="https://discord.com/register">Si tu n'as pas de compte discord, clique ici.</a></small>
                    </div>
                </div>

            </fieldset>
            <fieldset>
                <legend>Informations <em>en cas de soucis</em></legend>
                <p class="text-center">
                    Pendant l'intégration, tu seras amené à manger des repas que nous t'aurons préparé et à faire des activités sportives.<br/>
                    Ces informations seront utilisées uniquement pour réagir rapidement en cas de problème.<br/>
                    Elles ne seront accessibles qu’aux coordinateurs de l'intégration, les secouristes présents la semaine (association SecUTT) et le pôle santé de l'UTT.
                </p>

                <div class="form-group {{{ Auth::user()->isChecked('profil_parent_name')?'form-group-success':'' }}}">
                    <label for="parent_name" class="col-lg-2 control-label">Personne à contacter en cas d'urgence</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="parent_name" id="parent_name" placeholder="Prénom Nom" type="text" value="{{{ old('parent_name') ?? Auth::user()->parent_name }}}">
                    </div>
                </div>

                <div class="form-group {{{ Auth::user()->isChecked('profil_parent_phone')?'form-group-success':'' }}}">
                    <label for="parent_phone" class="col-lg-2 control-label">Numéro de téléphone de cette personne</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="parent_phone" id="parent_phone" placeholder="06.12.34.56.78" type="text" value="{{{ old('parent_phone') ?? Auth::user()->parent_phone }}}">
                        <small class="text-muted">Note : numéro de téléphone étranger accepté. N'oublie pas l'indicatif pour un numéro étranger (+33...).</small>
                    </div>
                </div>
                <!--
                <div class="form-group {{{ Auth::user()->isChecked('profil_parent_phone')?'form-group-success':'' }}}">
                    <label for="medical_allergies" class="col-lg-2 control-label">Allergies</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="medical_allergies" id="medical_allergies">{{{ old('medical_allergies') ?? Auth::user()->medical_allergies }}}</textarea>
                    </div>
                </div>

                <div class="form-group {{{ Auth::user()->isChecked('profil_parent_phone')?'form-group-success':'' }}}">
                    <label for="medical_treatment" class="col-lg-2 control-label">Régime particulier pendant la semaine d'intégration</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="medical_treatment" id="medical_treatment">{{{ old('medical_treatment') ?? Auth::user()->medical_treatment }}}</textarea>
                    </div>
                </div>
                -->
                <div class="form-group {{{ Auth::user()->isChecked('profil_parent_phone')?'form-group-success':'' }}}">
                    <label for="medical_note" class="col-lg-2 control-label">Remarques</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="medical_note" id="medical_note">{{{ old('medical_note') ?? Auth::user()->medical_note }}}</textarea>
                    </div>
                </div>

                <input type="submit" class="btn btn-success form-control" value="Valider !">
        </div>
</div>
@endsection
