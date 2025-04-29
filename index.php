<?php
require_once ("Database.php");
require_once ("Pokemon.php");
require_once ("logicaDb.php");
?>




<html>
<header>
  <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</header>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./uploads/Pokedex_tool_icon-icons.com_67529.png" alt="Bootstrap" width="50" height="40">
        </a>
            <img src="uploads/Pokemon_Logo.png" class="navbar-brand " width="150" height="70">
            <form class="d-flex" name="login" method="post">
                <input class="form-control me-2" type="email" placeholder="Mail" >
                <input class="form-control me-2" type="password" placeholder="Password" >
                <button class="btn btn-outline-success" type="submit">Ingresar</button>
            </form>

    </div>
    <div class="container-fluid">
        <form class="d-flex" role="search" >
            <input class="form-control me-2" type="search" placeholder="Ingrese el nombre, tipo o numero de pokemon" aria-label="Search" style="width: 800px;" >
            <button class="btn btn-outline-success" type="submit" style="width: 400px;">Quien es este pokemon?</button>
        </form>
    </div>


</body>
</html>
