<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'conn.php';

$nama_album = $_POST['nama_album'];
$harga_album = $_POST['harga_album'];


$sql = "INSERT INTO jenisalbum (nama_album, harga_album) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si',$nama_album, $harga_album);
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
?>
</body>
</html>