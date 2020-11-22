<?php
class Produk {
    //Property
    private $kodeproduk;
    private $namaproduk;
    private $qty;
    private $diskon;
    private $harga;

    //Controller
    function Produk($kodeproduk,$namaproduk,$qty,$diskon,$harga) {
        $this->kodeproduk = $kodeproduk;
        $this->namaproduk = $namaproduk;
        $this->qty = $qty;
        $this->diskon = $diskon;
        $this->harga = $harga;
    }
    function set_kodeproduk($kodeproduk) {
        $this->set_kodeproduk = $kodeproduk;
    }
    function get_kodeproduk() {
       return $this->kodeproduk;
    }
    function set_namaproduk($namaproduk) {
        $this->set_namaproduk = $namaproduk;
    }
    function get_namaproduk() {
       return $this->namaproduk;
    }
    function set_qty($qty) {
        $this->set_qty = $qty;
    }
    function get_qty() {
       return $this->qty;
    }
    function set_diskon($diskon) {
        $this->set_diskon = $diskon;
    }
    function get_diskon() {
       return $this->diskon;
    }
    function set_harga($harga) {
        $this->set_harga = $harga;
    }
    function get_harga() {
       return $this->harga;
    }
}
$oProduk = new Produk("001","Sabun",10,0.1,10000);
$jumlah = 3;
$total_non_diskon = $jumlah * $oProduk->get_harga();
$total_diskon = $total_non_diskon * $oProduk->get_diskon();
$total_dg_diskon  = $total_non_diskon - $total_diskon;
?>
<h3>Detail Belanja</h3>
<table>
    <tbody>
        <tr>
            <td>Kode Produk:</td>
            <td><?php echo $oProduk->get_kodeproduk() ?></td>
        <tr>
        <tr>
            <td>Nama Produk:</td>
            <td><?php echo $oProduk->get_namaproduk() ?></td>
        <tr>
        <tr>
            <td>Jumlah:</td>
            <td><?php echo $jumlah ?></td>
        <tr>
        <tr>
            <td>Diskon:</td>
            <td><?php echo $oProduk->get_diskon() ?></td>
        <tr>
        <tr>
            <td>Total Belanja Sebelum Diskon:</td>
            <td><?php echo $total_non_diskon ?></td>
        <tr>
        <tr>
            <td>Total Diskon:</td>
            <td><?php echo $total_diskon ?></td>
        <tr>
        <tr>
            <td>Total Belanja Setelah Diskon:</td>
            <td><?php echo $total_dg_diskon ?></td>
        <tr>
    </tbody>
</table>