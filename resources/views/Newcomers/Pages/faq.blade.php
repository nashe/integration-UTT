@extends('layouts.newcomer')

@section('title')
FAQ
@endsection

@section('smalltitle')
Frequently Asked Questions
@endsection

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">La semaine d'intégration</h3>
        </div>
        <div class="box-body">
	            <h4><a href="#question100" data-toggle="collapse">Quand est-ce que je dois venir à l’UTT ?</a></h4>
	            <div id="question100" class="collapse">
					<p>L'équipe d'intégration vous donne rendez-vous :</p>
					<ul>
	                	<li>Pour les étudiants entrant en Tronc Commun : {{ Config::get('services.reentry.tc.date') }} à {{ Config::get('services.reentry.tc.time') }} ;</li>
	                	<li>Pour les étudiants entrant en Branche (Bac +3) et en Master : {{ Config::get('services.reentry.branches.date') }} à {{ Config::get('services.reentry.branches.time') }} ;</li>
					</ul>
					<p>pour les activités de l'intégration ! <br/>
					<strong>On t’offre le petit-déjeuner !</strong></p>
				</div>

			    <h4><a href="#question200" data-toggle="collapse">Quand est-ce que je dois amener mon déguisement ?</a></h4>
	            <p id="question200" class="collapse">
					Il te sera utile dès le premier jour de ta semaine, viens déguiser pour le petit déjeuner ! On te conseille de faire un déguisement qui déchire, pour rendre fiers tes chefs d’équipes !
	            </p>

				<h4><a href="#question300" data-toggle="collapse">Les repas sont-ils compris ?</a></h4>
	            <p id="question300" class="collapse">
					Le jour de ton arrivée (le lundi, mardi), le petit déjeuner est offert par le BDE. <br/>
					Pour les repas du lundi soir (pour les étudiants entrant en Tronc Commun), mardi soir (pour tout le monde) et jeudi midi, une billetterie ouvrira bientôt pour que tu puisses payer les repas mais pas de panique, cela reste à des prix étudiants (entre 2 et 4€). Tu pourras également payer (en espèces ou en carte) sur place si tout n'a pas été vendu en amont ! 
				</p>

				<h4><a href="#question400" data-toggle="collapse">Est-ce qu'il y a des cours la première semaine ?</a></h4>
	            <p id="question400" class="collapse">
					Non, aucun cours la semaine du 4 au 10 septembre, ils commencent la semaine d’après. <br/>
					Tu auras juste des réunions avec les responsables de la formation. Tu passeras un tiers de ton temps avec eux, un tiers de ton temps avec nous, l’équipe d'intégration, et le reste en temps libre.
	            </p>

				<h4><a href="#question500" data-toggle="collapse">Quel est l’emploi du temps de la semaine d’intégration ?</a></h4>
	            <p id="question500" class="collapse">
					Il te sera envoyé par mail, et tu pourras également le retrouver sur un channel discord dédié.
	            </p>
   		    
			    <h4><a href="#question600" data-toggle="collapse">Quand ont lieu les inscriptions administratives?</a></h4>
	            <p id="question600" class="collapse">
	                Elles auront lieu tout au long de la semaine sur des créneaux définis. Nous te conseillons donc d’amener le nécessaire à ton inscription dès le premier jour.
	            </p>

				<h4><a href="#question700" data-toggle="collapse">Est-ce que l'intégration est obligatoire ?</a></h4>
				<p id="question700" class="collapse">
					Non, bien sûr. Les activités sont basées sur le volontariat ! Toutes nos activités sont anti-bizutages, nous y tenons ! Tous nos bénévoles signent une charte de respect de ces engagements.<br/>
					Un numéro d'urgence te sera communiqué à la rentrée si jamais une et une seule dérive survenait, des mesures contre le responsable de l'incident seraient immédiatement prises.
				</p>
			</div>
		</div>

		    <div class="box box-default">
	        <div class="box-header with-border">
	            <h3 class="box-title">Le WEI</h3>
	        </div>
	        <div class="box-body">

				<h4><a href="#question2000" data-toggle="collapse">Qu’est ce que c’est le WEI ?</a></h4>
				<p id="question2000" class="collapse">
					WEI signifie Week-End d’Intégration, c’est un évènement qui clôture en beauté la semaine d’intégration. Il a lieu du 8 au 10 septembre. Plein de surprises t’y attendent et c’est également un bon moment pour se faire plein de potes !
				</p>

				<h4><a href="#question2100" data-toggle="collapse">C’est quand ?</a></h4>
				<p id="question2100" class="collapse">
					On part le vendredi 8 septembre à 11h30 et on revient le dimanche 10 septembre vers 18h. On part de l'UTT et retour au même endroit !
				</p>

				<h4><a href="#question2200" data-toggle="collapse">C’est où ?</a></h4>
				<p id="question2200" class="collapse">
					Ca c’est une surprise ! ;) On peut juste te dire qu’on ne va pas <strong>dans la Creuse</strong>.
				</p>

				<h4><a href="#question2300" data-toggle="collapse">Qu’est-ce qu’on y fait ?</a></h4>
				<p id="question2300" class="collapse">
					On s’amuse, on rencontre les autres nouveaux et on désigne les vainqueurs de l'<strong>histoire</strong> !
				</p>

				<h4><a href="#question2400" data-toggle="collapse">Qu’est-ce que je dois emmener ?</a></h4>
				<div id="question2400" class="collapse">
					<ul>
						<li>Un sac de couchage (chaud) ;</li>
						<li>Des vêtements qui ne craignent rien (dès le départ en bus vendredi matin) et d’autres qui tiennent chaud ;</li>
						<li>Un k-way ; </li>
						<li>Un matelas gonflable ou un tapis de sol (pour le confort du dodo)</li>
						<li>Une serviette et du savon (si tu veux être propre) ;</li>
						<li>Une bombe anti-moustique (ton corps te remerciera) ;</li>
						<li>De la crème solaire (ton corps te remerciera aussi) ;</li>
						<li>Un maillot de bain ;</li>
						<li>Des bouchons d'oreilles (ton toi de plus tard te remerciera) ;</li>
						<li>Ton écocup ;</li>
						<li>Ton tupperware ainsi que des couverts ;</li>
						<li>Ta carte d'identité ;</li>
						<li>De l'argent (CB et/ou espèces) si tu veux pouvoir acheter à boire au WEI ;</li>
						<li><strong>Ton autorisation parentale si tu es mineur.</strong></li>
					</ul>				
				</div>

				<h4><a href="#question2500" data-toggle="collapse">Est-ce que je peux venir si je suis mineur(e) ?</a></h4>
				<p id="question2500" class="collapse">
					Oui, évidemment ! Mais il faudra nous fournir l’autorisation parentale que tu as reçue, remplie et signée par tes parents.
					<!--Oui, évidemment ! Mais il faudra nous fournir l’autorisation parentale que tu as reçue ou téléchargeable <a href="{{asset('docs/autorisation.pdf')}}">ici</a> remplie et signée par tes parents.-->
				</p>

				<h4><a href="#question2600" data-toggle="collapse">Combien ça coûte ?</a></h4>
				<p id="question2600" class="collapse">
					<!--La totalité du week-end coûte {{ Config::get('services.wei.price')/100 }}€, nourriture et transport compris, prévois juste de la monnaie pour tes consommations en soirée (entre 2€ et 3€ le verre).-->
					La totalité du week-end coûtera entre 50€ et 60€, nourriture et transport compris, prévois juste de la monnaie ou ta carte bleue pour tes consommations en soirée (entre 2€ et 3€ le verre).	
				</p>

				<h4><a href="#question2700" data-toggle="collapse">Les repas sont-ils compris ?</a></h4>
				<p id="question2700" class="collapse">
					Pendant le week-end, oui, et ça va être bon ! ;-)
				</p>

				<h4><a href="#question2800" data-toggle="collapse">Faut-il prévoir de l’argent ?</a></h4>
				<p id="question2800" class="collapse">
					Oui, pour payer tes éventuelles consommations au bar. Il ne sera pas possible d’accéder à un distributeur sur place, des boissons non alcoolisées seront également proposées. Vous pourrez régler en carte bleue et en espèces pendant le week-end.
				</p>
        </div>
    </div>
@endsection