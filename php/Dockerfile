FROM php:8.2-fpm

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создаём рабочую директорию
WORKDIR /var/www/html

# Устанавливаем Nette в tmp
RUN composer create-project nette/web-project /tmp/nette || true

# Копируем файлы в volume-папку
CMD cp -r /tmp/nette/. /var/www/html && php-fpm