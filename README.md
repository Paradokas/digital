Создать файл .env:

`cp .env.example .env`

Указать в .env данные для подключения к БД

Сгенерировать ключ приложения:

`php artisan key:generate`

Запустить миграции c --seed для заполнения БД:

`php artisan migrate --seed`


Запустить:

`php artisan serve`