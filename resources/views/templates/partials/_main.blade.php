<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Page Heading -->

            <!-- Title -->
            @include('templates.partials._titre')

            @yield('content')



        </div>

        <!-- Sidebar Widgets Column -->
        @include('templates.partials._sidebar')

    </div>
    <!-- /.row -->

</div>