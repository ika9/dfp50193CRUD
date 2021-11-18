<?php
require 'conn.php';

$id_album= $_GET['id_album'];

$sql = "DELETE FROM jenisalbum WHERE id_album = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_album);
$stmt->execute();

header('location: index.php');