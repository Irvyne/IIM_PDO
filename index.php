<?php
require 'config/config.php';

try {
    $dbh = new PDO($config['driver'].':dbname='.$config['dbname'].';host='.$config['host'], $config['username'], $config['password']);
    echo 'Connection succeed !';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
