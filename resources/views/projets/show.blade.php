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
        <div>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-secondary">Delete</a>
                {{-- {{ route('projets.index', [
                        'projet' => $projet->id,
                        'slug' => \Illuminate\Support\Str::slug($projet->titre),
                    ]) }} --}}
        </div>
        <p class="lead">
            par
            <a href="artiste_details.html">{{ $projet->createur->pseudo }}</a> le
            {{ \Carbon\Carbon::parse($projet->created_at)->format('d-m-Y') }}
        </p>
    
        <hr>
    
    
    
    
        <!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('images/' . $projet->image) }}"
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