<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->

    <div class="card my-4">
        <h5 class="card-header">Newsletter</h5>
        <div class="card-body">
            <form action="{{ route('abonnes.store')}}" method="get">
                <div class="input-group">
                    {{-- <input type="text" class="form-control" name="mail" placeholder="Votre mail"
                        class="@error('mail') is-invalid @enderror">
                    @error('mail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                    <input type="mail" class="form-control" name="mail" placeholder="Votre mail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                </div>
            </form>
        </div>
    </div>


    @include('tags._index', [
        'tags' => \App\Models\Tag::orderBy('nom', 'asc')->get(),
    ])


</div>
