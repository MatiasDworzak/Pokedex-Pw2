<?php


class Database{

    private $database;
    public function __construct()
    {

        $config = parse_ini_file("config.ini");

        $this->database = new Mysqli(
            $config["host"],
            $config["user"],
            $config["pass"],
            $config["db"]
        );

        if ($this->database->connect_error) {
            die("Error de conexión: " . $this->database->connect_error);
        }
    }

    public function __destruct(){
        $this->database->close();
    }
    public function query($sql) {
        //consultar
        $datos = $this->database->query($sql);

       return $datos->fetch_all(MYSQLI_ASSOC);
    }

}