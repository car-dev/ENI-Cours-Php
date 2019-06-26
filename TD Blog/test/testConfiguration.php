<?php
include '../config/autoload.php';

$connectionString = configuration::get('connectionString');
$login = configuration::get('login');
$password = configuration::get('password');

echo "Chaine de connexion : $connectionString - $login - $password";

