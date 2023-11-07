<?php 

$conn = mysqli_connect('localhost', 'root', '', 'Apotek'); 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function Tambah($data) {
    global $conn;

    $kodeobat = htmlspecialchars($data["Kode Obat"]);
    $namaobat = htmlspecialchars($data["Nama Obat"]);
    $jenisobat = htmlspecialchars($data["Jenis Obat"]);
    $hargajual = htmlspecialchars($data["Harga Jual"]);
    $stok = htmlspecialchars($data["stok"]);
    $aksi = htmlspecialchars($data["aksi"]);

    $query = "INSERT INTO Pendataan
        VALUES
        ('','$kodeobat','$namaobat','$jenisobbat','$hargajual','$stok','$aksi')
        ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function Hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM Pendataan WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function Update($data) {
    global $conn;

    $id = $data["id"];
    $kodeobat = htmlspecialchars($data["Kode Obat"]);
    $namaobat = htmlspecialchars($data["Nama Obat"]);
    $jenisobat = htmlspecialchars($data["Jenis Obat"]);
    $hargajual = htmlspecialchars($data["Harga Jual"]);
    $stok = htmlspecialchars($data["stok"]);
    $aksi = htmlspecialchars($data["aksi"]);

    $query = "UPDATE Pendataam SET
            Kode obat = '$kodeobat',
            Nama Obat = '$namaobat',
            Jenis Obat = '$jenisobat',
            Harga Jual = '$hatgajual',
            Stok = '$stok',
            Aksi = '$aski'
            WHERE id = $id
            ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);   
}
?>
