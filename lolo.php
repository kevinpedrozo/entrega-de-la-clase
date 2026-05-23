```php id="6omj0m"
<?php

$equipos = [

    [
        "nombre" => "Real Madrid",
        "pais" => "España",
        "titulos" => 14,
        "estadio" => "Santiago Bernabéu",
        "color" => "#f1c40f",
        "descripcion" => "El club más ganador de la Champions League."
    ],

    [
        "nombre" => "Barcelona",
        "pais" => "España",
        "titulos" => 5,
        "estadio" => "Camp Nou",
        "color" => "#3498db",
        "descripcion" => "Conocido por su estilo de juego ofensivo."
    ],

    [
        "nombre" => "Manchester City",
        "pais" => "Inglaterra",
        "titulos" => 1,
        "estadio" => "Etihad Stadium",
        "color" => "#5dade2",
        "descripcion" => "Uno de los equipos más fuertes de Europa."
    ],

    [
        "nombre" => "PSG",
        "pais" => "Francia",
        "titulos" => 0,
        "estadio" => "Parque de los Príncipes",
        "color" => "#2e86c1",
        "descripcion" => "Club francés lleno de estrellas."
    ]

];

$indice = isset($_GET['equipo'])
    ? $_GET['equipo']
    : 0;

if($indice >= count($equipos)){
    $indice = 0;
}

$equipo = $equipos[$indice];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Fútbol World</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#ecf0f1;
        }

        header{
            background:linear-gradient(90deg,#145a32,#1e8449);
            color:white;
            text-align:center;
            padding:30px;
        }

        header h1{
            font-size:45px;
        }

        header p{
            margin-top:10px;
            font-size:18px;
        }

        nav{
            background:#0b6623;
            display:flex;
            justify-content:center;
            gap:15px;
            flex-wrap:wrap;
            padding:15px;
        }

        nav a{
            text-decoration:none;
            background:white;
            color:#145a32;
            padding:12px 20px;
            border-radius:10px;
            font-weight:bold;
            transition:0.3s;
        }

        nav a:hover{
            background:#d4efdf;
            transform:scale(1.05);
        }

        .hero{
            height:300px;
            background:url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=1200')
            center/cover;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
            text-shadow:2px 2px 10px black;
        }

        .hero h2{
            font-size:50px;
            background:rgba(0,0,0,0.5);
            padding:20px;
            border-radius:15px;
        }

        .contenedor{
            width:90%;
            margin:auto;
            padding:40px 0;
        }

        .card{
            background:white;
            border-top:10px solid <?php echo $equipo["color"]; ?>;
            border-radius:15px;
            padding:30px;
            box-shadow:0px 5px 15px rgba(0,0,0,0.2);
            text-align:center;
            margin-bottom:40px;
        }

        .card h2{
            color:#145a32;
            margin-bottom:20px;
            font-size:35px;
        }

        .card p{
            margin:12px 0;
            font-size:18px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        }

        .mini-card{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0px 4px 10px rgba(0,0,0,0.2);
            transition:0.3s;
        }

        .mini-card:hover{
            transform:translateY(-8px);
        }

        .mini-card h3{
            color:#145a32;
            margin-bottom:15px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:30px;
            background:white;
            box-shadow:0px 4px 10px rgba(0,0,0,0.2);
        }

        table th{
            background:#145a32;
            color:white;
        }

        table th,
        table td{
            padding:15px;
            border:1px solid #ccc;
            text-align:center;
        }

        .contador{
            text-align:center;
            margin-top:50px;
        }

        .contador button{
            padding:15px 25px;
            border:none;
            background:#145a32;
            color:white;
            border-radius:10px;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;
        }

        .contador button:hover{
            background:#1e8449;
        }

        .contador h3{
            margin-top:20px;
            font-size:35px;
            color:#145a32;
        }

        footer{
            background:#145a32;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }

    </style>

</head>

<body>

<header>

    <h1>⚽ Fútbol World ⚽</h1>

    <p>
        Proyecto Web con PHP + Docker + Navegación
    </p>

</header>

<nav>

    <a href="?equipo=0">
        Real Madrid
    </a>

    <a href="?equipo=1">
        Barcelona
    </a>

    <a href="?equipo=2">
        Manchester City
    </a>

    <a href="?equipo=3">
        PSG
    </a>

</nav>

<section class="hero">

    <h2>
        Vive la Pasión del Fútbol
    </h2>

</section>

<div class="contenedor">

    <!-- Vista principal -->
    <section class="card">

        <h2>
            <?php echo $equipo["nombre"]; ?>
        </h2>

        <p>
            🌍 País:
            <?php echo $equipo["pais"]; ?>
        </p>

        <p>
            🏟️ Estadio:
            <?php echo $equipo["estadio"]; ?>
        </p>

        <p>
            🏆 Champions:
            <?php echo $equipo["titulos"]; ?>
        </p>

        <p>
            ⚡ <?php echo $equipo["descripcion"]; ?>
        </p>

    </section>

    <!-- Segunda vista -->
    <section>

        <h2 style="text-align:center;margin-bottom:30px;">
            Equipos Destacados
        </h2>

        <div class="grid">

            <div class="mini-card">
                <h3>Real Madrid</h3>
                <p>Club más exitoso de Europa.</p>
            </div>

            <div class="mini-card">
                <h3>Barcelona</h3>
                <p>Equipo histórico español.</p>
            </div>

            <div class="mini-card">
                <h3>Manchester City</h3>
                <p>Dominador de Inglaterra.</p>
            </div>

            <div class="mini-card">
                <h3>PSG</h3>
                <p>Potencia del fútbol francés.</p>
            </div>

        </div>

    </section>

    <!-- Tercera vista -->
    <section>

        <h2 style="text-align:center;margin-top:50px;">
            Tabla de Posiciones
        </h2>

        <table>

            <tr>
                <th>Posición</th>
                <th>Equipo</th>
                <th>Puntos</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Real Madrid</td>
                <td>85</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Barcelona</td>
                <td>80</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Manchester City</td>
                <td>78</td>
            </tr>

            <tr>
                <td>4</td>
                <td>PSG</td>
                <td>74</td>
            </tr>

        </table>

    </section>

    <!-- Cuarta vista -->
    <section class="contador">

        <h2>
            Contador de Goles
        </h2>

        <button onclick="sumarGol()">
            ⚽ Agregar Gol
        </button>

        <h3 id="goles">
            0
        </h3>

    </section>

</div>

<footer>

    <p>
        © 2026 Fútbol World | Proyecto Full Stack
    </p>

</footer>

<script>

    let goles = 0;

    function sumarGol(){

        goles++;

        document.getElementById("goles")
            .innerHTML = goles;
    }

</script>

</body>
</html>
```
