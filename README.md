# 🚀 Buechs.ch
 
---
 ## Table of contents

* [Project information](#project-information)
---

## Project information
In the fifth semester of the Media Application major, a project was implemented. The following project deals with the realization of a universal online reservation system. This covers different areas in which reservations are made. Special attention was paid to restaurants, sports grounds and corporate events.
The administration of the reservation possibilities was ensured with a backend.


### 1. Clone
```
$ git clone https://github.com/sandroanderes/booking-system/
```
Then switch to the cloned directory.

### 2. Install Composer dependencies
```
php composer.phar install
```

### 3. Create a Database & customize the .env file
Change .env.example to --> .env and modify the database configuration.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ExampleDBName
DB_USERNAME=ExampleDBUsername
DB_PASSWORD=ExamplePassword
```

### 4. Create the DB tables
```
php artisan migrate
```

### 5. Create an admin User
```
php artisan orchid:admin admin admin@admin.com password
```

### 6. Explore the Application
Have fun!
