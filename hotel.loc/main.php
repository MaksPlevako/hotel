<?php

$connect = mysqli_connect('localhost','root','root','hotel');

$name = $_POST['name'];
$phone = $_POST['phone'];
$arrival = $_POST['arrival_date'];
$departure = $_POST['departure_date'];
$people = $_POST['people'];
$nomer = $_POST['nomer'];

mysqli_query($connect,"INSERT INTO `clients` (`id`,`name`,`phone`,`date_settlement`,`date_eviction`,`number_of_guests`,`nomer`) VALUES ('','$name','$phone','$arrival','$departure','$people','$nomer')");

header("Location: welcome.html");
?>