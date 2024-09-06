# Laravel API for Submission Processing

This Laravel project is designed to demonstrate handling submissions using a REST API that leverages Laravel's job queues, database operations, and event handling. The API endpoint accepts submissions and processes them asynchronously using a job queue.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed:
- PHP (>=7.4)
- Composer
- A Laravel-supported database system (MySQL, PostgreSQL, SQLite, etc.)

### Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/perseusprince070/newLaravel.git
   cd newLaravel
   ```

2. **Install dependencies**

   ```bash
   composer install
   ```

3. **Set up environment variables**

   Copy `.env.example` to `.env` and modify the environment variables according to your local setup.

   ```bash
   cp .env.example .env
   ```

   Update these entries in the `.env` file:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate an application key**

   ```bash
   php artisan key:generate
   ```

5. **Run migrations**

   This will create the necessary tables in your database.

   ```bash
   php artisan migrate
   ```

## Testing the API

To test the API endpoint, you can use tools like [Postman](https://www.postman.com/) or [cURL](https://curl.se/). Below are the steps to test using cURL:

1. **Start the Laravel development server**

   ```bash
   php artisan serve
   ```

   This will typically start the server on http://localhost:8000

2. **Make a POST request**

   Replace `localhost:8000` with your Laravel development server URL if different.

   ```bash
   curl -X POST http://localhost:8000/api/submit \
        -H "Content-Type: application/json" \
        -d '{"name": "John Doe", "email": "john.doe@example.com", "message": "This is a test message."}'
   ```

   This command sends a POST request to the API with a JSON payload containing the name, email, and message fields.

3. **Expected Response**

   You should receive a response indicating that the submission has been received and is being processed:

   ```json
   {
       "message": "Submission received and is being processed."
   }
   ``` 