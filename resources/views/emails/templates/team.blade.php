@extends('emails.master_layout')

@section('title')
Ton équipe d'intégration
@endsection

@section('content')
<div style="margin: 10px; text-align: center">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #E74360;">
    <strong>Salut {{ $user->first_name }}</strong>
  </span>
</div>

@include('emails.parts.cahier_de_vacances')

@endsection
