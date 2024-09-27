<?php
//Llamado a una api
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión con curl
$ch = curl_init(API_URL);

//Indicar resultados de la petcioón y no mostrarla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/**Ejecutar peticion*/
$resultado = curl_exec($ch);


$data = json_decode($resultado, true);
curl_close($ch);


?>

<head>
    <title>La peli de marvel</title>
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <pre style="font-size: 8px; overflow:scrool; height: 250px;">
        <?= var_dump($data)?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?= $data["title"]; ?>"
        style="border-radius: 16px"/>
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"];?> días</h3>
        <p> Fechas de estreno <?= $data["release_date"]; ?></p>
        <p>La siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: flex;
        justify-content: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    section{
        display: grid;
        place-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
</style>