<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../Controller/Produk.php";
        $blj = new Produk("001","Sabun ABC",5,50,5000);

    ?>
    <table>
        <tbody>
            <tr>
                <td>Kode Produk: <td>
                <td><?php echo $blj->get_kodeproduk()?><td>
            </tr>
            <tr>
                <td>Nama Produk: <td>
                <td><?php echo $blj->get_namaproduk()?><td>
            </tr>
            <tr>
                <td>Qty: <td>
                <td><?php echo $blj->get_qty()?><td>
            </tr>
            <tr>
                <td>Diskon: <td>
                <td><?php echo $blj->get_diskon()?> %<td>
            </tr>
            <tr>
                <td>Harga: <td>
                <td><?php echo $blj->get_harga()?><td>
            </tr>
        </tbody>
    </table>
</body>
</html>