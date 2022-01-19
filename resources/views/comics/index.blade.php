@extends('layouts.app')

@section('page-title', 'comics')

@section('content')

<h1>Fumetti disponibili</h1>

<section class="comics">
    

    @forelse($comics as $comic)

    <div class="card comic">
        <div class="card-body">
            <h3>Titolo : {{$comic->title}}</h3>
            <p>Descrizione : {{$comic->description}}</p>
        </div>
    </div>

    @empty

    <p>fumetti non disponibili</p>

    @endforelse
</section>

@endsection 