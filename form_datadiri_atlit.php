<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Input Data Diri</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
    <div class="navbar-header">
        <a href="" class="navbar-brand navbar-link"><img src=""></a></div>
        <div class="navbar-teks">
        <a href="home.html">Home</a> |
        <a href="profile.html"></a> |
        <a href="product.html"></a> 
    </div>
    </div>
</nav>

<form action="" method="POST" class="form">
<h2>Data Diri</h2><br>
    <table border="0" cellspacing="10" width="600">
        <tbody>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" required style="border-radius: 4px;" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat" required style="border-radius: 4px;" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal" id="tanggal" required style="border-radius: 4px;" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type="radio" name="gender" id="gender" value="Laki-laki"> Laki-laki
            <input type="radio" name="gender" id="gender" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><input type="text" name="umur" id="umur" required style="border-radius: 4px;" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                <select name=”status”>
                <option value=”menikah”>Menikah</option>
                <option value=”single”>Single</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tinggi/Berat Badan</td>
            <td>:</td>
            <td><input type="text" name="tinggi" id="tinggi" required style="border-radius: 4px;" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Prestasi</td>
            <td>:</td>
            <td><textarea name="prestasi" id="prestasi" cols="30" rows="3" style="border-radius: 4px;"></textarea></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><textarea name="prestasi" id="prestasi" cols="30" rows="3" style="border-radius: 4px;"></textarea></td>
        </tr>
        </tbody>
    </table><br>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>   
</body>
</html>