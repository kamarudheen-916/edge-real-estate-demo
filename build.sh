#!/bin/bash
set -e

echo "▶ Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader


echo "▶ Caching Laravel config & routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Build complete."
