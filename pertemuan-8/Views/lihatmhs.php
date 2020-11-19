<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../Controller/Mahasiswa.php";
        $mhs = new Mahasiswa("001","Andi",20,2017,"Informatika");

    ?>
    <table>
        <tbody>
            <tr>
                <td>NIM : <td>
                <td><?php echo $mhs->get_nim()?><td>
            </tr>
            <tr>
                <td>Nama : <td>
                <td><?php echo $mhs->get_nama()?><td>
            </tr>
            <tr>
                <td>Umur : <td>
                <td><?php echo $mhs->get_umur()?><td>
            </tr>
            <tr>
                <td>Angkatan : <td>
                <td><?php echo $mhs->get_angkatan()?><td>
            </tr>
            <tr>
                <td>Jurusan : <td>
                <td><?php echo $mhs->get_jurusan()?><td>
            </tr>
        </tbody>
    </table>
</body>
</html>