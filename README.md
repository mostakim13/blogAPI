**# 🚀 Laravel 10 Coding Round API Project

This project is a demonstration of three essential API features using **Laravel 10**, built as part of a coding round test.

### ✅ Features Implemented

1. **Blog Post CRUD API**
    - Create a blog post
    - List all posts
    - View a single post by ID

2. **User Registration API**
    - Register a new user with validation
    - Password hashing using Laravel’s `Hash` facade

3. **Task Management API**
    - Create new tasks
    - Mark tasks as completed
    - View all pending tasks

---

## 📂 Folder Structure

- `app/`
    - `Http/Controllers/Api/` → Contains API controllers (`PostController`, `AuthController`, `TaskController`)
    - `Models/` → Contains Eloquent models (`Post`, `User`, `Task`)
- `database/migrations/` → Table structures for `posts`, `users`, `tasks`
- `routes/api.php` → All API routes are defined here

---

## ⚙️ Requirements

- PHP >= 8.1
- Composer
- MySQL or SQLite
- Laravel 10

---

## 🛠️ Installation Steps

Follow these steps to set up and run the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/mostakim13/blogAPI.git
cd blogAPI
```
---
### Install Dependencies
`composer install`

### Set Up Environment
```
cp .env.example .env
php artisan key:generate
```

### Edit your .env and configure your database connection:
```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog-api
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migrations
`php artisan migrate`

### Serve the Application
`php artisan serve`
