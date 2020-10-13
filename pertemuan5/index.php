<?php
    // membuat database di phpmyadmin
    // menyambungkan database
    // host,user,password,database
    // '127.0.0.1', root,' ', nama
$link = mysqli_connect('localhost', 'root', 'root', 'sekolah' );

if (!$link) {
    die('ada error' . mysqli_connect_error());
    
}

$query = "CREATE DATABASE sekolahkoding";


if (mysqli_query($link, $query)){
    echo 'database berhasil dibuat';

}else {
    echo 'gagal!';
}



// menutup koneksi
mysqli_close($link);

?>