# MoneyPoly

## Introduction

MoneyPoly allows you to easily manage your money during a monopoly game.

## Installation guide

1. Clone the project


2. Install `Composer` dependencies.

        composer install


3. Install `NPM` dependencies.

        npm install

4. The below command will compile all the assets(sass, js, media) to public folder:

        npm run dev


5. Copy `.env.example` file and create duplicate. Use `cp` command for `Linux` and `Mac` users.

        cp .env.example .env

   If you are using `Windows`, use `copy` instead of `cp`.

        copy .env.example .env


6. Enter your details in the newly created .env file


7. The below command will create tables into database using Laravel migration and seeder.

        php artisan migrate:fresh --seed


8. Generate your application encryption key

        php artisan key:generate


9. Link the project to valet

        valet link


10. Secure the domain

        valet secure

11. Start Laravel Horizon

        php artisan horizon
 
12. In a new terminal window, start the websockets server
    
        php artisan websocket:serve

