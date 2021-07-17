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
</p>


</body>
</html>

