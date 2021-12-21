<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kritik dan saran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="container">
            <h1>Form Kritik dan Saran</h1>
            <form action="hasil.php" method="POST">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                            <input type="radio" name="jk" value="Perempuan" required>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>:</td>
                        <td>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td><input type="fakultas" name="fakultas" required></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><input type="jurusan" name="jurusan" required></td>
                    </tr>
                    <tr>
                        <td>Kritik</td>
                        <td>:</td>
                        <td><textarea name="kritik" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Saran</td>
                        <td>:</td>
                        <td><textarea name="saran" required></textarea></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit"class="kirim">Kirim</button>
                            <button type="reset" class="batal">Batal</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>