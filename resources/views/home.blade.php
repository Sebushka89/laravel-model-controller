<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ mix('/css/app.css') }} ">
</head>
<body>
    <div class="container">
        @foreach ($allFilms as $film)
            <div class="card">
                <h1>{{$film -> title}}</h1>
                <img src="{{$film -> cover}}" alt="copertina del libro {{$film -> title}}">
                <p>{{$film -> abstract}}</p>
            </div>
            
        @endforeach
    </div>
</body>
</html>