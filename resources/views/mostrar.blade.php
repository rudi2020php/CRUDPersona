@extends('adminlte::page')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md col-6">
                    Personas  
                </div>
                <div class="col-2"><a href="{{route('persona.create')}}"><i class="fas fa-user-plus"></i><small>nuevo</small></a>
                </div>
                
                <div class="links">
                  <table class="col-5">
                  @foreach ($personas as $persona)
                <div class="col-sm-8">
                    <div class="card">
                       
                        <div class="card-body">

                            <form action="{{route('persona.destroy', $persona)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" alt="eliminar"> <i class="fas fa-user-minus"></i> </button>
                            </form>
                            <a href="{{route('persona.show', $persona->id)}}">
                            {{$persona->name}} {{$persona->dpto_id}}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                  </table>
                </div>
            </div>
        </div>
    </body>
</html>
