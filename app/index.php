<?php

try {
    $dbh = new PDO('mysql:host=mariadb;dbname=test', 'root', '');
    foreach($dbh->query('show databases;') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
