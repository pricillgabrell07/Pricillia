<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col -6">
            <h1>Form Registrasi</h1>
            <p>Isi Data Dibawah ini:</p>
            <form action="output.php" method="post">
                <div class="mb -3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" 
                    placeholder="Nama Anda" required>
                </div>
                <div class="mb -3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="3" 
                    placeholder="Alamat Anda" required></textarea>
                </div>
                <div class="mb -3">
                    <label for="tempat" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat" id="tempat" 
                    placeholder="Tempat Lahir Anda" required>
                </div>
                <div class="mb -3">
                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" 
                    placeholder="Tanggal Lahir Anda" required>
                </div>
                <div class="mb -3">
                    <label for="jenis" class="form-label">Jenis Kelamin</label>
                    <input class="jeniskelamin" type="radio" name="jeniskelamin" id="laki" value="Laki-Laki">
                    <label class="jeniskelamin" for="laki">Laki-Laki
                    <input class="jeniskelamin" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan" checked>
                    <label class="jeniskelamin" for="perempuan">Perempuan
                    </label>
                </div>
                <div class="mb -3">
                    <label for="pendidikan" class="form-label">Pendidikan  :</label>
                    <select class="pendidikan" aria-label="Small select example" name="pendidikanterakhir">
                        <option selected>Pendidikan Terakhir</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Cancel</button>
                </div>
            </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
