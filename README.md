# Kabar Desa (Information System)

### Introduce

**Kabar Desa** is a web-based information system application to organize data collection activities in villages (UMKM, Job, people ,Aspiration and Complaint, News Update)

![Home](public/demo/home.png)
![Admin-Dashboard](public/demo/kabar-desa.png)

## Prerequiste

-   [Composer](https://getcomposer.org/) - Download and Install Composer

### Installation

Install the dependencies and start the server.

```sh
$ git clone https://github.com/Zainal21/kabar-Desa.git
$ cd kabar-Desa
$ composer install
$ cp .env.example to .env
$ change setting for database & generate key with php artisan key:generate
$ Call Action to Migrate Database & seeder with php artisan migrate --seed
$ php artisan serve
```

---

### The Project is MIT licensed.

Built with [Laravel](laravel.com/). Develop by [Muhamad Zainal Arifin](muhammadzaindev.vercel.app/)

---

2020 © Muhamad Zainal Arifin
