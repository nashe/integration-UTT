@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<div style="text-align: center; margin: 20px 10px;">
    <span style="font-size:20px; color:#E74360">
        Bonjour jeune UTTien(ne) !
    </span>
</div>
<div style="text-align: justify; margin: 15px 10px;">
    <span>
        Aujourd’hui, on te présente la plaquette de notre partenaire Beijaflore.
    </span>
</div>
<div>
    <a href="{{ URL::to('/img/sponsors/beijaflore/Plaquette_UTT_Beijaflore-1.png') }}"><img align="center" src="{{ URL::to('/img/sponsors/beijaflore/Plaquette_UTT_Beijaflore-1.png') }}" style="max-width:600px"></a>
</div>
@include('emails.parts.publicity-explained')
@endsection
