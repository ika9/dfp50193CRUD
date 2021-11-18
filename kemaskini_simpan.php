<?php
require 'conn.php';

$id_album = $_POST['id_album'];
$nama_album = $_POST['nama_album'];
$harga_album = $_POST['harga_album'];


$sql = "UPDATE jenisalbum SET nama_album = ?, harga_album = ? WHERE id_album = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sii', $nama_album, $harga_album,$id_album);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama Album tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}