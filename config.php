<?php
$user = "root";
$pass = "";
$host = "localhost";
$dbname = "pagination-php";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


function totalRows(){
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM posts";
    $posts = $conn->query($sql)->fetch();
    return $posts['total'];
}

?>