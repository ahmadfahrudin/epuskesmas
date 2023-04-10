## E-PUSKESMAS

<p>E-Puskesmas adalah project berbasis web yang dibuat menggunakan framework Laravel versi 10. Project ini bertujuan untuk membantu pengelolaan data puskesmas secara lebih efisien dan efektif. Pasien dapat melakukan pendaftaran tanpa harus melakukan login terlebih dahulu.</p>

## Requirentments

Sebelum memulai menggunakan project ini, pastikan komputer Anda sudah memenuhi syarat-syarat berikut:
<ul>
    <li>PHP 7.4 atau versi yang lebih baru</li>
    <li>MySQL 5.7 atau yang lebih baru</li>
    <li>Composer</li>
    <li>Git</li>
</ul>

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
Setelah mengikuti langkag-langkah pada bagian Installation, Anda dapat mengakses project ini pada browser dengan mengunjungi URL http://localhost:8000 atau sesuaikan port yang Anda gunakan.

Anda dapat melakukan akses
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
