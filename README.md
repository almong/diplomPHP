# Установка приложения
Настройка сервера
Apache
Создать файл public/.htaccess :
```
Options +FollowSymLinks -Indexes
RewriteEngine On

RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```
Nginx
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
Установите в качестве корневой дириктрии {локальный путь до проекта}/public

# Настройка БД
1. Создайте базу данных MYSQL с именем "faq"
2. Имортируйте дамп базы данных faq.sql

#Настройка подключения к БД
Доступ к базе данных настраивается в конфигурационном файле проекта "/config/db.php"

#Доступ к административной панеле
В адресной строке браузера, после адрес сайта наберите /admin

    Имя пользователя: admin
    Пароль: admin
