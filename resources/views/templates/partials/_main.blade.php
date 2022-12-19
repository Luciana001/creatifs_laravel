

        <!-- Post Content Column -->
        <div class="col-lg-8">

            @include('templates.partials._errors')
            
            @yield('content')
            <hr>


        </div>

        <!-- Sidebar Widgets Column -->
        @include('templates.partials._sidebar')

    