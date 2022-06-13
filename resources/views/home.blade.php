<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    <h1 class="text-center">DB Movies <i class="fa-solid fa-film"></i></h1>
    <div class="row justify-content-center gap-3">
        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                <p class="card-text">Lan: {{$movie->nationality}}</p>
                <p class="card-text">Date: {{$movie->date}}</p>
                <p class="card-text">Vote: {{$movie->vote}}</p>
            </div>
          </div>
        @endforeach
    </div>


    
</body>
</html>