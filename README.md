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

## Contributing

Dokumentasi Postman : 
<a href="https://documenter.getpostman.com/view/19955217/2s935kPRfU">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>logo-mark</title><path d="M288.59,2.11C148.36-15.87,20.1,83.2,2.11,223.42s81.07,268.47,221.3,286.47,268.5-81.09,286.48-221.3S428.81,20.11,288.59,2.11Zm110,164.55-25.75-25.75,32.7-32.7A38.87,38.87,0,0,1,404.36,162,37.24,37.24,0,0,1,398.6,166.66ZM106.05,397l20.18-20.19,26.06,26.06L107,399.76a1.63,1.63,0,0,1-1-2.77Zm103.74-151.5,18.75,18.74-42.23,9.09a1.58,1.58,0,0,1-1.82-.83,1.6,1.6,0,0,1,.29-2Zm9.9,39.2a1.24,1.24,0,0,1,.22-1.56l13.76-13.76,10.91,10.92-23.46,5.06A1.24,1.24,0,0,1,219.69,284.69ZM354.8,180.53a13.06,13.06,0,0,1-4.48,9.49l-100.23,88L237.54,265.5l94.73-94.73a13.22,13.22,0,0,1,18.68,0A13.09,13.09,0,0,1,354.8,180.53Zm-26.15-13.38-95,95-6.56-6.56-13.7-13.7C307,148.5,323.87,147.6,341.3,161.8A18.24,18.24,0,0,0,328.65,167.15ZM156,399.37l-19.92-19.92-6.27-6.27L210.07,293l38.83-8.38,18.64,18.65c-26.78,23.47-63.38,46.92-108.8,69.69h0a4.86,4.86,0,0,0-2.5,5.45l4.32,18.48a2.67,2.67,0,0,1-4.49,2.5Zm115.31-99.56-17.89-17.9,100.24-88a19.14,19.14,0,0,0,2.54-2.72C353.05,219.91,312.91,260.43,271.35,299.81Zm78-137.86a38.87,38.87,0,0,1,52.46-57.26L367.42,139.1a2.56,2.56,0,0,0,0,3.62l26.6,26.6A38.76,38.76,0,0,1,349.37,162Z" style="fill:#ff6c37"/><path d="M213.41,241.87l13.7,13.7,6.56,6.56,95-95a18.24,18.24,0,0,1,12.65-5.35C323.87,147.6,307,148.5,213.41,241.87Z" style="fill:#fff"/><path d="M353.7,193.87l-100.24,88,17.89,17.9c41.56-39.38,81.7-79.9,84.89-108.66A19.14,19.14,0,0,1,353.7,193.87Z" style="fill:#fff"/><path d="M184.49,272.49a1.58,1.58,0,0,0,1.82.83l42.23-9.09-18.75-18.74-25,25A1.6,1.6,0,0,0,184.49,272.49Z" style="fill:#fff"/><path d="M394,169.32l-26.6-26.6a2.56,2.56,0,0,1,0-3.62l34.41-34.41A38.87,38.87,0,1,0,394,169.32Z" style="fill:#fff"/><path d="M415.75,134.46a38.59,38.59,0,0,0-10.2-26.25l-32.7,32.7,25.75,25.75a37.24,37.24,0,0,0,5.76-4.71A38.58,38.58,0,0,0,415.75,134.46Zm-15.33,11.75A3,3,0,0,1,400,142a8.87,8.87,0,0,0,1.1-9.63,3,3,0,0,1,5.3-2.65,14.79,14.79,0,0,1-1.84,16.06,3,3,0,0,1-4.17.39Z" style="fill:#fff"/><path d="M332.27,170.77,237.54,265.5l12.55,12.55,100.23-88a13.21,13.21,0,0,0,.63-19.25A13.22,13.22,0,0,0,332.27,170.77Z" style="fill:#fff"/><path d="M160.53,396.87l-4.32-18.48a4.86,4.86,0,0,1,2.5-5.45h0c45.42-22.77,82-46.22,108.8-69.69L248.9,284.59,210.07,293l-80.22,80.21,6.27,6.27L156,399.37a2.67,2.67,0,0,0,4.49-2.5Z" style="fill:#fff"/><path d="M107,399.76l45.28,3.1L126.23,376.8,106.05,397a1.63,1.63,0,0,0,1,2.77Z" style="fill:#fff"/><path d="M244.58,280.29l-10.91-10.92-13.76,13.76a1.32,1.32,0,0,0,1.21,2.22Z" style="fill:#fff"/><path d="M406.43,129.76a3,3,0,0,0-5.3,2.65A8.87,8.87,0,0,1,400,142a3,3,0,0,0,2.28,4.85,2.93,2.93,0,0,0,2.28-1.07A14.79,14.79,0,0,0,406.43,129.76Z" style="fill:#ff6c37"/></svg>
</a>

