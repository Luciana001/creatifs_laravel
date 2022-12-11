
    <!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Newsletter</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Votre mail">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>

    @include('tags._index', [
        'tags' => \App\Models\Tag::orderBy('nom', 'asc')->get(),
    ])


</div>

