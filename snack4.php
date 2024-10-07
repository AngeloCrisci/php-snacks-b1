



<?php

require __DIR__  . '/classes.php';
$max_vote = isset($_GET['user_vote']) ? $_GET['user_vote'] : null ;
$filtered_student = isset($_GET['filter']) ? $_GET['filter'] : null;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CLASSES</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
    </head>

<body>
    <h1 class="text-center">
        LA MIA SCUOLA!!
    </h1>
    <div class="container">
        <form action="" method="GET" class="mb-4">
            <div>
                <label class="form-label" for="vote">Inserisci un voto di ricerca!!</label>
                <input type="number" class="form-control mb-3" name="user_vote" step="0.1" value="<?= $max_vote?>">
            </div>
            <select class="form-select mb-4" name="filter">
                <option selected>SCEGLI IL TUO LINGUAGGIO PREFERITO</option>
                <option value="<?= $filtered_student?>">JS</option>
                <option value="<?= $filtered_student?>">PHP</option>
                <option value="<?= $filtered_student?>">HTML</option>
                <option value="<?= $filtered_student?>">CSS</option>
            </select>
            <div class="mb-4">
                    <button class="btn btn-primary" type="submit">CERCA</button>
                    <button class="btn btn-warning" type="reset">CLEAR</button>
            </div>
        </form>
        
             <?php 
                foreach($classi as $name_class => $each_student) { ?>
                <h3>
                    <?=  $name_class ?>
                </h3>
                

                <div class="row justify-content-between">
            <?php    foreach($each_student as $key => $value)
                    //* SNACK 4B COMMENTATO
                    // if($value["voto_medio"] >= 6 ) { 
                    // echo "<li>{$value['nome']} {$value['cognome']} Età: {$value['anni']}  Voto medio: {$value['voto_medio']} Linguaggio preferito: {$value['linguaggio_preferito']}</li>"

                    if($max_vote === null || $value["voto_medio"] < $max_vote && $filtered_student === $value['linguaggio_preferito'] || $filtered_student === null) { ?>
                    <div class="col-5" >
                        <div class="card mb-4" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <?= $value["nome"] . ' ' . $value['cognome'] ?></h5>
                                <p class="card-text"><?= $value["anni"] ?></p>
                                <p class="card-text"><?= $value["voto_medio"] ?></p>
                                <p class="card-text"><?= $value["linguaggio_preferito"] ?></p>
                            </div>
                        </div>  
                    </div>
         <?php } ?>  
                </div>
         <?php } ?>
    </div>
         
</body>
</html>