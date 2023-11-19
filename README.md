# My Car Service History

Welcome to the My Car Service History repository! This application, powered by the Laravel framework and Livewire, is designed to help you manage and keep track of your car's maintenance and service history in an organized manner. The app features a 3D model of your car, providing a visual representation along with essential information. It also allows you to log needed services, recommended intervals, and maintains a comprehensive service history for your vehicle.

## Key Features

- **Laravel Framework & Livewire**: Utilizing the power and simplicity of Laravel for robust backend development, and Livewire for dynamic frontend interactions.
- **SQLite Database**: The application uses SQLite as the database, ensuring lightweight and easy setup.
- **3D Car Model**: Visualize your car in a 3D model along with basic information.
- **Service Logging**: Keep track of needed services with details such as date, service type, recommended interval, last service date, and the next service date.
- **Service History**: Record and view the complete service history of your car, including date, service type, description, and cost.
- **CRUD Operations**: Enjoy full CRUD (Create, Read, Update, Delete) functionality to manage your car's information seamlessly.
- **Form Validations**: Ensure data accuracy with built-in form validations for a smooth user experience.
- **Authentication**: The app is secured with basic authentication, providing a secure environment for your car's data.
- **Super Admin**: A designated super admin account ensures proper access control and management capabilities.

## Getting Started

To run the application locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/my-car-service-history.git
    cd my-car-service-history
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Set up the database:

    ```bash
    # Replace with your database configuration
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials.

4. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```
5. For Laravel Breeze run:

    ```bash
    npm install
    npm run build
    ```

6. Run the development server:

    ```bash
    php artisan serve
    ```

    The application should be accessible at [http://localhost:8000](http://localhost:8000).

## Usage

1. Log in with your super admin credentials.
2. Explore the 3D model and basic car information.
3. Log needed services with details.
4. View and manage your car's service history.
5. Perform CRUD operations to keep your data up to date.

## Contributing

Contributions are welcome! If you have suggestions, bug reports, or feature requests, please create an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

Happy tracking your car's service history! 🚗✨
