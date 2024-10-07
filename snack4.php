



<?php

require __DIR__  . '/classes.php';

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
        
            <?php 
                foreach($classi as $name_class => $each_student) { ?>
                <h3>
                    <?=  $name_class ?>
                </h3>
          <ul>  
            <?php    foreach($each_student as $key => $value)  {
                    if($value["voto_medio"] >= 6 ) { ?>
                <li>
                 <?= $value["nome"] . ' ' .  $value["cognome"] ?> Età: <?= $value["anni"] ?> Voto Medio <?= $value["voto_medio"] ?> <?= $value["linguaggio_preferito"] ?>
                 </li>
        <?php  } ?>
        <?php } ?>  
        </ul>
       
        <?php } ?>
</body>
</html>