<?php

require_once ("Database.php");
require_once ("Pokemon.php");
require_once ("logicaDb.php"); ?>




<html>
<header>
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</header>
<body>
<nav class="navbar navbar-expand-lg bg-warning px-3">
    <div class="container-fluid">
        <div class="row w-100 align-items-center">

            <div class="col-4 col-md-3 text-start">
                <a class="navbar-brand" href="index.php">
                    <img src="./uploads/pokemon-logo2.png" alt="Logo" width="50" height="50">
                </a>
            </div>

            <div class="col-4 col-md-6 text-center my-2 my-md-0">
                <img src="uploads/pokemonnn.png" class="navbar-brand" width="150" height="70">
            </div>

            <div class="col-4 col-md-3 text-end">
                <form class="d-flex flex-column flex-md-row justify-content-end" name="login" method="post" action="procesarLogin.php">
                    <input class="form-control me-md-2 mb-2 mb-md-0" type="text" name="username" placeholder="Username">
                    <input class="form-control me-md-2 mb-2 mb-md-0" type="password" name="password" placeholder="Password">
                    <button class="btn btn-outline-success" type="submit">Ingresar</button>
                </form>
            </div>

        </div>
    </div>
</nav>


<div class="container my-4">
    <form class="d-flex justify-content-center" role="search">
        <input class="form-control me-2 w-50" type="search" placeholder="Ingrese el nombre, tipo o número de Pokémon" aria-label="Search">
        <button class="btn btn-outline-success w-25" type="submit">¿Quién es este Pokémon?</button>
    </form>
</div>
<div class="container">
    <table class="table table-striped text-center">
        <thead class="table-warning">
        <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Tipo</th>
            <th scope="col">Número</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $pokemons = traerPokemonsDeLaDb();

        foreach ($pokemons as $poke){
            echo "<tr>";
            echo "<td><img src='pokemons/".$poke->getImagen()."' width='50'></td>";
            echo "<td><img src='pokemons/tipo/".$poke->getTipo().".png'></td>";
            echo "<td>".$poke->getNumeroPokedex()."</td>";
            echo "<td>".$poke->getNombre()."</td>";
            echo "<td>".$poke->getDescripcion()."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>




