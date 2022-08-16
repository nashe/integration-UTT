@extends('layouts.master')

@section('title')
Accueil
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/flipclock.min.js') }}"></script>
    <script>
    var countdown = $('.countdown').FlipClock({{ (new DateTime(Config::get('services.wei.registrationStart')))->getTimestamp() - (new DateTime())->getTimestamp() }}, {
        countdown: false,
		clockFace: 'DailyCounter',
		language: 'french',
    });
    </script>
@endsection

@section('bodycontent')
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @elseif (Session::get('warning'))
        <div class="alert alert-warning">
            <p>{{ Session::get('warning') }}</p>
        </div>
    @elseif (Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="text-center">
                <a href="{{ route('newcomer.auth.login') }}" class="btn btn-primary">Je suis nouveau !</a><br/>
                <a href="{{ route('dashboard.index') }}" class="btn btn-default">Je suis étudiant à l'UTT</a>
                    {{--@if(((new DateTime(Config::get('services.wei.registrationStart')))->diff(new DateTime()))->invert)
                        <p>Ouverture des inscriptions pour le weekend dans </p>
                        <div class="countdown hidden-xs" style="width:640px;margin:20px auto;"></div>
                        <p><big class="visible-xs">{{ ((new DateTime(Config::get('services.wei.registrationStart')))->diff(new DateTime()))->format('%d jrs %h hrs %i min et %s sec') }}</big></p>
                    @else
                        <p>Inscriptions pour le weekend ouvertes !</p>
                    @endif
                    --}}
                <br/><br/>
	    </div>
        </div>
    </div>

    <div class="row sponsor">
        <div class="text-center">
            <?php
                $sponsors = [];
                //if ( Config::get('services.partners.ada') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.ada.fr/location-voiture-troyes.html', 'img' => asset("img/sponsors/ada.png"), 'alt' => 'ADA Location de véhicules' ]; }
                //if ( Config::get('services.partners.damonte') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.yves-damonte.fr', 'img' => asset("img/sponsors/damonte.png"), 'alt' => 'Damonte Immobilier' ]; }
                //if ( Config::get('services.partners.mgel') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.mgel.fr/', 'img' => asset("img/sponsors/mgel.png"), 'alt' => 'MGEL' ]; }
                //if ( Config::get('services.partners.popeye') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.auto-ecole-popeye.fr/', 'img' => asset("img/sponsors/popeye-white-background.png"), 'alt' => 'Popeye auto-école' ]; }
                //if ( Config::get('services.partners.beijaflore') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.beijaflore.com/fr/', 'img' => asset("img/sponsors/beijaflore-2019.png"), 'alt' => 'Beijaflore' ]; }
                //if ( Config::get('services.partners.heyme') === 'true' ) { $sponsors[] = [ 'link' => 'https://bit.ly/3g48nps', 'img' => asset("img/sponsors/heyme-white-background.png"), 'alt' => 'HEYME' ]; }
                //if ( Config::get('services.partners.lcl') === 'true' ) { $sponsors[] = [ 'link' => 'https://bienvenue.secure.lcl.fr/#/offre=ouvrir-un-compte-lcl-etudiant', 'img' => asset("img/sponsors/LCL-logo.jpg"), 'alt' => 'LCL' ]; }
                //if ( Config::get('services.partners.sncf') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.sncf.com/fr', 'img' => asset("img/sponsors/Logo_SNCF_2011.svg.png"), 'alt' => 'SNCF' ]; }

                if ( Config::get('services.partners.popeye') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.auto-ecole-popeye.fr/', 'img' => asset("img/sponsors/popeye_a21.png"), 'alt' => 'Popeye auto-école' ]; }
                if ( Config::get('services.partners.damonte') === 'true' ) { $sponsors[] = [ 'link' => 'http://www.yves-damonte.fr', 'img' => asset("img/sponsors/damonte.png"), 'alt' => 'Damonte Immobilier' ]; }
                if ( Config::get('services.partners.yvon') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.yvon.eu/', 'img' => asset("img/sponsors/YVON.jpeg"), 'alt' => 'Yvon Assurances et Services' ]; }
                if ( Config::get('services.partners.soprasteria') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.soprasteria.fr/', 'img' => asset("img/sponsors/soprasteria.png"), 'alt' => 'Sopra Steria' ]; }
                // if ( Config::get('services.partners.homebox') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.homebox.fr/liste-des-gardes-meubles/garde-meuble-troyes.html', 'img' => asset("img/sponsors/HOMEBOX_logo.jpg"), 'alt' => 'HOMEBOX Garde meuble' ]; }
                // if ( Config::get('services.partners.sncf') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.sncf.com/fr', 'img' => asset("img/sponsors/SNCF_logo.png"), 'alt' => 'SNCF' ]; }
                // if ( Config::get('services.partners.lasergame') === 'true' ) { $sponsors[] = [ 'link' => 'https://troyes.lasergame-evolution.fr/', 'img' => asset("img/sponsors/LASERGAME_logo.png"), 'alt' => 'Laser Game Evolution' ]; }
                // if ( Config::get('services.partners.cic') === 'true' ) { $sponsors[] = [ 'link' => 'https://www.cic.fr', 'img' => asset("img/sponsors/cic_logo.png"), 'alt' => 'CIC' ]; }
		        shuffle($sponsors);

            ?>
            @foreach($sponsors as $sponsor)
                <a href="{{{ $sponsor['link'] }}}"><img src="{{{ $sponsor['img'] }}}" alt="{{{ $sponsor['alt'] }}}" /></a>
            @endforeach
        </div>
    </div>
@endsection
