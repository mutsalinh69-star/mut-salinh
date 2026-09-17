FROM php:8.2-cli

# ដំឡើង System Dependencies & PHP Extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# ដំឡើង Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# ដំឡើង Dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

EXPOSE 8080

CMD php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}