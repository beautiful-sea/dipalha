#!/bin/sh
set -e

echo "Deploying application..."

#Enter maintenance mode
(php artisan down --message 'O sistema está sendo atualizado(Rapidamente!). Volte em alguns minutos.') || true

    #Update codebase
    git fetch origin deploy
    git reset --hard origin/deploy

    #install dependencies based in lock file
    composer install --no-interaction --prefer-dist --optimize-autoloader

    #migrate database
    php artisan migrate --force

    #clear cache
    #php artisan optimize

#exit maintenance mode
php artisan up

echo "Application deployed!"