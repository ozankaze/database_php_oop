<?php

$host = 'localhost';
$user = 'root';
$pass = '123';
$db = 'php_mysql_oop_sekolakoding';

$mysqli = new Mysqli($host, $user, $pass, $db);

if( $mysqli->connect_errno ) {
    echo 'gagal bang ada yang error' . $mysqli->connect_error;
}

// multi query
// $sql = "INSERT INTO murids (`nama`, `alamat`) VALUES ('seena', 'jepara');";
// $sql = "INSERT INTO murids (`nama`, `alamat`) VALUES ('budi', 'cianjur');";

// if( $mysqli->query($sql) === true ) {
//     echo 'berhasil';
// } else {
//     echo 'gagal';
// }

// prepare statement
// $statement = $mysqli->prepare('INSERT INTO murids (`nama`, `alamat`) VALUES (?. ?)');
// $statement->bind_param('ss', $nama, $alamat);

// $nama = "mas mase";
// $alamat = "utara";
// $statement->execute(); 


$mysqli->close();