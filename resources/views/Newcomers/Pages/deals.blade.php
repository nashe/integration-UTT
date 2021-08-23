@extends('layouts.newcomer')

@section('title')
Bon plans
@endsection

@section('smalltitle')
Que l'intégration a trouvé pour toi !
@endsection

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Les bon plans de l'intégration !</h3>
        </div>
        <div class="box-body">
        <h4> Les partenaires de ton intégration : </h4>

        <ul>
            <li><a href="#damonte">Damonte</a></li>
            <li><a href="#popeye">Auto-école Popeye</a></li>
            <li><a href="#sncf">SNCF</a></li>
            <li><a href="#homebox">Homebox</a></li>
            <li><a href="#lasergame">Laser Game Evolution</a></li>
            <li><a href="#nigloland">Nigloland</a></li>
            <li><a href="#cgr">Cinéma CGR de Troyes</a></li>
            <li><a href="#familyspace">Family Space</a></li>
            <li><a href="#fathersons">Father & Sons</a></li>
        </ul>

        <hr/>
        <p><a href="http://www.yves-damonte.fr"><img src="img/sponsors/deals/damonte_resultat.jpg" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="damonte"> Damonte </h4> </p>
        <p>Tu cherches un appartement en résidence étudiante ? En centre ville ? Une maison avec piscine ? Damonte est l’agence qui saura trouver ce bijoux grâce à ces agents professionnels et passionnés.</p>
        <p>120 Rue du Général de Gaulle 10000 Troyes</p>
        <p>295 Rue du Faubourg Croncels 10000 Troyes</p>
        <p><a href="http://www.yves-damonte.fr">http://www.yves-damonte.fr</a></p>

        <p><a href="http://www.auto-ecole-popeye.fr"><img src="img/sponsors/deals/popeye_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="popeye"> Auto-école Popeye </h4> </p>
        <p>Tu n’as pas encore ton permis B ou tu souhaites ajouter une nouvelle lettre à ta collection ?</p>
        <p>L’auto-moto école Popeye t’accompagneras a des prix avantageux grace à ces moniteurs compétents.</p>
        <p><a href="https://www.popeye-troyes.fr/">https://www.popeye-troyes.fr/</a></p>
        
        <p><a href="https://www.sncf.com/fr"><img src="img/sponsors/SNCF_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="ada"> SNCF </h4> </p>
        <p>Vous la connaissez sûrement déjà, c’est la compagnie de trains qui vous permet de rejoindre Paris en 1h30 et plein d’autres destinations. Pensez à profitez des offres comme la carte avantage jeune et les cartes régionales.</p>
        <p><a href="https://www.sncf.com/fr">https://www.sncf.com/fr</a></p>

        <p><a href="https://www.homebox.fr/liste-des-gardes-meubles/garde-meuble-troyes.html"><img src="img/sponsors/deals/HOMEBOX_resultat.jpg" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="lcl"> HomeBox </h4> </p>
        <p>HomeBox c’est la solution de location de box, avec plus de 110 centres en France très sécurisés, vous pouvez louez des box de 2 à 50 m2 accessibles 24h/24 7j/7 a petit prix.</p>
        <p>2 à 10 rue Maryse Bastié 10600 Barberey-Saint-Sulpice</p>
        <p><a href="https://www.homebox.fr/liste-des-gardes-meubles/garde-meuble-troyes.html">https://www.homebox.fr/liste-des-gardes-meubles/garde-meuble-troyes.html</a></p>

        <p><a href="https://troyes.lasergame-evolution.fr/"><img src="img/sponsors/deals/lasergame_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="lasergame"> Laser Game Evolution </h4> </p>
        <p>Laser Game Évolution est un jeu de tir laser ou les participants s’affrontent dans un labyrinthe obscur sur plusieurs étages.</p>
        <p>C’est seulement 4€ par personne la partie de 20 minutes et du 7 au 10 septembre de 16h à 22h c’est 12€ pour un nombre illimité de parties !</p>
        <p> 11 Bd. Georges Pompidou 10000 Troyes</p>
        <p><a href="https://troyes.lasergame-evolution.fr/">https://troyes.lasergame-evolution.fr/</a></p>

        <p><a href="https://www.nigloland.fr/"><img src="img/sponsors/deals/nigloland_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="nigloland"> Nigloland </h4> </p>
        <p>Nigloland est un parc d’attractions à seulement 30 minutes en voiture de Troyes.</p>
        <p>Regroupant 4 univers et 43 attractions, ce parc saura vous émerveiller et vous faire ressentir émotions et frissons.</p>
        <p>Rue de la Vall. du Landion 10200 Dolancourt</p>
        <p><a href="https://www.nigloland.fr/">https://www.nigloland.fr/</a></p>

        <p><a href="https://www.cgrcinemas.fr/troyes/films-a-l-affiche/"><img src="img/sponsors/deals/cgr_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="cgr"> Cinéma CGR de Troyes </h4> </p>
        <p>Le cinéma de Troyes, avec ses 14 salles dont une doté de la technologie ICE, il propose tous les derniers films dés leur sortie.</p>
        <p>Le prix d’une séance est réduit à 7,70€  en montrant votre carte étudiante.</p>
        <p>13 Rue des Bas Trevois 10000 Troyes</p>
        <p><a href="https://www.cgrcinemas.fr/troyes/films-a-l-affiche/">https://www.cgrcinemas.fr/troyes/films-a-l-affiche/</a></p>

        <p><a href="https://lefamilyspace.fr/"><img src="img/sponsors/deals/familyspace_resultat.png" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="cgr"> Family Space </h4> </p>
        <p>Family Space est un complexe de loisir situé à Troyes qui regroupe un trampo parc, un bowling et plein d’autres activités à retrouver sur leur site internet.</p>
        <p>Les tarifs sont accessibles et ils proposent des formules pour des anniversaires par exemple.</p>
        <p>4 Rue de l'Orme de la Croix 10600 La Chapelle-Saint-Luc</p>
        <p><a href="https://lefamilyspace.fr/">https://lefamilyspace.fr/</a></p>

        <p><a href="https://www.fatherandsons.fr/"><img src="img/sponsors/deals/fathersons_resultat.jpg" style="float:right" class="img-thumbnail" /></a></p>
        <p> <h4 id="cgr"> Father & Sons </h4> </p>
        <p>ather & Sons est une marque de vêtements pour homme, découvrez leur catalogue sur leur site internet et sachez qu’ils proposent une offre un costume + une chemise + un noeud papillon ou une cravate pour seulement 199€ ttc.</p>
        <p>114 Bd de Dijon 10800 Saint-Julien-les-Villas</p>
        <p><a href="https://www.fatherandsons.fr/">https://www.fatherandsons.fr/</a></p>

        </div>
    </div>
@endsection
