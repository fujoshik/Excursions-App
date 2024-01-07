# Excursions-App Documentation

## Overview  
The Excursions App is a web application built using the Laravel framework. It aims to facilitate the management of excursions or trips, transports and organizers of the excursions, allowing users to create, view, update, and delete excursions. The application provides a user-friendly interface for both administrators and users to interact with excursion-related data.

## Features
### User Roles
- Admin: Has full control over excursions, organizers, transports, users, and other app functionalities.  
- User: Can view available excursions, book excursions, and manage their bookings.  

### Excursions
- Create Excursions: Admin can create new excursions with details like name, start date and time, duration, organizer, transport, image etc.  
- View Excursions: Users can browse through available excursions and view details.
- Search Excursions: Users can search excursions they are interested in attending.  

### Organizers
- Create Organizers: Admin can create new organizers with details like name, phone number and city.
- View Organizers: Users can browse through available organizers and view details.
- Search Organizers: Users can search organizers they are interested in.  

### Transports
- Create Transports: Admin can create new transports with details like vehicle and company name.
- View Transports: Users can browse through available transports and view details.
- Search Transports: Users can searcg transports they are interested in.  

### User Management
- Admin Dashboard: Admin can manage users, edit user details, etc.  
- User Profile: Users can manage their profile, update personal information, etc.  

## Installation
### Prerequisites
- PHP (Recommended version 7.4 or higher)
- Composer
- MySQL or any other compatible database

### Steps
1. Clone the Repository

```bash
git clone https://github.com/fujoshik/Excursions-App.git
```

2. Install Dependencies

```bash
cd excursions-app
composer install
```

3. Configure Environment Variables  
Create a .env file by copying .env.example and configure your database connection, mail settings, etc.

4. Run Migrations and Seed Data

```bash
php artisan migrate --seed
```

5. Start the Application

```bash
php artisan serve
```

6. Access the Application  
Visit http://localhost:8000 in your browser to access the Excursions App.

## Usage
### Admin Panel
- Access the admin dashboard by logging in with admin credentials.
- Create, view, update, or delete excursions.
- Create, view, update, or delete organizers.
- Create, view, update, or delete transports.

### User Interface
- Users can register or login.
- View available excursions and their details.
- Search excursions by start date, name, organizer name or transport.
- View organizers and their details.
- Search organizers by name.
- View transports and their details.
- Search transports by vehicle.

## Technologies Used
- **Laravel**: PHP framework for building the application.
- **MySQL**: Database to store excursion data.
- **Bootstrap**: Frontend styling and UI components.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
