# Todo App with Livewire

![Demo](demo.gif)  <!-- Add a demo GIF or screenshot of your app here -->

A simple Todo app built with Laravel Livewire, featuring user authentication, task management, and task history. This application allows users to create an account, log in, view their tasks, and more.

## Features

- User Authentication: Users can create an account and log in securely.
- Task Management: 
  - ~~Add~~, ~~Edit~~, ~~and Delete~~ tasks effortlessly. (Note: In progress)
- Task History: 
  - View ~~and restore deleted tasks~~. (Note: In progress)

## Technologies Used

- Laravel: A powerful PHP framework.
- Livewire: A full-stack framework for Laravel that makes building dynamic interfaces simple.
- MySQL: A popular relational database for storing task data.

## Requirements

Before you begin, ensure you have met the following requirements:

- **PHP**: PHP 8.1.0 or higher.

- **Composer**: You can download it from [getcomposer.org](https://getcomposer.org/).

- **Database**: MySQL, PostgreSQL, SQLite, and SQL Server. You will need to update your `.env` file with the necessary database connection information.

- **Node.js and npm**: If you plan to compile and manage front-end assets using Laravel Mix, you will need Node.js and npm. You can download Node.js from [nodejs.org](https://nodejs.org/).

## Installation

1. Clone this repository: `git clone https://github.com/your-username/todo-app.git`
2. Navigate to the project directory: `cd todo-app`
3. Install the required dependencies: `composer install`
4. Create a `.env` file by copying the example: `cp .env.example .env`
5. Generate a new application key: `php artisan key:generate`
6. Configure your database connection in the `.env` file.
7. Run database migrations: `php artisan migrate`
8. Run database seeders: `php artisan db:seed`
9. Start the Node development: `npm run dev`
10. Start the development server: `php artisan serve`

## Star the Repository

If you find this project useful, please consider giving it a star on GitHub to show your support!

[![GitHub Repo](https://img.shields.io/github/stars/your-username/todo-app.svg?style=social)](https://github.com/GalangHanafi/Todo)

<!-- ## Contributing

Contributions are welcome! Please follow these steps to contribute to the project:

1. Fork this repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them.
4. Push your branch to your forked repository.
5. Submit a pull request. -->

<!-- ## License

This project is open-source and available under the [MIT License](LICENSE.md). -->

## Contact

If you have any questions or need further assistance, please contact [Galang Hanafi](mailto:galanghanafi9131@gmail.com).

Happy coding!
