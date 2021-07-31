@extends('layout.main')

@section('main_content')
    <section class="wrapper">
        <h1>{{ $comic->title }}</h1>
        
        <div class="card">
            <div class="image">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
    
            <div class="dettagli">
                <h4>Serie</h4>
                <p>{{ $comic->series }}</p>
                <h4>Descrizione</h4>
                <p>{{ $comic->description }}</p>
                <h4>Id</h4>
                <p>{{ $comic->id }}</p>
            </div>
        </div>
        
        <div>
            <a href="{{ route("comics.index") }}">Torna all'elenco</a>
        </div>
    </section>
    
@endsection