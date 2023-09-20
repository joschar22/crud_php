ph
<?php
$servername = 'localhost';
try {
    $base = new PDO("mysql:host=$servername;dbname=pruebas", "root", "");


    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");

    echo "Connected successfully";
} catch (Exception $e) {
    
    //echo "Connection failed: " . $e->getMessage();
    echo "Linea de error ". $e->getLine();
    die('Error'.$e->getMessage());
}


?>