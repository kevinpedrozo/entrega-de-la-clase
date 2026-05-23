<?php

$equipos = [

    [
        "nombre" => "Real Madrid",
        "pais" => "España",
        "titulos" => 14,
        "estadio" => "Santiago Bernabéu",
        "descripcion" => "El club más ganador de la Champions League."
    ],

    [
        "nombre" => "Barcelona",
        "pais" => "España",
        "titulos" => 5,
        "estadio" => "Camp Nou",
        "descripcion" => "Fútbol ofensivo y gran historia."
    ],

    [
        "nombre" => "Manchester City",
        "pais" => "Inglaterra",
        "titulos" => 1,
        "estadio" => "Etihad Stadium",
        "descripcion" => "Dominador reciente de Europa."
    ]

];

$indice = $_GET['equipo'] ?? 0;

if ($indice >= count($equipos)) {
    $indice = 0;
}

$equipo = $equipos[$indice];

?>