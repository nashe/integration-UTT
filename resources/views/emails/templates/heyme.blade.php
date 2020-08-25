@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:#E74360; font-weight: bold;">
        Bien comprendre le système de santé en France
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Cher(e)s étudiant(e)s,
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Afin de préparer votre prochaine rentrée 2020/2021, <span style="font-weight: bold;">le BDE UTT et HEYME</span> vous expliquent les points clés du système de santé français pour vous permettrede connaître les dispositifs auxquels vous avez droit.
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px; font-weight: bold;">
    <span style="font-size:20px; color:blue">
        MA PROTECTION SOCIALE
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Ta protection sociale en France, grâce à la Protection Universelle Maladie, est assurée dès lors que j’exerce une activité professionnelle en France ou que je réside en France de façon stable et régulière. Elle va donc m’assurer la prise en charge de mes frais de santé en cas de maladie ou de maternité, à titre personnel et de manière continue tout au long de ma vie.
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <span style="font-weight: bold;">Ainsi si je commence des études supérieures après le baccalauréat ou un diplôme équivalent je suis déjà rattaché à la Sécurité Sociale.</span> Je n’ai aucune démarche à faire et je reste rattaché à mon régime de protection sociale actuel, généralement celui de mes parents.
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        3 vérifications à effectuer:
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <ul>
            <li>
                Je vérifie que mon compte est bien ouvert sur le site de la Sécurité Sociale: <a href="http://ameli.fr">ameli.fr</a>.
            </li>
            <li>
                Je vérifie que mon RIB est renseigné pour percevoir mes remboursements
            </li>
            <li>
                Je vérifie que mon médecin traitant est renseigné pour un remboursement optimal 
            </li>
        </ul>
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px; font-weight: bold;">
    <span style="font-size:20px; color:blue">
        COMPRENDRE LE SYSTEME DE SANTÉ EN FRANCE
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        En France, le remboursement des frais médicaux se décompose en deux niveaux :
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <table>
        <tbody>
            <tr>
                <td style="vertical-align:top">
                    <div style="margin: auto 10px;">
                        <span style="font-weight: bold; color:red">
                            1
                        </span>
                    </div>
                </td>
                <td>
                    <span style="font-weight: bold; color:blue">
                        la part obligatoire
                    </span>
                , prise en charge par la Sécurité Sociale. Elle permet leremboursement d’une partie ou totalité de tes frais de santé selon les tarifs conventionnés (ex: 25€ pour une consultation chez un médecin généraliste). Ces remboursements varient en fonction de leur nature : entre 15% (pharmacie) et 100% (hospitalisation).
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <div style="margin: auto 10px;">
                        <span style="font-weight: bold; color:red">
                            2
                        </span>
                    </div>
                </td>
                <td>
                    <span style="font-weight: bold; color:orange">
                        la part complémentaire
                    </span>
                , appelée également ticket modérateur reste à ta charge, ou est pris en charge par la mutuelle (complémentaire santé).
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span style="font-style: italic;">
        La sécurité sociale est valable pour tous les français résidant en France de manière stable est régulière.
    </span>
</div>
<div style="text-align: justify; padding: 20px; margin: 15px 10px; border: 2px solid red; border-radius : 20px;">
    <span>
        <span style="color:red; font-weight: bold;">RECOMMANDATION  HEYME :</span> Même si elle n’est pas obligatoire, l’adhésion à une complémentaire santé est fortement recommandée car elle me permet d’obtenir un remboursement optimal de mes frais de santé et ainsi <span style="font-weight: bold">réduire le coût restant à ma charge.</span>
    </span>
</div>
<div style="text-align: center; margin: 15px 10px;">
    <span>
        <img align="center" src="{{ URL::to('/img/sponsors/heyme/HEYME_Image_Email.png') }}" style="max-width:600px">
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px; font-weight: bold;">
    <span style="font-size:20px; color:blue">
        MA DEMANDE DE REMBOURSEMENT
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <ul>
            <li>
                Tu as ta carte Vitale: ton médecin va transmettre automatiquement les informations auprès de ta caisse d’Assurance Maladie, et tu seras ainsi remboursé en une semaine sans avoir besoin de transmettre de feuille de soins.
            </li>
            <li>
                Tu n’as pas ta carte Vitale ou ton médecin n’est pas équipé: il te remettra une feuille de soins papier. Pense à bien la compléter avec tes informationspersonnelles et adressez-la à ta caisse d'Assurance Maladie pour être remboursé.
            </li>
        </ul>
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        <span style="font-weight: bold; color: red;">À SAVOIR :</span> En France l’équipement dentaire et optique reste peu remboursé par le régime obligatoire. Il est donc important de s’assurer d’être bien couvert sur ces risques en fonction de ses besoins.
    </span>
</div>
<div style="text-align: center; margin: 40px 10px 15px 10px;">
    <span style="color:orange">
        HEYME accompagne les étudiants et propose des solutions adaptées
    </span>
</div>
<div style="text-align: center; width: 250px; line-height: 40px; margin: auto; background-color: rgb(255,200,0);">
    <span style="vertical-align: middle">
        <a href="https://bit.ly/2E5pPMR">www.heyme.care</a>
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
    </span>
</div>



<div style="text-align: center; margin: 15px 10px;">
    <img align="center" src="{{ URL::to('/img/logo.png') }}" style="max-height:150px;max-width:200px">
    <img align="center" src="{{ URL::to('/img/sponsors/heyme/LOGO_HEYME_WEB.png') }}" style="max-height:
150px;max-width:200px">
</div>
@include('emails.parts.publicity-explained')
@endsection
