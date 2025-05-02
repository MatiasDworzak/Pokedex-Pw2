<?php
//
//require_once ("Database.php");
//require_once ("Pokemon.php");
//require_once ("logicaDb.php");
//session_start();
//echo $_SESSION['admin'];
//if($_SESSION['admin']==0){
//  header("Location:index.php");
//}
//?>
<!---->
<!---->
<!---->
<!---->
<!--<html>-->
<!--<header>-->
<!--  <title>Pokedex</title>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">-->
<!--</header>-->
<!--<body>-->
<!--<nav class="navbar bg-body-tertiary">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="index.php">-->
<!--            <img src="./uploads/Pokedex_tool_icon-icons.com_67529.png" alt="Bootstrap" width="50" height="40">-->
<!--        </a>-->
<!--           <h1>Soy el Admin</h1>-->
<!--        <button class="btn btn-outline-success" type="submit" ><a href="procesarLogout.php">Logout</a></button>-->
<!--            </form>-->
<!---->
<!--    </div>-->
<!--    <div class="container-fluid">-->
<!--        <form class="d-flex" role="search" >-->
<!--            <input class="form-control me-2" type="search" placeholder="Ingrese el nombre, tipo o numero de pokemon" aria-label="Search" style="width: 800px;" >-->
<!--            <button class="btn btn-outline-success" type="submit" style="width: 400px;">Quien es este pokemon?</button>-->
<!--        </form>-->
<!--    </div>-->
<!---->
<!--    <table class="table">-->
<!--        <thead>-->
<!--        <tr class="table-primary">-->
<!--            <th scope="col">Imagen</th>-->
<!--            <th scope="col">Tipo</th>-->
<!--            <th scope="col">Numero</th>-->
<!--            <th scope="col">Nombre</th>-->
<!--            <th scope="col">Descripcion</th>-->
<!--            <th scope="col">Abm</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!---->
<!--        --><?php
//        $pokemons = traerPokemonsDeLaDb();
//
//            foreach ($pokemons as $poke){
//
//                echo "<tr class='table-primary'>";
//            echo "<th scope='row'>.<img src='pokemons/".$poke->getImagen()."'> </th>";
//            echo "<td>".$poke->getNumeroPokedex()."</td>";
//            echo "<td>".$poke->getTipo()."</td>";
//            echo "<td>".$poke->getNombre()."</td>";
//            echo "<td>".$poke->getDescripcion()."</td>";
//            echo"<td>
//            <button class='btn btn-success' type='submit' ><a class='link-light' href='modificarPokemon.php'>Modificar</a></button>
//            <button class='btn btn-danger' type='submit' ><a class='link-light' href='eliminarPokemon.php'>Eliminar</a></button></td>";
//            echo "</tr>";
//            }
//        ?>
<!--        </tbody>-->
<!--    </table>-->
<!---->
<!--</body>-->
<!--</html>-->

<?php

require_once ("Database.php");
require_once ("Pokemon.php");
require_once ("logicaDb.php");
session_start();
if($_SESSION['admin']==0){
    header("Location:index.php");
}
?>

<html>
<head>
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="procesarLogout.php">
            <img src="./uploads/pokemon-logo2.png" alt="Bootstrap" width="50" height="50">
        </a>

        <div class="mx-auto">
            <h1 class="h4 m-0">Soy el Admin</h1>
        </div>

        <div>
            <a href="procesarLogout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-4">
    <form class="d-flex justify-content-center" role="search">
        <input class="form-control me-2 w-50" type="search" placeholder="Ingrese el nombre, tipo o número de Pokémon" aria-label="Search">
        <button class="btn btn-outline-success w-25" type="submit">¿Quién es este Pokémon?</button> <button class="btn btn-warning move-left-4" type="submit"><a>Agregar nuevo pokemon</a></button>
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
            <th scope="col">ABM</th>
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
            echo "<td>
                     <button class='btn btn-success'> <a class='link-light' href='modificarPokemon.php'>Modificar</a></button>
                      <button class='btn btn-danger'><a class='link-light' href='eliminarPokemon.php'>Eliminar</a></button>
                    </td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
</div >

</body>
</html>

