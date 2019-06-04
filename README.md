#Configuration

##Init
```
composer update
```
##Env
>Create .env and configure like the .env-example

##Genenrate the secret key
```
php artisan key:gen
```
##Authentication
###Jwt
>Generate the secret key in .env:
```
php artisan jwt:secret
```
