<?php
if (isset($_POST['tombolSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "arta" && $password == "123"){
            echo "Sukses";
        }
        else {
            echo "username / password ada yg salah";
        }
}
else {
    echo "Mohon maaf cek login tidak bisa diakses langsung";

}
?>