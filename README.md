# Laravel Application Setup

This guide will help you set up and run a Laravel application on your local machine.

## Prerequisites

Before you begin, make sure you have the following installed on your machine:

- [PHP](https://www.php.net/manual/en/install.php) (version 7.4 or higher)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/) (for Laravel Mix)
- [MySQL](https://dev.mysql.com/downloads/) or [SQLite](https://www.sqlite.org/download.html)

## Setup Instructions

1. **Clone the Repository:**

   ```bash
    git clone https://github.com/your-username/your-laravel-app.git
    cd your-laravel-app
    composer install
    php artisan key:generate
    npm install
    npm run dev
    php artisan serve
    ```

2. **Create a copy of file .env.example and name this file as .env**

3. **Set the database details and also create that database**
    ```bash
    php artisan migrate
    ```

4. **Run test server**
    ```bash
    php artisan serve
    ```