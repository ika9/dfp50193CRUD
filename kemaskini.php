<?php
    require 'conn.php';
    $id_album
 = $_GET['id_album'];
    $sql = "SELECT * FROM jenisalbum WHERE id_album
 = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id_album
);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemas Kini</title>
</head>
<body>
<form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="id_album" value="<?php echo $row->id_album; ?>"/>
        <table>
            <tr>
                <td><label for="nama_album">Nama Album</label></td>
                <td>
                    <input id="nama_album" type="text" step="any" name="nama_album"
                           value="<?php echo $row->nama_album; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="harga_album">Harga Album</label></td>
                <td>
                    <input id="harga_album" type="number" step="any" name="harga_album"
                           value="<?php echo $row->harga_album; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>