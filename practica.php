<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Hola mundo</h1>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>

<?php
$edad = 10;
$name = "Juan";
define('LOGO_URL', '/assets/logo.png');


$output = "Hola como estas .$name";
echo $output;


$outputAge = match (true) {
    $edad < 2   => "Eres un bebe, $name",
    $edad < 10 => "Eres un niño, $name",
    default     => "Eres adulto, $name",
};

/*Arrays */
$frutas = ["Manzana", "Uva", "Curuva"];

/*Agregar algo al array*/
$frutas[] = "Melocoton";

/*Agrefar a una posición*/
$frutas[1]="Papaya";
 /*Trabajos con los indices */
$persona =[
"name"=> "Miguel",
"age" => 78,
"temas" => ["Programación","Cambio","Alojo"],
];
?>

<ul>
    <?php foreach ($frutas as $fruta): ?>
        <li><?= $fruta ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>
<img src="<?= LOGO_URL ?>" alt="">
<style>