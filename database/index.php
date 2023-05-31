<?php
define( "DB_DSN", "mysql:dbname=sajalgre_ear_training" );
define( "DB_USERNAME", "sajal" );
define( "DB_PASSWORD", "P@ssword1234" );

try {
    //Instantiate a database object
    $dbh = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    echo 'Connected to database!';
}
catch(PDOException $e) {
    echo $e->getMessage();
}
