<?php

$dBserverName= "localhost";
$dBUsername= "root";
$dBPassword= "";
$dBName= "projekat";

$conn = mysqli_connect($dBserverName,$dBUsername,$dBPassword,$dBName);

if(!$conn)
    die("Connetction error: " . mysqli_connect_error());