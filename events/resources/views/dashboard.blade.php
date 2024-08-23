@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count(events) > 0)
    @else
    <p>Voce ainda não tem eventos, <a href="/events/create">criar evento</a></p>
</div>

@endsection