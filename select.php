<?php



// untuk melihat hasil kita menggunakan bind_result

$host = 'localhost';
$user = 'root';
$pass = '123';
$db = 'php_mysql_oop_sekolakoding';

$mysqli = new Mysqli($host, $user, $pass, $db);

$nama_param = 'cirebon';

$murids = $mysqli->prepare("SELECT `nama`, `alamat` FROM murids WHERE alamat=?");
$murids->bind_param('s', $nama_param );
$murids->execute();

$murids->bind_result($nama, $alamat);

while($murids->fetch()) {
    echo $nama . " - " . $alamat . "<br>";
}


$mysqli->close();