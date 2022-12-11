<!DOCTYPE html>
<html lang="en">

<head>

    @include('templates.partials._head')

</head>

<body>

    @include('templates.partials._nav')

    <div class="container">
        <div class="row">
            @include('templates.partials._main')
            @include('templates.partials._sidebar')
            
        </div>
    </div>
    
    @include('templates.partials._footer')

    @include('templates.partials._scripts')

</body>

</html>
