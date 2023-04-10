<h1>E-PUSKESMAS - WEB PUSKESMAS BERBASIS LARAVEL</h1>

## Apa itu E-Puskesmas?

<p>E-Puskesmas adalah project berbasis web yang dibuat menggunakan framework Laravel versi 10. Project ini bertujuan untuk membantu pengelolaan data puskesmas secara lebih efisien dan efektif. Pasien dapat melakukan pendaftaran tanpa harus melakukan login terlebih dahulu.</p>

## Requirentments

Sebelum memulai menggunakan project ini, pastikan komputer Anda sudah memenuhi syarat-syarat berikut:
<ul>
    <li>PHP 7.4 atau versi yang lebih baru</li>
    <li>MySQL 5.7 atau yang lebih baru</li>
    <li>Composer</li>
    <li>Git</li>
</ul>

## Fitur
<ol>
    <li>Pendaftaran Tanpa Login: Pengunjung puskesmas dapat langsung melakukan pendaftaran tanpa harus login terlebih dahulu</li>
    <li>Tampilan Antrian: Pengunjung dapat melihat daftar antrian pada hari ini, hari besok dan keseluruhan jumlah pengunjung</li>
    <li>Otentikasi Admin: Hanya admin yang memiliki hak ases untuk melihat halaman admin dan melakukan tindakan seperti mengelola daftar pasien dan layanan poli</li>
    <li>Operasi CRUD: Admin dapat melihat, membuat, memperbaharui dan menghapus data pendaftaran pasien, layanan poli dan pengguna (admin)</li>
    <li>Statistik Pengunjung: Admin dapat melihat statistik pengunjung berdasarkan jenis layanan poli dan tanggal, sehingga memudahkan dalam mengambil keputusan dalam mengelola puskesmas</li>
</ol>

## Installation

Berikut adalah langkah-langkah untuk menginstall dan menjalankan project ini pada komputer Anda:
<ol>
<li>Clone repository E-Puskesmas dengan menjalankan perintah berikut pada terminal atau Git Bash:
<blockquote>git clone https://github.com/ahmadfahrudin/epuskesmas.git</blockquote></li>
<li>Masuk ke direktori E-Puskesmas yang telah Anda clone dengan menjalankan berikut pada terminal atau Git Bash:</li>
<blockquote>cd epuskesmas</blockquote>
<li>Jalankan perintah berikut untuk menginstall seluruh dependency yang dibutuhkan oleh project:
<blockquote>composer install</blockquote></li>
<li>Salin file <b>.env.example</b> dan ubah namanya menjadi <b>.env</b> dan atur konfigurasi database pada file tersebut. Project menggunakan nama database <b>epuskesmas</b></li>
<li>Jalankan perintah berikut untuk menggenerate APP_KEY pada file .env
<blockquote>php artisan key:generate</blockquote></li>
<li>Jalankan perintah berikut untuk membuat tabel-tabel pada database
<blockquote>php artisan migrate</blockquote></li>
<li>Jalankan perintah berikut untuk menjalankan semua seeder (data pada tabel) yang ada pada project
<blockquote>php artisan db:seed</blockquote>
atau Anda dapat menjalankan seeder dengan satu per satu sesuai dengan class pada project
<blockquote>php artisan db:seed --class=UserSeeder</blockquote></li>
<blockquote>php artisan db:seed --class=PoliSeeder</blockquote></li>
<blockquote>php artisan db:seed --class=PengunjungSeeder</blockquote></li>
</ol>

## Usage
Setelah mengikuti langkag-langkah pada bagian Installation, Anda dapat mengakses project ini pada browser dengan mengunjungi URL atau http://localhost/epuskesmas atau http://localhost:8000 atau sesuaikan port yang Anda gunakan.

Anda dapat melakukan akses dashboard admin dengan mengunjungi http://localhost/epuskesmas/login
Gunakan email '<b>admin@gmail.com</b>' dan password '<b>password</b>' untuk masuk.

## Screenshoots
Tampilan Home Pengunjung<br>
<img src="https://github.com/ahmadfahrudin/img/blob/master/ss-epuskesmas/ss1%20-%20pengunjung%20home.png?raw=true" alt="tampilan home epuskesmas" title="Tampilan Home E-Puskesmas" height="400">

Tampilan Pendaftaran Pengunjung<br>
<img src="https://github.com/ahmadfahrudin/img/blob/master/ss-epuskesmas/ss2%20-%20pengunjung%20pendaftaran.png?raw=true" alt="tampilan pendaftaran epuskesmas" title="Tampilan Pendaftaran Pengunjung" height="400">

Tampilan Home Admin<br>
<img src="https://github.com/ahmadfahrudin/img/blob/master/ss-epuskesmas/ss3%20-%20admin%20home.png?raw=true" alt="tampilan home admin epuskesmas" title="Tampilan Home Admin" height="400">

Tampilan Statistik Pengunjung Berdasarkan Jenis Layanan Poli dan Tanggal<br>
<img src="https://github.com/ahmadfahrudin/img/blob/master/ss-epuskesmas/ss4%20-%20admin%20pengunjung.png?raw=true" alt="tampilan statistik pengunjung epuskesmas" title="Tampilan Statistik Pengunjung" height="400">

Tampilan Layanan Admin<br>
<img src="https://github.com/ahmadfahrudin/img/blob/master/ss-epuskesmas/ss5%20-%20admin%20poli.png?raw=true" alt="tampilan layanan poli epuskesmas" title="Tampilan Layanan Poli Admin" height="400">

## Credits
E-Puskesmas dikembangkan oleh Ahmad Fahrudin. Jika Anda menemukan bug atau ingin memberikan saran untuk project ini, silahkan buat issue pada repository atau menghubungi lewat
Email: ahmadfahrudin.id@gmail.com
Linkedin: https://www.linkedin.com/in/ahmadfahrudin08

Tempalte yang digunakan dalam project yaitu https://htmlcodex.com/clinic-website-template/ dan https://htmlcodex.com/bootstrap-admin-template-free/

## License

Copyright &copy; 2023 Ahmad Fahrudin
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
