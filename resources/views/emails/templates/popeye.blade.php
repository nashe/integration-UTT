@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:#E74360">
        Salut à toi jeune nouveau de l’ellipse !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Maintenant que tu as trouvé ton logement, comment penses-tu te rendre à l’UTT ? Voilà un partenariat qui tombe à pic !<br>
        Et oui, <span style="font-weight: bold;">avec popeye passe ton code et/ou ton permis</span> à troyes dans une de leurs nombreuses agences !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        En plus, tu as <span style="font-weight: bold;">50€ offerts</span> sur les frais d’inscriptions si tu es <span style="font-weight: bold;">cotisant BDE</span> !
    </span>
</div>
<div style="text-align: center; margin: 15px 10px;">
    <span>
        Pour plus d'informations : <br><a href="https://www.facebook.com/popeyetroyes/" style="color: blue;">Contacte-les sur facebook</a>
    </span>
</div>
@include('emails.parts.publicity-explained')
@endsection
