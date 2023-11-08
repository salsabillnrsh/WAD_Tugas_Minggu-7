<?php   
require 'Function.php';
$toko = query("SELECT * FROM pendataan")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pendataan Obat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body>
    <h1 align = "Center"> Pendataan Obat Apotek K24</h1>
    <h4>Daftar Obat Apotek K24</h4>

    <table align ="Center" "border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Kode obat</th>
            <th>Nama Obat</th>
            <th>Jenis Obat</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($toko as $row) : ?>
        <tr>
            <td>1</td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["Kode Obat"]; ?>ZGV0001</td>
            <td><?= $row["Nama Obat"]; ?>Vitamin Zegavit</td>
            <td><?= $row["Jenis Obat"]; ?>Kapsul</td>
            <td><?= $row["Harga Jual"]; ?>35000</td>
            <td><?= $row["Stok"]; ?>250</td>
            <td>
                <a href="Update.phpid=<?= $row["id"]; ?>" >Ubah</a> 
                <a href="Hapus.phpid=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["Kode Obat"]; ?>AFD0090</td>
            <td><?= $row["Nama Obat"]; ?>Actifed Batuk Kering</td>
            <td><?= $row["Jenis Obat"]; ?>Sirup</td>
            <td><?= $row["Harga Jual"]; ?>75000</td>
            <td><?= $row["Stok"]; ?>50</td>
            <td>
                <a href="Update.phpid=<?= $row["id"]; ?>" >Ubah</a> 
                <a href="Hapus.phpid=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["Kode Obat"]; ?>ZGV0001</td>
            <td><?= $row["Nama Obat"]; ?>Vitamin Imboost</td>
            <td><?= $row["Jenis Obat"]; ?>Tablet</td>
            <td><?= $row["Harga Jual"]; ?>90000</td>
            <td><?= $row["Stok"]; ?>120</td>
            <td>
                <a href="Update.phpid=<?= $row["id"]; ?>" >Ubah</a> 
                <a href="Hapus.phpid=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["Kode Obat"]; ?>TRM00031</td>
            <td><?= $row["Nama Obat"]; ?>Thrombophob</td>
            <td><?= $row["Jenis Obat"]; ?>Salep</td>
            <td><?= $row["Harga Jual"]; ?>50000</td>
            <td><?= $row["Stok"]; ?>20</td>
            <td>
                <a href="Update.phpid=<?= $row["id"]; ?>" >Ubah</a> 
                <a href="Hapus.phpid=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["Kode Obat"]; ?>MSB00015</td>
            <td><?= $row["Nama Obat"]; ?>Masker Sensi Duckbill</td>
            <td><?= $row["Jenis Obat"]; ?>Lainnya</td>
            <td><?= $row["Harga Jual"]; ?>20000</td>
            <td><?= $row["Stok"]; ?>20</td>
            <td>
                <a href="Update.phpid=<?= $row["id"]; ?>" >Ubah</a> 
                <a href="Hapus.phpid=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <form action="" method="post" enctype="multipart/form-data">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body> 
