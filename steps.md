
## Criando aplicação

composer create-project --prefer-dist laravel/laravel laravel-echo "5.3.*"

## Criando model Sala

php artisan make:model Room -m

php artisan make:seeder RoomsTableSeeder

composer dumpautoload (Em caso de Renomear alguma classe)

php artisan migrate --seed

php artisan migrate:refresh --seed (Roda tudo novamente)

## Criando model Mensagem

php artisan make:model Message -m

php artisan migrate

## Ligando sala aos usuários

php artisan make:migration --table=users add_rooms_to_users_table

php artisan migrate

composer update doctrine/dbal

php artisan migrate:refresh --seed

php artisan make:seeder UsersTableSeeder

php artisan migrate:refresh --seed

## Listando salas

php artisan make:controller RoomsController