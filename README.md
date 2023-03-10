# Gaming Cafe Management System
This is a web-based management system designed for gaming cafes. It provides features for users to book PCs, view available games, and see popular games and PCs. Admins have access to additional features including game and PC management, user management, package management, and reservation management. The frontend is created using HTML, CSS, and JavaScript, while the backend is built on Laravel and the database used is MySQL.

### Features
##### User Features
- Book PCs
- View available games
- View popular games and PCs
##### Admin Features
- Game management
- PC management
- User management
- Package management
- Reservation management

### Screenshots
Here are a few screenshots of the system:

#### Home page
![ScreenShot](/screenshots/img1.jpg)
#### Admin page
![ScreenShot](/screenshots/img2.jpg)
#### User page
![ScreenShot](/screenshots/img3.jpg)
![ScreenShot](/screenshots/img4.jpg)

### Installation
To install this system, follow these steps:

- Clone this repository to your local machine.
- Install dependencies using composer install.
- Create a .env file by copying the .env.example file.
- Generate an application key using php artisan key:generate.
- Configure your database settings in the .env file.
- Migrate the database using php artisan migrate.
- Seed the database using php artisan db:seed.

### Usage
To use this system, simply start the Laravel development server using php artisan serve. You can then access the system by visiting http://localhost:8000 in your web browser.

### License
This project is licensed under the MIT License. See the LICENSE file for details.
