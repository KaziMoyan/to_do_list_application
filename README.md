
# To-Do List Application

To-Do List Application built with Laravel 11.

## Requirements
- laravel 11
- PHP >= 8.2.4
- Composer
- SQLite

## Setup

1. Clone the repository:
    ```sh
    git clone https://github.com/KaziMoyan/to_do_list_application.git
    cd to_do_list_application
    ```

2. Install dependencies:
    ```sh
    composer install
    ```

3. Set up environment variables:
    ```sh
    cp .env.example .env
    ```

4. Configure the `.env` file to use SQLite:
    ```ini
    DB_CONNECTION=sqlite
    DB_DATABASE=E:/xampp/htdocs/TO_DO_LIST/to_do_list_application/database/db.sqlite
    ```

5. Create the SQLite database file:
    ```sh
    touch database/database.sqlite
    ```

6. Run migrations:
    ```sh
    php artisan migrate
    ```

7. Serve the application:
    ```sh
    php artisan serve
    ```

## Usage

- Type `http://127.0.0.1:8000` in your web browser.
- create, read, update, and delete tasks using the provided form and buttons.

## Features

- Create ::: button you got first if you are new user u should first create a product for this seasson,after fillup the from you can submit your product deatils with info you must fillup everythying,if you sumit you can see that the product on your fornt page.

- Read ::: After create you can see your product details and read it .

- Edit and Update  :::: in edit option you can click edit button and edit any product info and update informaton .

- Delete :: if You want to delete any product from your databse please click Delete option .

## Code Quality and Best Practices

- Used Laravel 11 best practices.
- I Includes input validation to ensure data integrity.
- Also use Laravel 11 built-in features for routing, request handling, and database interactions.

## Contributing

If any doubt mail me please

## License

This project is open-source and available under the [MIT License](LICENSE).
