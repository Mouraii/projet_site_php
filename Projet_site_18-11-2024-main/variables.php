<?php

// Retrieving Variables Using the MySQL Client
$employeesStatement = $mysqlClient->prepare('SELECT * FROM employees');
$employeesStatement->execute();
$employees = $employeesStatement->fetchAll();

// $employees = [
//     [
//         'name' => 'Alice',
//         'departement' => 'IT',
//         'experiance' => 5,
//     ],
//     [
//         'name' => 'Maxime',
//         'departement' => 'Finance',
//         'experiance' => 2,
//     ],
//     [
//         'name' => 'Antoine',
//         'departement' => 'RH',
//         'experiance' => 4,
//     ],
// ];