# IoT Backend API

This is a Laravel-based backend API for managing IoT devices, sensor data, and device commands.

🚀 Features

- Register and manage IoT devices
- Store and retrieve sensor readings
- Send commands to devices
- RESTful API structure
- Built with Laravel

🛠️ Tech Stack

- PHP 8+
- Laravel 10+
- MySQL (or compatible DB)
- Composer
- Optional: Redis, Laravel Queue for background jobs

📦 Installation

```bash
git clone https://github.com/4chrlss/iot-backend-api.git
cd iot-backend-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

📡 API Endpoints

Method | Endpoint              | Description
GET    | /api/devices          | List all devices
POST   | /api/devices          | Create a new device
GET    | /api/sensor-readings  | List sensor readings
POST   | /api/readings         | Send a command to a device
POST   | /api/commands         | Send a command to a device





