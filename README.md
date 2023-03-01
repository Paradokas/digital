Создать файл .env:

`cp .env.example .env`

Указать в .env данные для подключения к БД

Установить зависимости:

`composer i`

Сгенерировать ключ приложения:

`php artisan key:generate`

Запустить миграции c --seed для заполнения БД:

`php artisan migrate --seed`

Запустить:

`php artisan serve`


Для получения новых данных:

`php artisan migrate:fresh --seed`
