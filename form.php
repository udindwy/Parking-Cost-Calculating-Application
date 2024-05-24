<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Parkir</title>
</head>
<body>
    <div class="container">
        <img src="logo.png"Logo Parkir">
        <form name="parkir" action="konversi.php" method="post">
            <label for="plat">NO Plat :</label>
            <input type="text" name="plat" id="plat"><br>

            <label for="kendaraan">Jenis Kendaraan :</label>
            <select name="kendaraan" id="kendaraan">
                <option value="mobil">Mobil</option>
                <option value="motor">Motor</option>
                <option value="sepeda">Sepeda</option>
            </select><br>

            <label for="masuk">Jam Masuk :</label>
            <input type="time" name="masuk" id="masuk"><br>

            <label for="keluar">Jam Keluar :</label>
            <input type="time" name="keluar" id="keluar"><br>

            <input type="submit" value="CETAK">
        </form>
    </div>
</body>
</html>
