composer self-update --2
composer create-project laravel/laravel

#Creazione automatica di un progetto flight e di tutti i file a esso correlati
#
php artisan make:model Flight --all
php artisan migrate
#controller companies
php artisan make:controller Companies
#Aggiunta del campo status alla tabella
php artisan make:migration add_status_field_in_flights_table --table=flights_table
