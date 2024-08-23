@extends('layouts.main')
@section('title', $event->title)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img class="img-fluid" src="/img/events/{{ $event->image }}" alt="{{  $event->title }}" />
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city">{{ $event->city }}</p>
            <p class="events-participants">{{ count($event->users) }} Participantes</p>
            <p class="event-owner">{{ $eventOwner['name'] }}</p>
            @if(!$hasUserJoined)
                <form action="/events/join/{{ $event->id }}" method="post">
                    @csrf
                    <a href="/events/join/{{ $event->id }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Presença</a>
                </form>
            @endif
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach($event->items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
           <h3>Sobre o evento:</h3>
           <p class="event-description">{{ $event->description }}</p> 
        </div>
    </div>
</div>

@endsection