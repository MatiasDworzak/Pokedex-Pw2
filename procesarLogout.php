<?php
session_start();
session_unset();
session_destroy();
$_SESSION['admin']=false;
header("Location:index.php");
