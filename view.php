<?php
require "./example.php";

$example=new Example();
$example->add();
echo "<br>";
$example->hello();
echo "<br>";
echo $example->name;
echo "<br>";
echo $example->city;