<?php
class Movie {
    public $title;
    public $description;
    public $director;
    public $genre;
    public $year;

    function __construct($title, $description, $director, $genre, $year)
    {
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
    }
}

$movies = [
    new Movie("Transformers", "Lorem", "Michael Bay", "Action", "2007"),
    new Movie("Transformers, La vendetta del caduto", "Lorem", "Michael Bay", "Action", "2007"),
    new Movie("Transformers 3", "Lorem", "Michael Bay", "Action", "2007"),
    new Movie("Transformers 4, L'era dell'estinzione", "Lorem", "Michael Bay", "Action", "2007"),
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Object Oriented</title>
</head>

<body class="bg-dark">

    <header class="container text-center py-4 text-light">
        <h1>MOVIES</h1>
    </header>

    <main>

    </main>



</body>

</html>