# Aplikasi Penghitung Biaya Parkir

Aplikasi ini merupakan sebuah program sederhana untuk menghitung biaya parkir berdasarkan jenis kendaraan dan lama waktu parkir. Aplikasi ini dibuat menggunakan PHP dan HTML/CSS.

## Deskripsi

Aplikasi ini terdiri dari dua halaman utama:

1. `form.php`: Halaman ini menampilkan formulir untuk memasukkan data kendaraan, seperti nomor plat, jenis kendaraan, jam masuk, dan jam keluar.
2. `konversi.php`: Halaman ini menampilkan hasil perhitungan biaya parkir berdasarkan data yang dimasukkan pada halaman `form.php`.

Aplikasi ini menggunakan aturan perhitungan biaya parkir sebagai berikut:

- Mobil:
  - 1 jam pertama: Rp 5.000
  - Setiap jam berikutnya: Rp 3.000

- Motor:
  - 1 jam pertama: Rp 3.000
  - Setiap jam berikutnya: Rp 1.000

- Sepeda:
  - 1 jam pertama: Rp 2.000
  - Setiap jam berikutnya: Rp 500

## Cara Penggunaan

1. Buka file `form.php` pada web browser Anda.
2. Masukkan nomor plat kendaraan, pilih jenis kendaraan, dan masukkan jam masuk dan jam keluar.
3. Klik tombol "CETAK" untuk melihat hasil perhitungan biaya parkir.
4. Halaman `konversi.php` akan terbuka dan menampilkan informasi jenis kendaraan, total waktu parkir, dan total biaya yang harus dibayar.

## Struktur File

Repositori ini terdiri dari tiga file utama:

1. `form.php`: File yang berisi kode HTML dan form untuk memasukkan data kendaraan.
2. `konversi.php`: File yang berisi kode PHP untuk menghitung biaya parkir dan menampilkan hasilnya.
3. `style.css`: File yang berisi kode CSS untuk mengatur tampilan halaman web.

## Kontribusi
Kami menyambut kontribusi dalam bentuk saran dan perbaikan. Untuk berkontribusi, silakan ajukan pull request.

## Lisensi
Proyek ini dilisensikan di bawah MIT License.
