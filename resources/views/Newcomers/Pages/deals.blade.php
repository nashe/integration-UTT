@extends('layouts.newcomer')

@section('title')
Bons plans
@endsection

@section('smalltitle')
Que l'intégration a trouvé pour toi !
@endsection

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Les bons plans de l'intégration !</h3>
        </div>
        <div class="box-body">
        <ul>
            <li><a href="#damonte">Damonte</a></li>
            <li><a href="#popeye">Auto-école Popeye</a></li>
            <li><a href="#yvon">Yvon Assurances et Services</a></li>
            <li><a href="#soprasteria">Sopra Steria</a></li>
            <li><a href="#lasergame">Laser Game Evolution</a></li>
            <li><a href="#nigloland">Nigloland</a></li>
            <li><a href="#cgr">Cinéma CGR de Troyes</a></li>
            <li><a href="#familyspace">Family Space</a></li>
        </ul>

        <hr/>
        <p><a href="http://www.yves-damonte.fr"><img src="img/sponsors/deals/damonte_resultat.jpg" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="damonte"> Damonte </h4> </p>
        <p>Tu cherches un appartement en résidence étudiante ? En centre-ville ? Une maison avec piscine ? Damonte est l’agence qui saura trouver ce bijou grâce à ses agents professionnels et passionnés.</p>
        <p>120 Rue du Général de Gaulle 10000 Troyes</p>
        <p>295 Rue du Faubourg Croncels 10000 Troyes</p>
        <p><a href="http://www.yves-damonte.fr">http://www.yves-damonte.fr</a></p><br/>

        <p><a href="http://www.auto-ecole-popeye.fr"><img src="img/sponsors/deals/popeye_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="popeye"> Auto-école Popeye </h4> </p>
        <p>Tu n’as pas encore ton permis B ou tu souhaites ajouter une nouvelle lettre à ta collection ?</p>
        <p>L’auto-moto école Popeye t’accompagnera à des prix avantageux grâce à ses moniteurs compétents.</p>
        <p><a href="https://www.popeye-troyes.fr/">https://www.popeye-troyes.fr/</a></p><br/>

        <p><a href="https://www.yvon.eu/"><img src="img/sponsors/rsz_yvon.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="yvon"> Yvon Assurances et Services </h4> </p>
        <p>Yvon, l’allié des étudiants au quotidien ! Vos solutions assurances et mutuelles étudiantes en quelques clics !</p>
        <p>Avec Yvon, vous êtes entre de bonnes mains.</p>
        <p><a href="https://www.yvon.eu/">https://www.yvon.eu/</a></p><br/>

        <p><a href="https://www.soprasteriarecrute.fr/"><img src="img/sponsors/deals/soprasteria_rsz.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="soprasteria"> Sopra Steria </h4> </p>
        <p>L’un des leaders européens de la Tech reconnu pour ses activités de conseil, de services numériques et d’édition de logiciels, aide ses clients à mener leur transformation numérique et à obtenir des bénéfices concrets et durables.</p> 
        <p>Le Groupe apporte une réponse globale aux enjeux de compétitivité des grandes entreprises et organisations, en combinant une connaissance approfondie des secteurs d’activité et des technologies innovantes à une approche résolument collaborative.</p>
        <p><a href="https://www.soprasteria.fr/carrieres">https://www.soprasteria.fr/carrieres</a></p><br/>

        <p><a href="https://troyes.lasergame-evolution.fr/"><img src="img/sponsors/deals/lasergame_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="lasergame"> Laser Game Evolution </h4> </p>
        <p>Laser Game Évolution est un jeu de tir laser ou les participants s’affrontent dans un labyrinthe obscur sur plusieurs étages.</p>
        <p> 11 Bd. Georges Pompidou 10000 Troyes</p>
        <p><a href="https://troyes.lasergame-evolution.fr/">https://troyes.lasergame-evolution.fr/</a></p><br/>

        <p><a href="https://www.nigloland.fr/"><img src="img/sponsors/deals/nigloland_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="nigloland"> Nigloland </h4> </p>
        <p>Nigloland est un parc d’attractions à seulement 30 minutes en voiture de Troyes.</p>
        <p>Regroupant 4 univers et 43 attractions, ce parc saura vous émerveiller et vous faire ressentir émotions et frissons.</p>
        <p>Rue de la Vall. du Landion 10200 Dolancourt</p>
        <p><a href="https://www.nigloland.fr/">https://www.nigloland.fr/</a></p><br/>

        <p><a href="https://www.cgrcinemas.fr/troyes/films-a-l-affiche/"><img src="img/sponsors/deals/cgr_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="cgr"> Cinéma CGR de Troyes </h4> </p>
        <p>Le cinéma de Troyes, avec ses 14 salles dont une dotée de la technologie ICE, propose tous les derniers films dès leur sortie.</p>
        <p>13 Rue des Bas Trevois 10000 Troyes</p>
        <p><a href="https://www.cgrcinemas.fr/troyes/films-a-l-affiche/">https://www.cgrcinemas.fr/troyes/films-a-l-affiche/</a></p><br/>

        <p><a href="https://lefamilyspace.fr/"><img src="img/sponsors/deals/familyspace_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="familyspace"> Family Space </h4> </p>
        <p>Family Space est un complexe de loisir situé à Troyes qui regroupe un trampo parc, un bowling et plein d’autres activités à retrouver sur leur site internet.</p>
        <p>Les tarifs sont accessibles et ils proposent des formules pour des anniversaires par exemple.</p>
        <p>4 Rue de l'Orme de la Croix 10600 La Chapelle-Saint-Luc</p>
        <p><a href="https://lefamilyspace.fr/">https://lefamilyspace.fr/</a></p><br/>

        </div>
    </div>
@endsection
