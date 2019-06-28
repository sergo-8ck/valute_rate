@extends('layout')

@section('content')
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Курс евро по отношению к рублю</h1>
            <p class="lead">1 рубль = <span id="rate">{{$rate}}</span> евро</p>
        </div>

    </main><!-- /.container -->
@endsection

@section('script')
    <script>
      $(document).ready(function(){
        setInterval(function(){
          $.ajax({
            url: "/api",
            success: function( response ) {
              $('#rate').text(response);
            }
          });
        },10000);
      });
    </script>
@endsection