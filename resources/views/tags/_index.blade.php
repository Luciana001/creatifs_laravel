<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Tags</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled mb-0">
                    @foreach ($tags as $tag)
                        <li>
                            <a href="#">{{ $tag->nom }}</a>
                            [{{ count($tag->projets) }}]
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>