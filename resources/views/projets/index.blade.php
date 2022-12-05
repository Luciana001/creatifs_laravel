
@extends('templates.index')

@section('content')
    <!-- Project One -->
    @foreach ($projets as $projet)
    <div class="row">
        <div class="col-md-4">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="images/1.jpg" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>{{ $projet->titre }}</h3>
            <p class="lead">
                par
                <a href="artiste_details.html">Mister Univ'Hair</a> le 01-01-2017
            </p>
            <p>{{ $projet->texte }}</p>
            <a class="btn btn-primary" href="projet_details.html">View Project</a>
            <hr />
            <ul class="list-inline tags">
                <li><a href="#" class="btn btn-default btn-xs">Vintage</a></li>
                <li><a href="#" class="btn btn-default btn-xs">Football</a></li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    @endforeach

    <hr>
@endsection

