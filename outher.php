<?php

$host = 'localhost';
$user = 'root';
$pass = '123';
$db = 'php_mysql_oop_sekolakoding';

$mysqli = new Mysqli($host, $user, $pass, $db);

if( $mysqli->connect_errno ) {
    echo 'gagal bang ada yang error' . $mysqli->connect_error;
}

// menghapus data
// $sql = "DELETE FROM murids WHERE nama='fauzan'";


// mengedit data
$sql = "UPDATE murids SET nama='fauzan', alamat='cirebon' WHERE nama='seena'";

if( $mysqli->query($sql) === true ) {
    echo 'berhasil';
} else {
    echo 'gagal delete';
}


$mysqli->close();