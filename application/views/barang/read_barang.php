<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Read data -->


    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3" style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $brg->nama_barang ?></td>
                <td><?= $brg->ukuran ?></td>
                <td><?= $brg->id_warna ?></td>
                <td><?= $brg->id_merek ?></td>
                <td><?= $brg->kuantitas ?></td>
                <td>
                    <?= anchor(base_url('Data_barang/detail_barang/') . $brg->id_barang, '<div class="btn btn-success btn-sm ">Detail</div>') ?>
                </td>
                 <td>
                    <?= anchor(base_url('/Data_barang/preupdate/') . $brg->id_barang, ' <div class="btn btn-primary btn-sm">Edit</div>'); ?>
                </td>
                <td>
                    <?= anchor(base_url('Data_barang/delete_barang/') . $brg->id_barang, ' <div class="btn btn-danger btn-sm">Delete</div>'); ?>

                </td> 
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>

<?= anchor(base_url('Data_barang/create_barang/') . $brg->id_barang, '<div class="btn btn-success btn-sm ">Create</div>') ?>



</body>
</html>

