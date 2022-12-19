@extends('templates.index')

@section('title', 'Create a new project')

@section('content')



<!-- ========================= FORMULAIRE VIDE - AJOUTER UN PROJET ============================================ -->
<!-- Form Start -->
<form action="{{ route('projets.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="titre">Title</label>
        <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror"
            placeholder="Enter your title here" required value="{{ old('title') }}" />
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="texte">Text</label>
        <textarea id="texte" name="texte" class="form-control @error('texte') is-invalid @enderror" rows="5"
            placeholder="Enter your text here">{{ old('texte') }}</textarea>
        @error('texte')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Input type file -> Image -->
    <div class="form-group">
        <label for="exampleFormControlFile1"> Image</label>
        <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1" name="image" />
    </div>

    <!-- Menu déroulant -> creatifs -->
    <div class="form-group">
        <label for="creatif">Creatif</label>
        <select id="creatif" name="creatif" class="form-control @error('creatif') is-invalid @enderror">
            <option disabled selected>Select your creatif</option>

            @foreach (\App\Models\Creatif::all() as $creatif)
                <option value="{{ $creatif->id }}">{{ $creatif->pseudo }}</option>
            @endforeach

        </select>
        @error('creatif')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- <!-- checkbox tags -->
    <div class="form-group">
        <label>Tags</label>
        <br/>
        <?php //foreach (\App\Models\Tag::All() as $tag): ?>
        <input 
            type="checkbox" 
            name="tags[]" 
            id="{{ $tag->nom }}" 
            value="{{ $tag->id }}" 
            />
        <label for="{{ $tag->nom }}">
            {{ $tag->nom }}
        </label><br />
        <?php //endforeach ?>
    </div> --}}

    <!-- groupes de boutons -->
    <div>
        <input class="btn btn-primary" type="submit" value="submit" />
        <input class="btn btn-secondary" type="reset" value="reset" />
    </div>
</form>
<!-- Form End -->

@stop