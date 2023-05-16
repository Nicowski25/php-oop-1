<?php
class Movie
{
    public $title;
    public $description;
    public $director;
    public $genre;
    public $year;
    public $thumb;

    function __construct($title, $description, $director, $genre, $year, $thumb)
    {
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
        $this->thumb = $thumb;
    }
}

$movies = [
    new Movie("Transformers", "Lorem", "Michael Bay", "Action", "2007", "https://pad.mymovies.it/filmclub/2006/08/027/locandina.jpg"),
    new Movie("Transformers - La vendetta del Caduto", "Lorem", "Michael Bay", "Action", "2007", "https://m.media-amazon.com/images/I/51haNTHB7fL._AC_.jpg"),
    new Movie("Transformers 3", "Lorem", "Michael Bay", "Action", "2007", "https://pad.mymovies.it/filmclub/2010/03/193/locandina.jpg"),
    new Movie("Transformers 4 - L'era dell'estinzione", "Lorem", "Michael Bay", "Action", "2007", "https://upload.wikimedia.org/wikipedia/en/0/0f/Transformers_Age_of_Extinction_poster.jpg"),
];
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

<style>
    .card-img {
        object-fit: cover;
    }
    .card-body {
        border: 1px solid grey;
    }
</style>
<body class="bg-dark">

    <header class="container text-center py-4 text-light">
        <h1>MOVIES</h1>
    </header>

    <main>
        <div class="container text-light">
            <div class="row row-cols-4">
                <?php foreach($movies as $movie) : ?>
                    <div class="card-dark">
                        <img class="card-img h-75 " src="<?= $movie -> thumb ?>" alt="">
                        <div class="card-body">
                            <h3><?= $movie -> title; ?></h3>
                            <p>
                                <span class="fw-bold">Description: </span>
                                <?= $movie -> description ?>
                            </p>
                            <p>
                                <span class="fw-bold">Director: </span>
                                <?= $movie -> director ?>
                            </p>
                            <p>
                                <span class="fw-bold">Year: </span>
                                <?= $movie -> year ?>
                            </p>
                            <p>
                                <span class="fw-bold">Genre: </span>
                                <?= $movie -> genre ?>
                            </p>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

</body>

</html>