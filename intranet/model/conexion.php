<?php
//coneccion base de datos 
define('DB_SERVER', 'localhost');//Localhost
define('DB_USERNAME', 'root');//cesfamsa_cesfamsabat
define('DB_PASSWORD', '');//yy_E-5vVPz%y
//coneccion a nuestra base de datos
define('DB_DATABASE', 'cesfamsa_db_cesfamsabat');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>