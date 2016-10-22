<?php
/**
 * Created by PhpStorm.
 * User: jaykay12
 * Date: 22/10/16
 * Time: 3:18 PM
 */

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
//echo $dbhost." , ".$dbport." , ".$dbuser." , ".$dbpwd." , ".$dbname;
$conn = new mysqli($dbhost, "root", "jalaz","HosAppointmentSys");

?>
