<?php

$servername ="50.87.144.129";
$dBUsername = "zachimes_ZachH";
$dBPassword = "zach12";
$dBName = "zachimes_Pl_DB";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn)
{
	die("Connection failed: ".mysqli_error());
}

