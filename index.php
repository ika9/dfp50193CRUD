<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Album</title>
</head>

<body>
<a href="register.php">Register</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>ID</th>
            <th>Nama Album</th>
            <th>Harga Album</th>
            <th>Tindakan</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM jenisalbum";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td>$
                    <td><?php echo $row->id_album; ?></td>
                    <td><?php echo $row->nama_album; ?></td>
                    <td>RM <?php echo $row->harga_album; ?></td>
                    <td>
                        <a href="kemaskini.php?id_album=<?php echo $row->id_album; ?>">Edit</a>
                        |
                        <a href="padam.php?id_album=<?php echo $row->id_album; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                        |
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

</body>

</html>