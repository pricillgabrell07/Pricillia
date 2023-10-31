<html>
    <head>
        <title>Hasil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h1 align="center">Data Registrasi</h1>
    <?php
    error_reporting(0);
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['tanggal'];
    $jenis=$_POST['jenis'];
    $pendidikanterakhir=$_POST['pendidikanterakhir'];
    ?>
    <div class="row">
        <div class="col -6">
        <table class="table table-striped">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat;?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?= $tempat;?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tanggal;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jenis;?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?= $pendidikanterakhir;?></td>
            </tr>
        </table>
        </div>
        <a href="prat1.php"><I>Back To Home</I></a>
    </div>
    <?php ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      
    </body>
</html>
