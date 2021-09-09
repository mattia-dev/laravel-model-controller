<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        
        <ul>
            @foreach($movies as $movie)
            <li>
                <img src="{{ url($movie->poster) }}" alt="{{ $movie->title }}">

                <div class="movie-info">
                    <div class="primary-info">
                        <div>{{ $movie->title }} <span class="dir">from director {{ $movie->director }}</span></div>
                    </div>

                    <div>Release year: {{ $movie->year }} - Original language: {{ $movie->language }}</div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
