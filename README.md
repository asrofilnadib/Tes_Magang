# Pre-test Magang PT. Nusantara Infrastructure

## Deskripsi

Selamat datang di repositori ini! Repositori ini dikembangkan sebagai bagian dari tes magang di Digital Media Internship Program 2024 di detikcom untuk proyek CRUD (Create, Read, Update, Delete) dan sistem autentikasi menggunakan framework Laravel dan RESTful API.

## Tujuan Tes Magang

1. **Pengembangan CRUD:**
   1. Implementasi operasi CRUD untuk entitas terkait (contoh: "Books", "Users", atau entitas lainnya) menggunakan Laravel. 
   2. Menyertakan fungsi-fungsi dasar seperti menambahkan, mengambil, memperbarui, dan menghapus data.

2. **Sistem Autentikasi:**
   1. Laravel Breeze digunakan sebagai fondasi otentikasi dalam proyek ini. 
   2. Memanfaatkan fitur-fitur Breeze seperti pendaftaran pengguna, verifikasi email, masuk, keluar, dan reset kata sandi.
   3. Setiap operasi CRUD melibatkan autentikasi pengguna untuk memastikan akses yang aman dan sesuai dengan hak akses yang ditentukan.

## Panduan Pengguna

1). Install Composer in your computer

2). Clone Repository on your computer

```git clone -b nusantara https://github.com/asrofilnadib/Test-Magang.git```

3). Run ```php artisan key:generate```

4). Change or duplicate file ```.env.example``` with name ```.env```

4). compile the assets with ```npm i && npm run dev``` after that run open a new terminal then type ```gulp copy```

5). install composer packages with ```composer install --no-interaction --no-ansi```
or update with ```composer update --no-interaction --no-ansi```

5). Run ```php artisan migrate --seed```

6). Run ```php artisan serve```

7). Open http://127.0.0.1:8000

