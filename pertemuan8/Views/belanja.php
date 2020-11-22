<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
    <?php
    include "../controller/Produk.php";
    $mhs = new Belanja ("1", "1001", "Kaleng", 20, 100000);
    ?>
    <table>
        <tbody>
            <tr>
                <td>Qty :</td>
                <td><?php echo $mhs->get_qty() ?></td>
            </tr>
            <tr>
                <td>Kode Produk :</td>
                <td><?php echo $mhs->get_kodeproduk()?></td>
            </tr>
            <tr>
                <td>Nama Produk :</td>
                <td><?php echo $mhs->get_namaproduk() ?></td>
            </tr>
            <tr>
                <td>Diskon :</td>
                <td><?php echo $mhs->get_diskon()?></td>
            </tr>
            <tr>
                <td>Harga :</td>
                <td><?php echo $mhs->get_harga()?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>