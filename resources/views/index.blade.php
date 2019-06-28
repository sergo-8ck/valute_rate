@extends('layout')

@section('content')
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Курс евро по отношению к рублю</h1>
            <p class="lead">1 рубль = {{$rate}} евро</p>
        </div>

    </main><!-- /.container -->
@endsection