# Шаблон docker для запуска проекта Symfony
Минимальный docker контейнер для запуска проекта на фреймворке Symfony

# Getting started
##  dev
1. `HTTP_PORT=<HTTP_PORT> docker compose up --build`

# production
2. `HTTP_PORT=<HTTP_PORT> docker compose -f docker-compose.yml up --build`

## Фичерс

* nginx 😂
* php 8.2 🤠
* alpine 🥵
* symfony 7

# cs fix:

if нот сделано

`composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer`

then выполнить

`tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src`
