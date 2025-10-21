# Catalog API(Developed By Rupak Manna and this readme file creation time i will take help with chatgpt for better documentation)

A RESTful API built with Laravel for managing an e-commerce catalog with categories and items. The API provides endpoints for user authentication, category listing, and item management with filtering, sorting, and pagination capabilities.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- XAMPP (or similar local development environment)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/rupak12/claravel.git
   cd claravel
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```

4. Configure your database settings in `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

## API Endpoints

### Authentication
- **Register**: `POST /api/auth/register`
  ```json
  {
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password",
    "password_confirmation": "password"
  }
  ```

- **Login**: `POST /api/auth/login`
  ```json
  {
    "email": "john@example.com",
    "password": "password"
  }
  ```

### Categories
- **List Categories**: `GET /api/categories`
  - Returns a list of all categories

### Items
- **List Items in Category**: `GET /api/categories/{category:slug}/items`
  - Parameters:
    - `page`: Page number (default: 1)
    - `per_page`: Items per page (default: 10, max: 50)
    - `q`: Search by item name
    - `min_price`: Minimum price filter
    - `max_price`: Maximum price filter
    - `sort`: Sort items by
      - `price_asc`: Price ascending
      - `price_desc`: Price descending
      - `name_asc`: Name ascending
      - `name_desc`: Name descending

## Examples

### Authentication
1. Register a new user:
   ```bash
   curl -X POST http://your-domain/api/auth/register \
     -H "Content-Type: application/json" \
     -d '{"name":"John Doe","email":"john@example.com","password":"password","password_confirmation":"password"}'
   ```

2. Login:
   ```bash
   curl -X POST http://your-domain/api/auth/login \
     -H "Content-Type: application/json" \
     -d '{"email":"john@example.com","password":"password"}'
   ```

### Using the API
1. List all categories:
   ```bash
   curl http://your-domain/api/categories
   ```

2. List items in a category with filters:
   ```bash
   curl "http://your-domain/api/categories/electronics/items?page=1&per_page=20&sort=price_desc&min_price=100"
   ```

## Database Schema

### Categories Table
- `id`: Primary key
- `name`: Category name
- `slug`: URL-friendly version of name
- `description`: Category description
- `created_at`: Timestamp
- `updated_at`: Timestamp

### Items Table
- `id`: Primary key
- `category_id`: Foreign key to categories
- `name`: Item name
- `description`: Item description
- `price`: Decimal price
- `sku`: Unique stock keeping unit
- `stock`: Available stock quantity
- `created_at`: Timestamp
- `updated_at`: Timestamp

## Development

### Running Tests
```bash
php artisan test
```

### Code Style
The project follows PSR-12 coding standards. To check coding style:
```bash
./vendor/bin/pint
```

## Security
All API endpoints for managing items are protected with Laravel Sanctum authentication. Users must register and obtain an API token to access protected endpoints.

