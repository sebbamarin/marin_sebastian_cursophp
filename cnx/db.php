<?php

if ($_SERVER['HTTP_HOST'] === 'cursophp.test') {
  $cnx = mysqli_connect("localhost", "root", "", "cursophp") or exit("Error en la conexion");
} else {
  $cnx = mysqli_connect("localhost", "c2061385_cursoph", "50vaDUsagi", "c2061385_cursoph") or exit("Error en la conexion");
}
