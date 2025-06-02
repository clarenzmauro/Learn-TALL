laravel basics 

pre reqs
php
composer

php to run laravel
composer to create boilerplate

to check for version, use these commands:
php -v
composer -v

to setup your project, use this:
composer create-project laravel/laravel project-name

to run your project, go to the folder created by composer and run this:
php artisan serve 
(like npm run dev/npm start in MERN)

app/ contains the core code including Models (for db interactions)
config/ stores all the config files
database/ where database migrations, seeders, and factories reside.
public/ the "public" route of the web app. all requests are routed through the index.php file here
resources/ contains the frontend assets like views (html templates), css, and js
routes/ defines all the routes for your application. mostly web.php for most of the web routes.
.env stores environment-specific configs like db credentials

focus on routes/web.php, resources/views, and database/migrations for now.

1. routes are almost like express.js routing
2. views are the pages themselves wherein you can pass data in it
3. default db for laravel projects is sqlite wherein you can create a model using this command:
php artisan make:model Post -m

this creates a Post model which will represent a post in a blog. -m flag tells Laravel to also create a db migration file for this model.

up() method defines what happens when you run the migration (creating the table)
down() method defines what happens if you roll back the migration (dropping the table)

to execute the migration to create the posts table in the database, use the command
php artisan migrate