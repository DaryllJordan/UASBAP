# UAS-BAP-03081200049-Daryll Jordan-20SI2
 PROJECT UAS BAP


## Data Diri | UJIAN AKHIR SEMESTER (UAS)
Nama        : Daryll Jordan
Nim         : 03081200049
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

## No 1
Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Table yang telah saya buat adalah Best Seller. Dapat diakses pada http://127.0.0.1:8000/admin/bestseller atau bisa melalui sidebar. Nama file yang ditambahkan dapat dilihat pada folder bagian resources/views/admin/bestseller dengan nama file yang tertera Beserta juga Controller dan Modelnya.

## No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
Query View tersebut dapat dilihat pada sidebar yang berjudul Tahun atau dapat dicek melalui http://127.0.0.1:8000/admin/tahun. Untuk file sql nya telah saya lampirkan di file GitHub.

## No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Seperti soal nomor 2, Query View dapat di cek pada http://127.0.0.1:8000/admin/tahun yang dimana terdapat tombol yaitu Print PDF. Laporan tersebut akan digenerate menjadi Laporan PDF dan akan otomatis terdownload. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/tahun dengan nama file index.blade.php dan print_pdf.blade.php beserta juga Controller dan Modelnya.


## No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:
Untuk Validasi data halaman Insert dan Update dapat dilihat pada folder bagian app/Http/Controllers/Admin/bestsellerController. Dimana untuk kolom 'Nama' tidak boleh kosong dan harus max 50 karakter, sedangkan 'tahun' tidak boleh kosong dan juga harus berupa angka atau numeric.

## No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: https://github.com/DaryllJordan/UASBAP