{{-- 
    Variables disponibles
    $projet Projet(id, ...)
    --}}
    @extends('templates.index')

    @section('title')
        {{ $projet->titre }}
    @stop
    
    @section('content')
        <!-- Page Heading -->
    
        <!-- Title -->
        <h1 class="mt-4">{{ $projet->titre }}</h1>
        <p class="lead">
            par
            <a href="artiste_details.html">{{ $projet->createur->pseudo }}</a> le
            {{ \Carbon\Carbon::parse($projet->dateCreation)->format('d-m-Y') }}
        </p>
    
        <hr>
    
    
    
    
        <!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('assets/images/' . $projet->image) }}"
                        alt="{{ $projet->titre }}">
                </a>
            </div>
            <div class="col-md-6">
                <p>{{ $projet->texte }}</p>
                <hr />
                <ul class="list-inline tags">
                    @foreach ($projet->tags as $tag)
                        <li><a href="#" class="btn btn-default btn-xs">{{ $tag->nom }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @stop