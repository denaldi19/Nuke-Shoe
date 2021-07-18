
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrasi</h1>
<form class="user" action="<?= base_url('Registrasi') ?>" method="POST" enctype="multipart/form-data">
                                <input type="text" name="id_user"><br>
                                <input type="text" name="username"><br>
                                <input type="text" name="email"><br>
                                <input type="text" name="password"><br>
                                <input type="text" name="id_roles"><br>
                                
                                <button type="submit" class="btn btn-primary ">Daftar</button>

                            </form>
</body>
</html>