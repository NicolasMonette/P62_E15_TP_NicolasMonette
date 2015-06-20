<?php
session_start();
session_destroy();
header("Location: liste_equipe.php");
die();