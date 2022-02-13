<h1>Lista film</h1>

@foreach ($movies as $movie)
    <div>
        <h2>Titolo film: {{ $movie->title }}</h2>
        <h3>Data film: {{ $movie->date }}</h3>
        <br>
        <br>
    </div>
@endforeach