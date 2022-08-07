# Laravel Boilerplate

### Installation
```bash
git clone git@github.com:officebiz/laravel-boilerplate.git boilerplate
cd boilerplate
cp .env.example .env # and setup .env
# create database
# setup APP_URL
# setup DB_DATABASE, DB_USERNAME, DB_PASSWORD
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed # optional, seeding data

npm install
```

### Start local server and open in browser
```bash
php artisan serve
open http://127.0.0.1:8000 # in a browser

npm run dev
```

## Copyright

&copy; 2022 [office.biz](https://office.biz)
