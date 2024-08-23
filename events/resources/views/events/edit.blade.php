@extends('layouts.main')
@section('title', 'Editar Evento')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{ $event->title }}</h1>

    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Image do evento</label>
            <input type="file" class="form-control-file" id="image" name="image" />
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->id }}" class="img-preview" />
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}"/>
        </div>
        <div class="form-group">
            <label for="title">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d', strtotime($event->date)) }}"/>
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}"/>
        </div>

        <div class="form-group">
            <label for="title">O evento é privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? 'selected' : ""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descricao evento:</label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" /> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco" /> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food" /> Open food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes" /> Brindes
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Alterar evento" />
        </div>
    </form>
</div>

@endsection