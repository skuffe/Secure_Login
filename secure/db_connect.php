<?php 

define("HOST", "localhost"); // The host you want to connect to.
define("USER", "secure_login"); // The database username.
define("PASSWORD", "QWK4n3C3pcBuaQt5"); // The database password. 
define("DATABASE", "secure_login"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.


;?>
