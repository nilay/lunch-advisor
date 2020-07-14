# About Lunch Advisor


## Requirement
* **OS**: Ubuntu 16.04 LTS or higher / Windows 7 or Higher (WampServer / XAMPP) /  MacOS Catalina .
* **PHP**: 7.2.0 or higher.
* **For MySQL users**: 8.0 or higher.
* **For MariaDB users**: 10.2.7 or Higher.
* **Composer**: 1.6.5 or higher.


## Installation
* checkout: 
* create database 
* cd to project directory
* copy `.env.example` file to `.env` and put require credential 

```bash
composer insrtall
php artisan migrate
php artisan serve
```

** Access the API **
> http://localhost:8000/lunch



## File to review
* ** app/Models/Recipe.php **
* ** app/Controller/LunchController.php **
* ** tests/Unit/RecipeTest.php **




## Test
To run your tests, execute the phpunit or artisan test command from your terminal

```bash
php artisan test
```
