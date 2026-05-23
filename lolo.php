<?php include("data.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Fútbol World</title>

    <style>

        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
        }

        header{
            background:#145a32;
            color:white;
            text-align:center;
            padding:20px;
        }

        nav{
            background:#0b6623;
            text-align:center;
            padding:15px;
        }

        nav a{
            background:white;
            padding:10px 15px;
            margin:5px;
            display:inline-block;
            text-decoration:none;
            border-radius:8px;
            color:#145a32;
            font-weight:bold;
        }

        .card{
            width:350px;
            margin:40px auto;
            background:white;
            padding:25px;
            border-radius:12px;
            box-shadow:0px 4px 10px rgba(0,0,0,0.2);
            border-top:8px solid #145a32;
            text-align:center;
        }

        footer{
            text-align:center;
            padding:15px;
            background:#145a32;
            color:white;
            margin-top:40px;
        }

    </style>

</head>

<body>

<header>
    <h1>⚽ Fútbol World ⚽</h1>
</header>

<nav>

    <a href="?equipo=0">Real Madrid</a>
    <a href="?equipo=1">Barcelona</a>
    <a href="?equipo=2">Manchester City</a>

</nav>

<div class="card">

    <h2><?php echo $equipo["nombre"]; ?></h2>

    <p><b>País:</b> <?php echo $equipo["pais"]; ?></p>

    <p><b>Estadio:</b> <?php echo $equipo["estadio"]; ?></p>

    <p><b>Títulos:</b> <?php echo $equipo["titulos"]; ?></p>

    <p><?php echo $equipo["descripcion"]; ?></p>

</div>

<footer>
    © 2026 Fútbol World
</footer>

</body>
</html>
