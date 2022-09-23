<?php
if(in_array ('pdo_mysql', get_loaded_extensions())) {
    $dsn = "mysql:host=localhost;dbname=loadmore";
    $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    try {
        $pdo = new PDO($dsn, "root", '', $opt);
    } catch (\PDOException $pdoe) {
    }
} else {
    echo "PHP extension for MySQL is not set".PHP_EOL;
    exit(1);
}
?>