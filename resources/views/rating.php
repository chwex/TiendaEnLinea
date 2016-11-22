<?php

/*
 *  Simple Rating System using CSS, JQuery, AJAX, PHP, MySQL
 *  Downloaded from Devzone.co.in
 */

$ipaddress = md5($_SERVER['REMOTE_ADDR']); // here I am taking IP as UniqueID but you can have user_id from Database or SESSION

$servername = "104.236.41.123"; // Server details
$username = "root";
$password = "number1!";
$dbname = "calificaciones";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Unable to connect Server: " . $conn->connect_error);
}

if (isset($_POST['valor']) && !empty($_POST['valor'])) {

    $rate = $conn->real_escape_string($_POST['valor']);
// check if user has already rated
    $sql = "SELECT `idcalificacion` FROM `calificaciones` WHERE `idusuario`='" . $ipaddress . "'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo $row['idcalificacion'];
    } else {

        $sql = "INSERT INTO `calificaciones` ( `valor`, `idusuario`) VALUES ('" . $rate . "', '" . $ipaddress . "'); ";
        if (mysqli_query($conn, $sql)) {
            echo "0";
        }
    }
}
$conn->close();
?>