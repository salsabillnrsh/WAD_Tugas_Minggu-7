<?php
require 'functions.php';

$id = $_GET["id"];
$tes = query("SELECT * FROM Pendataan where id = $id")[0];

if (isset($_POST["submit"])){
    if(Update($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'toko.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'toko.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Ubah Data Apotek K24</title>
</head>
<body>
    <h1>Ubah Data Obat</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tes["id"]; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Obat</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Kode Obat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Obat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga Obat</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga Obat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok Obat </label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Stok Obat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi Pemakaian</label>
            <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Obat</label>
            <select name="status" id="">
                <option>Sirup</option>
                <option>Tablet</option>
                <option>Kapsul</option>
                <option>Salep</option>
                <option>Lainya</option>

            </select>
        </div>
        <div>
            <button name="submit" class="btn btn-primary" type="submit">Submit</button>
        </div> 
    </form>
</body>
</html>