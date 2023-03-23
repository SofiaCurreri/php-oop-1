<?php

//Create un file index.php in cui:
 //- è definita una classe 'Movie'
 //=> all'interno della classe sono dichiarate delle variabili d'istanza
 //=> all'interno della classe è definito un costruttore
 //=> all'interno della classe è definito almeno un metodo
//- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
//Bonus 1:
//Modificare la classe Movie in modo che accetti piú di un genere.
//Bonus 2:
//Creare un layout completo per stampare a schermo una lista di movies.
//Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
//- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
//- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
//- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

require_once __DIR__ . "/data/movies.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="my-4">Movies List</h1>

        <div class="row row-cols-4">
            <?php foreach($movies as $movie) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $movie->poster ?>" class="card-img-top" alt="movie poster" style="height: 26rem;">

                    <div class="card-body">
                        <h5 class="card-title fs-4"> <?= $movie->title ?> </h5>
                        <h5 class="card-title "> <?= $movie->director ?> </h5>
                        <p class="card-text">
                        <ul>
                            <?php foreach($movie->genres as $genre) : ?>
                            <li> <?= $genre->name ?> </li>
                            <?php endforeach; ?>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>