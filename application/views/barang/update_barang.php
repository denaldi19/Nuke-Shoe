
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Barang</h1>
<form class="user" action="<?= base_url('Data_barang/update_barang') ?>" method="POST" enctype="multipart/form-data">
<?php
    foreach ($barang as $brg) :
?>                                
<input type="text" name="id_barang" value="<?= $brg->id_barang?>"><br>
                                <input type="text" name="nama_barang" value="<?= $brg->nama_barang?>"><br>
                                <input type="text" name="ukuran" value="<?= $brg->ukuran?>"><br>
                                <input type="text" name="id_merek" value="<?= $brg->id_merek?>"><br>
                                <input type="text" name="kuantitas" value="<?= $brg->kuantitas?>"><br>
                                <input type="text" name="harga_beli" value="<?= $brg->harga_beli?>"><br>
                                <input type="text" name="harga_jual" value="<?= $brg->harga_jual?>"><br>
                                
                                <button type="submit" class="btn btn-primary ">Daftar</button>

                            </form>

<?php
      endforeach;
?>
</body>
</html>