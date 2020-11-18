<?php

$password = $_POST['password'];
$submit = $_POST['submit'];

$correctPass = "ref";

if($password !== $correctPass) {
    header("Location: login.html");
} else {
    header("Location: index.html");
}