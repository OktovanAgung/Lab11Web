| Nama  | Oktovan Agung Shailendra|
|-------|-------------------------|
|NIM    |: 312010131              |
|Kelas  |: TI.20.A.1              |

---
Daftar Isi :
- [Praktikum 11 PHP Framework (Codeigniter)](#praktikum-11-php-framework-codeigniter)
- [Praktikum 12 Framework Lanjutan (CRUD)](#praktikum-12-framework-lanjutan-crud)
---

# Praktikum 11 PHP Framework (Codeigniter)

## Langkah - Langkah Praktikum :

## Buat folder baru dengan nama **lab11_ci** pada docroot webserver (**htdocs**)

## Persiapan 
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada web server. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan :
- **php-json** ekstensi untuk bekerja dengan JSON;
- **php-mysqlnd** native drive untuk MySQL;
- **php-xml** ekstensi untuk bekerja dengan XML;
- **php-intl** ekstensi untuk membuat aplikasi multibahasa;
- **libcurl** (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstensi tersebut, melalui **XAMPP Control Panel**, pada bagian Apache klik **Config** > **PHP.ini**

![img](img/ekstensixampp.png)

Pada bagian extension, hilangkan tanda **;** (titik koma) pada ekstesi yang akan diaktikan. Kemudian simpan kemali filenya dan restart Apache webserver.

![img](img/aktifasiekstensi.png)

## Instalasi Codeigniter 4
Untuk melakukak instalasi Codigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan *composer*. Pada praktikum ini saya menggunakan cara manual.

- Unduk **Codeigniter** dari website `https://codeigniter.com/download`
- ekstrak file zip Codeigniter ke direktori **htdocs/lab11_ci**.
- Ubah nama direktori **framework-4x.xx** menjadi **ci4**.
- Buka browser dengan alamat `http://localhost/lab11_ci/ci4/public/`

![img](img/instalasicodeigniter.png)

## Menjalankan CLI (*Command Libe INterface*)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal / command promt.
Arahkan lokasi direktori sesuai dengan direktorikerja project yang dibuat (**xampp/htdocs/lab11_ci/ci4/**)

![img](img/runcli.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah `php spark`

![img](img/phpspark.png)

## Mengaktifkan Mode Debugging
Untuk mengaktifkan Mode Debugging bisa dengan mengetikan perintah ` php spark serve`

![img](img/phpsparkserve.png)

Untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program caranya degan mengubah kode filde pada **app/Controllers/home.php**, hapus tanda ; (titik koma) nya.
![img](img/hapustitikkoma.png)

Dan untuk melihat hasilnya ketik `https://localhost:8080` pada web browser.

![img](img/pesanerror.png)

Kemudian ubah nama file **env** menjadi **.env**, kemudian buka file tersebut, dan hapus tanda **#** pada **CI_ENVIRONMENT =**, dan ubah variavle menjadi **development**
![img](img/hapus%23.png)

Dan refresh url sebelumnya untuk melihat perubahan.
![img](img/keteranganpesanerror.png)

## Struktur Direktori
![img](img/strukturdirektori.png)

## Routing & Controller
Router terletak pada **app/config/Routes.php**

## Membuat Route Baru
Tabahkan kode berikut pada **Routes.php**
```php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
![img](img/routesbaru.png)

Untuk mengetahui apakah route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut `php spark routes`

![img](img/phpsparkroutes.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat `http://localhost:8080/about`

![img](img/routesabout.png)

## Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama **page.php** pada direktori Controller kemudian isi dengan kode berikut
![img](img/controllerpagephp.png)
Kemudian simpan.
Selanjutnya refresh kembali halaman web browser, maka akanmenampilkan hasil seperti berikut.
![img](img/controllerabout.png)

Auto Routing Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai **true** menjadi **false**.
`$routes->setAutoRoute(true);`
![img](img/autoroutetrue.png)

Tambahkan methode baru pada Controller Page seperti berikut
![img](img/controllerpagephp2.png)

Methode ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan url berikut `http://localhost:8080/page/tos`
![img](img/controllertos.png)

## Membuat View
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama **about.php** pada direktori view (**app/view/**) kemudian masukan kode berikut.

![img](img/view.png)

Ubah **methode about** pada **Controller Page** menjadi seperti berikut.

![img](img/controllerpagephp3.png)

Kemudian refresh halaman tersebut untuk melihat hasilnya.

![img](img/viewabout.png)

## Membuat Layout Web Dengan CSS
Buat file css direktori **public** dengan nama **style.css** saya akan gunakan layout yang pernah dibuat pada praktikum 4 (copy file dari praktikum lab4_layout).

![img](img/publiccss.png)

Kemudian buat folder template pada direktori view kemudian buat file **header.php** & **footer.php** pada folder tersebut.

- header.php
![img](img/headerphp.png)

- footer.php
![img](img/footerphp.png)

Kemudian ubah file **about.php** seperti berikut
![img](img/aboutphp.png)

Selanjutnya refresh halaman `http://localhost:8080/about`

![img](img/viewaboutnew.png)

# Pertanyaan & Tugas

## Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

# Jawaban

- Ubah isi pada **Routes.php** menjadi seperti berikut.

![img](img/jawabanroutes.png)

- Ubah isi pada **page.php** menjadi seperti berikut

![img](img/jawabanpage.png)

- Pada folder views buat ile baru dengan nama ;**home.php, about.php, artikel.php, contact.php, faqs.php,** dan **tos.php**. Pada masing - masing file tersebut masukan kode berikut

![img](img/jawabanisi6filebaru.png)

- Untuk melihat hasilnya bisa dengan mengakses alamat berikut `http://localhost:8080/contact`

![img](img/jawabanhasil.png)

---
---

# Praktikum 12 Framework Lanjutan (CRUD)

## Langkah - Langkah Praktikum :

## Persiapan
Untuk Memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP Control Panel.

## Membuat Database 
```
CREATE DATABASE lab_ci4;
```
![img](img/createdatabase.png)

## Membuat Tabel
```
CREATE TABLE artikel ( 
  id INT(11) auto_increment, 
  judul VARCHAR(200) NOT NULL, 
  isi TEXT, 
  gambar VARCHAR(200), 
  status TINYINT(1) DEFAULT 0, 
  slug VARCHAR(200), 
  PRIMARY KEY(id)
);
```
![img](img/createtable.png)

## konfigurasi Koneksi Database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan du acara, yaitu pada file **app/config/database.php** atau menggunakan file **.env**. Pada praktikum ini kita gunakan konfigurasi pada file **.env**.

![img](img/konfigdatabase.png)

## Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori **app/Models** dengan nama **ArtikelModel.php**

![img](img/artikelmodelphp.png)

## Buat Controller
Buat Controller baru dengan nama **Artikel.php** pada direktori **app/Controllers**

![img](img/artikelphp.png)

## Membuat View
Buat direktori baru dengan nama **artikel** pada direktori **app/view**, kemudian buat file baru dengan nama **index.php**.

![img](img/indexphp.png)

Selanjutnya buka browser  kembali dengan mengakses url `http://localhost:8080/artikel`

![img](img/artikel.png)

Belum ada data yang ditampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
```
INSERT INTO artikel (judul, isi, slug) VALUE ('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'artikel-pertama'), ('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.', 'artikel-kedua');
```
Dan refresh kembali browser untuk melihat perubahannya.

![img](img/insertartikel.png)

