<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "rtlotesting";

try {
    $con = mysqli_connect($db_hostname, $db_username, $db_password);
} catch (Exception $e) {
    echo "<pre>";
    echo $e->getMessage() . "<br>";
    echo "FAILED: " . mysqli_error($con) . "<br>";
    echo "</pre>";
}
$result = mysqli_select_db($con, $db_database);
?>