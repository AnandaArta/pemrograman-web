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

//memasukkan data di database
// $query = "DELETE FROM murid WHERE id=2";
// $query = "DELETE FROM murid WHERE id BETWEEN 4 AND 6";


//mengedit data
// $query = "UPDATE murid SET nama='ananda arta' WHERE id=3";
$query = "UPDATE murid SET nama='ananda arta', umur=21 WHERE id=3";


    if(mysqli_multi_query($link, $query)){
        echo 'Berhasil!';
    }


//menutup koneksi
mysqli_close($link);

?>