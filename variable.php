<?php

// Récupération des variables à l'aide du client MySQL

$sqlUsers = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlUsers);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$sqlQuery = "SELECT * FROM recipes ORDER BY title";
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();