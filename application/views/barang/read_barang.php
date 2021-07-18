<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Read data -->
<p>
<?php
foreach ($barang as $brg) :
echo $brg -> id_barang;
endforeach;
?> 

<a href="<?= base_url("Data_barang/create_barang")?>">Tambah barang</a>
<a href="<?= base_url("Data_barang/create_barang")?>">Edit barang</a>
</p>


</body>
</html>

