<?php

/*@author: Sajal Khadgi
. configuration for comment and comment table database
*/

define( "DB_DSN", "mysql:dbname=sajalgre_ear_training" );
define( "DB_USERNAME", "sajalgre_sajal" );
define( "DB_PASSWORD", "P@ssword1234" );

try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to database!';
} catch(PDOException $e) {
    echo $e->getMessage();
}
