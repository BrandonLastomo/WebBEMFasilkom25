## Cloning Project
1. Open the folder where you want to place the project
2. Open cmd
3. Write git clone project-url
4. Go to the folder application using cd command on your cmd or terminal
5. Run composer install on your cmd or terminal
6. Copy .env.example file to .env on the root folder.
7. Open .env and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
8. Run php artisan key:generate
9. Run php artisan migrate
10. Run php artisan serve

## Accessing Hosted Project's Folder
1. Open cPanel with given account and password
2. Choose file manager -> laravel

## Accessing Hosted Project's Database
1. Open cPanel with given account and password
2. Search for phpMyAdmin
3. Choose the database
