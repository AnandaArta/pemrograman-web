<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>
    <?php
    $status = 2; //Tidak Sukses 
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php";
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks'];
        // buat koneksi
        $strsql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
            VALUES ('$kode', '$nama', '$kategori', '$sks')";
        $runSQL = mysqli_query($conn, $strsql);
        if ($runSQL) {
            $status = 1; //Sukses
        } else {
            $status = 0; //tidak sukses 
        }
    }
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah versi 2 (dgn modal)</h2>
        


        <!--- INI MODAL --->

        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class ="modal-content">
                    <!--- ini header --->
                    <div class="modal-header">
                        <h4 class="modal-title"> Konfirmasi Pendaftaran </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"> <b> Kode Mata Kuliah </b> </div>
                                <div class="col-6"> <span id="kodemk"></span> </div>
                            </div>
                            <div class="row">
                                <div class="col-6"> <b> Nama Mata Kuliah </b> </div>
                                <div class="col-6"> <span id="namamk"></span> </div>
                            </div>
                            <div class="row">
                                <div class="col-6"> <b> Kategori Mata Kuliah </b> </div>
                                <div class="col-6"> <span id="kat"></span> </div>
                            </div>
                            <div class="row">
                                <div class="col-6"> <b> Jumlah SKS </b> </div>
                                <div class="col-6"> <span id="jsks"></span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Edit</button>
                    <button type="submit" class="btn btn-primary" name="tombolSubmit" value="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>  

        <form method="post" action="registrasi_mk2.php">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input id="kode" class="form-control" type="text" name="kode">
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input id="nama" class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Kategori Mata Kuliah</label>
                <select id="kategori" class="form-control" type="text" name="kategori">
                    <option value="pilih"> Pilih </option>
                    <option value="MKMA"> Mata Kuliah Major </option>
                    <option value="MKMI"> Mata Kuliah Minor </option>
                    <option value="MKPIL"> Mata Kuliah Pilihan </option>
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah SKS</label>
                <input id="sks" class="form-control" type="text" name="sks">
            </div>
            <input class="btn btn-primary" type="button" id="tombol" value="Simpan">
    </div>
    </form>

    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
    $(document) .ready (function(){
        $('#tombol') .click(function(){
            //ambil data dari form
            const kode = $('#kode'). val();
            const nama = $('#nama'). val();
            const kategori = $('#kategori'). val();
            const sks = $('#sks'). val();

            $('#kodemk').text(kode);
            $('#namamk').text(nama);
            $('#kat').text(kategori);
            $('#jsks').text(sks);


            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>

</body>
</html>