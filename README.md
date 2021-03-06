# 🚀 Buechs.ch
 
---
 ## Table of contents

* Project information
* How to make it work?
    * 1. Clone the repository
    * 2. Install Composer dependencies
    * 3. Create a Database & customize the .env file
    * 4. Create the DB tables
    * 5. Create an admin User
    * 6. Explore the Application
---

## Project information
In the fifth semester of the Media Application major, a project was implemented. The following project deals with the realization of a universal online reservation system called Buechs. This covers different areas in which reservations are made. Special attention was paid to restaurants, sports grounds and corporate events.
The administration of the reservation possibilities was ensured with a backend.

## How to make it work?
### 1. Clone the repository
```
$ git clone https://github.com/sandroanderes/booking-system/
```
Then switch to the cloned directory.

### 2. Install Composer dependencies
```
composer install
```

### 3. Create a Database & customize the .env file
* Create a new MySQL Database
* Rename the (.env.example)-File to --> (.env)-File (it is located in the root directory)
* Modify the database configuration in the .env-File

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ExampleDBName // Your DB-Name here!
DB_USERNAME=ExampleDBUsername // Your DB-Username here!
DB_PASSWORD=ExamplePassword // Your DB-Password here!
```

### 4. Create the DB tables
```
php artisan migrate
```
If you want some sample data, there is a DataBase in the root directory called (laravel_test.sql)

### 5. Create an admin User
```
php artisan orchid:admin admin admin@admin.com password
```

### 6. Explore the Application
```
php artisan serve
```
Have fun!
