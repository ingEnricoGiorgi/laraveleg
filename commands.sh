composer self-update --2
composer create-project laravel/laravel


php artisan make:model Flight --all
php artisan migrate
php artisan make:migration add_status_field_in_flights_table --table=flights_table