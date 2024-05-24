<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Struk Parkir</title>
</head>
<body>
    <div class="container">
        <h2>======= STRUK PARKIR =======</h2>
        <hr>
        <?php
            $plat = $_POST["plat"];
            $kendaraan = $_POST["kendaraan"];
            $masuk = $_POST["masuk"];
            $keluar = $_POST["keluar"];

            list($jam_masuk, $menit_masuk) = explode(":", $masuk);
            list($jam_keluar, $menit_keluar) = explode(":", $keluar);
            $detik_masuk = ($jam_masuk * 3600) + ($menit_masuk * 60);
            $detik_keluar = ($jam_keluar * 3600) + ($menit_keluar * 60);
            if ($detik_keluar < $detik_masuk) {
                $detik_keluar += 24 * 3600;
            }
            $total_detik = $detik_keluar - $detik_masuk;
            $jam = floor($total_detik / 3600);
            $menit = floor(($total_detik % 3600) / 60);

            $harga = 0;

            switch ($kendaraan) {
                case "mobil":
                    if ($jam <= 1) {
                        $harga = 5000;
                    } else {
                        $harga = 5000 + ($jam - 1) * 3000;
                    }
                    break;

                case "motor":
                    if ($jam <= 1) {
                        $harga = 3000;
                    } else {
                        $harga = 3000 + ($jam - 1) * 1000;
                    }
                    break;

                case "sepeda":
                    if ($jam <= 1) {
                        $harga = 2000;
                    } else {
                        $harga = 2000 + ($jam - 1) * 500;
                    }
                    break;
            }

            echo "<h3>Jenis Kendaraan : $kendaraan</h3>";
            echo "<h3>Total Waktu : $jam jam $menit menit</h3>";
            echo "<h3>Total Harga : Rp " . number_format($harga, 0, '.', '.') . "</h3>";
        ?>
        <hr>
        <h2>======= TERIMAKASIH =======</h2>
        <hr>
        <div class="anggota-kelompok">
            <p>Anggota Kelompok :</p>
            <p>Tezza Prayoga()</p>
            <p>Udin Dwi Wahyudi(225610031)</p>
            <p>Hendrianto Novanda Putra()</p>
        </div>
    </div>
</body>
</html>
