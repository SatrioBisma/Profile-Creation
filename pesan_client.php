<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesan Dari Client</title>
    <style>
        div.row{
            background-color: yellow;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                Nama Pengirim: <?php echo $_POST["inputnama"]?>
                <br>
                Email : <?php echo $_POST["inputemail"]?>
                <br>
                No. Hp : <?php echo $_POST["inputnomer"]?>
                <br>
                Isi Pesan : <?php echo $_POST["inputpesan"]?>
                <br>
            </div>
    </div>
    </div>
    <a href="index.html">kembali ke halaman utama</a>
    
</body>
</html>