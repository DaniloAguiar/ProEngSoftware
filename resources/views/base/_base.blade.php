<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('css/bulma.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/input.css')}}" rel="stylesheet">

    <title></title>
    <link rel="shortcut icon" href="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0773f3feae.js"> </script>
</head>


<body>
    @include('base._header')
    <main class="container">
        <div class="columns is-centered mt-5">
            <div class="column is-four-fifths is-centered">
                @yield('body')
            </div>
        </div>
    </main>
    @include('base._footer')
</body>

</html>
