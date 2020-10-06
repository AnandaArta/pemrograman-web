<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <style>
        .inputan{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit]{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        .tombol {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<p> Registrasi </p>
    <form method="post" action="konfirmasi.php">
        <label> Username</label>
        <input class="inputan" type="text" name="username">
        <label> Password</label>
        <input class="inputan" type="password" name="password">
        <label> nama depan</label>
        <input class="inputan" type="namadepan" name="namadepan">
        <label> nama belakang</label>
        <input class="inputan" type="namabelakang" name="namabelakang">
        <label> email</label>
        <input class="inputan" type="email" name="email">
        <input type="submit" name="tombolSubmit" value="Login">
        <input type="submit" name="tombolkonfirmasi" value="Daftar">

    </form>
</body>
</html>