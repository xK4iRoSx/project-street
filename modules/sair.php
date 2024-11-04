<?php
session_start();
unset ($_SESSION['emailUsuario']);
unset ($_SESSION['senhaUsuario']);
unset ($_SESSION['nomeUsuario']);
unset ($_SESSION['idUsuario']);

header('location:../src/index.php');