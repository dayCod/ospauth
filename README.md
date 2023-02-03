<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Register + Login Rest Api Menggunakan Service Pattern (On Development)

Membuat Rest Api untuk Fitur Register + Login Menggunakan Service Pattern Tanpa Repository

## Installation

Silahkan Clone Proyek ini dengan Mengikuti Command Berikut:

```bash
git clone https://github.com/dayCod/service-pattern.git
```

Masih dalam Bash/CommandPrompt/Shell yang sama, Kalian Ketikan Command Berikut: 

```bash
composer install
```

atau

```bash
composer update
```

Selanjutnya, Duplikat File .env.example dan rename salah satunya menjadi .env, Lalu Buka Bash/CommandPrompt/Shell kalian, Dan Ketikan Command Berikut: 

```bash
php artisan key:generate
```

## Usage

Silahkan buka file .env kalian, lalu ubah bagian berikut dan sesuaikan dengan environment yang kalian siapkan

```php
DB_CONNECTION=xxx
DB_HOST=xxx
DB_PORT=xxx
DB_DATABASE=xxx
DB_USERNAME=xxx
DB_PASSWORD=xxx
```


Selanjutnya, Menginstall Laravel Passport Melewati Composer

```bash
composer require laravel/passport
```

Selanjutnya, Migrasi kan Table Untuk Database yang telah di buat pada .env file sebelumnya

```bash
php artisan migrate --seed
```

Terakhir adalah Generate Key Untuk Laravel Passportnya, Dengan Mengeksekusi Command Berikut : 

```bash
php artisan passport:install
```

## Contributing

Dokumentasi Postman : <a href="https://documenter.getpostman.com/view/19955217/2s935kPRfU">Klik Disini</a> <br>
Dokumentasi Figma : <a href="https://www.figma.com/file/MDZxaOGTw8wP2SOxrdWpGn/ospflow?node-id=0%3A1&t=TvkIAeKh2oY0NZsF-0">Klik Disini</a> <br>
Dokumentasi Notion : <a href="https://mixed-diamond-226.notion.site/Flow-ospauth-9ee599770438402a9aa69d3bd050066a">Klik Disini</a>



