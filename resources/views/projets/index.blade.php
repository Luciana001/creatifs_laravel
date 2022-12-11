{{-- 
    Variables disponibles
        $projets ARRAY(Projet: id, titre, texte, image, dateCreation, creatif)
    --}}
<!-- Page Heading -->

@extends('templates.index')

@section('title')
    Les projets
@stop

@section('content')
    <!-- Title -->
    <h1 class="mt-4">Les projets <small>Design capill'Hair</small></h1>

    <hr>
    @foreach ($projets as $projet)
        <!-- Project One -->
        <div class="row">
            <div class="col-md-4">
                <a
                    href="{{ route('projets.show', [
                        'projet' => $projet->id,
                        'slug' => \Illuminate\Support\Str::slug($projet->titre),
                    ]) }}">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('assets/images/' . $projet->image) }}"
                        alt="{{ $projet->titre }}">
                </a>
            </div>
            <div class="col-md-8">
                <h3>{{ $projet->titre }}</h3>
                <p class="lead">
                    par
                    <a href="artiste_details.html">{{ $projet->createur->pseudo }}</a>
                    le {{ \Carbon\Carbon::parse($projet->dateCreation)->format('d-m-Y') }}
                </p>
                <p>{{ $projet->texte }}</p>
                <a class="btn btn-primary"
                    href="{{ route('projets.show', [
                        'projet' => $projet->id,
                        'slug' => \Illuminate\Support\Str::slug($projet->titre),
                    ]) }}">View
                    Project</a>
                <hr />
                <ul class="list-inline tags">
                    @foreach ($projet->tags as $tag)
                        <li><a href="#" class="btn btn-default btn-xs">{{ $tag->nom }}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
        <!-- /.row -->


        <hr>
    @endforeach

    {{ $projets->links() }}

@stop
