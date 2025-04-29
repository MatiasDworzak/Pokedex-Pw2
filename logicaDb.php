<?php
require_once ("Database.php");
require_once ("Pokemon.php");

function traerPokemonsDeLaDb()
{
    $db = new Database();
    $resultado = $db->query("SELECT * FROM pokemons");
    $arrayPokemons = [];
    foreach ($resultado as $entry) {

        $num = $entry['numero_pokedex'];
        $name = $entry['nombre'];
        $type = $entry['tipo'];
        $des = $entry['descripcion'];

        $pokemon = new Pokemon($num, $name, $type, $des);
        $arrayPokemons[$num] = $pokemon;
    }

    return $arrayPokemons;
//    foreach ($arrayPokemons as $poke){
//        echo $poke->getNumeroPokedex();
//        echo $poke->getNombre();
//        echo "<br>";
//    }
} ?>
