<?php
define('HOSTNAME', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME','signupusers');
try{

$conn = mysqli_connect(HOSTNAME,DBUSER,DBPASS,DBNAME);
}catch(mysqli_sql_exception){
    echo 'not connected';
}

?>