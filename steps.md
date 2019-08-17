
## Criando aplicação

composer create-project --prefer-dist laravel/laravel laravel-echo "5.3.*"

## Criando model Sala

php artisan make:model Room -m

php artisan make:seeder RoomsTableSeeder

composer dumpautoload (Em caso de Renomear alguma classe)

php artisan migrate --seed

php artisan migrate:refresh --seed (Roda tudo novamente)
