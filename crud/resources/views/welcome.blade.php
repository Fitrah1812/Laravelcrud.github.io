<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://marketing.appkey.co.id/wp-content/uploads/2020/06/thumbnail-QnA-SEO.jpg" class="attachment-full size-full wp-post-image" >

        <title>Halaman QNA</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FAF0E6;
                color: #FF00FF;
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
                <div class="title m-b-md">
                    Halaman QNA
                </div>
                <form action="{{ route('store') }}" method="POST" class="form">
                    @csrf
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <input type="text" name="name" placeholder="Ex: Apakah Minuman Kesukaanku ?" class="form-control">
                        <label>Jawaban</label>
                        <input type="text" name="name" placeholder="Ex: Es Teh Panas" class="form-control">
                    </div>
                    <button class="btn btn-primary">Tambahkan</button>
                </form>
                <br>
                <form action="/search" method="GET">
                <input type="text" name="search" placeholder="Cari pertanyaan ..">
		        <input type="submit" value="Cari">
                </form>
              
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Aksi</th>
                        
                    </thead>
                    <tbody>
                        @foreach($tasks as $key =>$task)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->name }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{ route('edit', $task->id) }}">Edit</a> | 
                                <a class="btn btn-danger btn-sm" href="{{ route('delete', $task->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    
                </table>
                {{ $tasks->links() }}
                </br>

                
            </div>
        </div>
    </body>
</html>
