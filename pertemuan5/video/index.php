<?php
// membuat database di phpadmin

//menyambungkan database
//host, user, root,'', nama
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "sekolah";

$link = mysqli_connect($namaServer, $username, $password, $namaDB);

//menguji eror
if (!$link){
    die('ada error' . mysqli_connect_error());
}

// //membuat database
// $query = "CREATE DATABASE sekolahkoding";

// if (mysqli_query($link, $query)){
//     echo 'database berhasil dibuat';
// }
// else {
//     echo 'gagal!';
// }

//memasukkan data di database
$query = "INSERT INTO murid (nama, umur, alamat)
            VALUES ('arta', 22, 'tangsel');";


$query .= "INSERT INTO murid (nama, umur, alamat)
VALUES ('ananda', 22, 'bsd')";

    if(mysqli_multi_query($link, $query)){
        echo 'Berhasil!';
    }




//menutup koneksi
mysqli_close($link);

?>