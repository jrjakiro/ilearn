![ilearn-logo](https://github.com/alfredcrosby/ilearn/blob/master/logo.png?raw=true)
# iLearn

**CATATAN :** Aplikasi ini belum pernah diuji, mohon dipertimbangkan jika akan digunakan di *production*.

iLearn merupakan sistem pembelajaran online menggunakan Laravel. Fitur yang terdapat di software ini antara lain:

- Membagikan pengumuman ke guru atau siswa.
- Manajemen kelas
- Membuat, mengerjakan dan mengumpulkan tugas.
- Membuat, membagikan dan membaca materi ke tiap kelas.
- Membuat, membagikan dan menjawab quiz pilihan ganda.
- Diskusi di tiap kelas.

## Instalation
1. Clone repository ini dengan menjalankan perintah pada terminal 
```git clone https://github.com/alfrcr/ilearn.git <nama-folder-anda>```
2. Masuk ke folder ilearn dengan perintah `cd nama-folder-anda`
3. Jalankan composer
```composer install```
4. Copy dan paste file `.env.example` lalu ubah menjadi `.env`
5. Atur sesuaikan konfigurasi database anda.
6. Jalankan migrasi untuk membuat table
```php artisan migrate --seed```
7. Selesai

## Screenshot
![ilearn-ss-admin](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-1.png)
![ilearn-ss-teacher-dashboard](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-2.png)
![ilearn-ss-classroom](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-3.png)
![ilearn-ss-share-course](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-4.png)
![ilearn-ss-mobile-user](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-5.png)
![ilearn-ss-mobile-admin](https://raw.githubusercontent.com/alfrcr/ilearn/master/ss-6.png)

## Credential
Admin:
```html
username: admin
password: secret
```

Guru:
```html
username: timoti
password: secret
```

Siswa:
```html
username: reynold
password: secret
```

## Known issues
1. Jika anda menggunakan xampp/wamp, fitur quiz akan mengalami error karena url pada ajax tidak sesuai (404). Mohon untuk disesuaikan dengan domain lokal anda pada line  [ini](https://github.com/alfrcr/ilearn/blob/master/resources/assets/js/client/quiz.js#L112), line [ini](https://github.com/alfrcr/ilearn/blob/master/resources/assets/js/client/quiz.js#L148) dan line [ini](https://github.com/alfrcr/ilearn/blob/master/resources/assets/js/client/quiz.js#L200). Setelah diubah jalankan `gulp --production` untuk mem-build file js tersebut. Sebelumnya pastikan `gulp` sudah terinstall. (Found by [Vektor Lutfi](https://www.facebook.com/vektorlutfi112?fref=ufi))

## Troubleshooting
Silakan buat [issue](https://github.com/alfredcrosby/ilearn/issues) baru.

## License

iLearn berlisensi [WTFPL](http://www.wtfpl.net/).

