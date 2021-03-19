<?php


$login = $_POST['login'];
$password = $_POST['password'];


if(($login=='admin')and($password=='123')) {
    echo 'HI';
}
else {
    echo 'GOODBYE';
}


