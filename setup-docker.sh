#!/bin/bash

# AVC Laravel Application Docker Setup Script
echo "🚀 Setting up AVC Laravel Application with Docker MySQL..."

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    echo "❌ Docker is not running. Please start Docker Desktop and try again."
    exit 1
fi

# Stop existing containers if running
echo "🔄 Stopping existing containers..."
docker-compose down

# Start MySQL container
echo "🐳 Starting MySQL container..."
docker-compose up -d mysql

# Wait for MySQL to be ready
echo "⏳ Waiting for MySQL to be ready..."
until docker-compose exec mysql mysqladmin ping -h"localhost" --silent; do
    echo "   Waiting for MySQL connection..."
    sleep 5
done

echo "✅ MySQL is ready!"

# Run Laravel migrations
echo "🔄 Running Laravel migrations..."
php artisan migrate --force

# Optional: Seed the database
echo "🌱 Do you want to seed the database? (y/n)"
read -r response
if [[ "$response" =~ ^[Yy]$ ]]; then
    php artisan db:seed
fi

echo ""
echo "🎉 Setup complete!"
echo ""
echo "📊 Services running:"
echo "   - MySQL: localhost:3306"
echo "   - phpMyAdmin: http://localhost:8080"
echo ""
echo "🔧 Database credentials:"
echo "   - Database: avc_database"
echo "   - Username: avc_user"
echo "   - Password: avc_password"
echo ""
echo "🏃‍♂️ To start your Laravel application:"
echo "   php artisan serve"
echo ""
echo "🛑 To stop Docker services:"
echo "   docker-compose down"
