# Prueba Tecnica NewNet SA

## Guia de inicio

para iniciar el proyecto lo podemos realizar con docker compose 

    primero clonamos el repositorio
* git clone : https://github.com/jvilladiegot/newnet-prueba-tecnica.git


    luego nos movemos dentro de la carpeta  
* cd newnet-prueba-tecnica


    ejecutamos el siguiente comando para windows
* docker compose build
* docker compose up -d


    ejecutamos el siguiente comando para linux
* sudo docker compose build
* sudo docker compose up -d


    instalamos las depedencias de laravel
* composer install


    instalamos las depedencias de nodejs
* npm install


    compilamos los estilos y el javascript
* npm run build


    copiamos el archivo de variables de entorno
* cp .env.example .env


    configuramos nuestra llave 
* php artisan key:generate


    configuramos la base de datos 
* para docker compose

  -DB_CONNECTION=mysql

  -DB_HOST= ejemplo 192.168.0.20

  -DB_PORT=3306

  -DB_DATABASE=newnet

  -DB_USERNAME=newnet

  -DB_PASSWORD=newnet


    ejecutamos las migraciones y los seeders
* php artisan migrate --seed


    para abrir el sistema abrimos un navegador web y escribimos nuestra ip local y el puerto 3001
* ejemplo   192.168.0.20:3001
