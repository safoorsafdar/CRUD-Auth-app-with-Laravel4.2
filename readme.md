## CRUD And Authentication Application Laravel 4.2

CRUD And Authentication Application Laravel 4.2, is the demo web application that will enable to perform simple CRUD(Create,Read,Update and Delete) operation and Authentication. This application takes you through the in's and out's of the Laravel Framework, from basic to some advanced features. Either you're newbie to laravel or to MVC application structure, this tutorial provides you a great foundation.

#####Table of Contents
######Installing Lravel 4.2
- Server Requirement
- Installing Composer
- Creating Laravel Project

######Basic Laravel Components
- Creating A Migration
- Creating A Seeder
- Creating A Model
- Creating A Controll
    * Resource Controller
    * Implicit Controller
- Creating A View

####Installing Lravel 4.2
---
#####Server Requirement
Below are the list of requirement to configure Laravel Framework.
- PHP >= 5.4
- MCrypt PHP Extension
- MYSQL 5.5+ 
- Apache 2.2
- php5-json (if Not Exist)

Some of OS distributions may require you to install php json. When using Ubuntu, this can be install via `` apt-get install php5-json ``
#####Installing Composer
Laravel use Composer to manage their dependencies. When using Ubuntu, composer can be install via ``curl -sS https://getcomposer.org/installer | php ``. After installing composer you can use  `php composer`, and if you want to manage composer globally, this can be done via ``sudo mv composer.phar /usr/local/bin/composer``
#####Creating Laravel Project
Once composer configured correctly you can use it to install Laravel latest version, which can be done via `composer create-project laravel/laravel [Name] --prefer-dist`, Name attribute is the name of that project which is optional. Now if you visit laravel installed directory through apache host and under public which might look like 'http://localhost/installed_directory/public', if you see "You have arrived." text your project completely installed successfuly. But if you see "Error in exception handler." then you need to configure permission of app/storage directory which can be done via ``sudo chown -R :www-data app/storage && chmod -R 775 app/storage`` command.

####Basic Laravel Components
---
#####Creating A Migration
When started the work on Laravel latest release the mostly come accross point to handle Database directly from your application would be Migrations. Basically, Migrations allow us to manipulate with database and represent state of our application single table, and stay up to date on the current schema state. Migration are hard dependence to Laravel [Schema Builder](http://laravel.com/docs/schema) to easily manage your database schema.
Migration can be create via ``php artisan migrate:make [name]`` command which will create a file under ``app/database/migrations`` with the provided name.
<br>
Read More:[Creating Migration](http://laravel.com/docs/4.2/migrations#creating-migrations)
<br>Once you create a migration you need to run created migration, which can be done via Artisan Cli command ``php artisan migrate`` which will run all migration file under migration directory. If you want to run sepecific migraiont you can also define path of migration using following command ``php artisan migrate --path=app/foo/migrations/[fileName]``.
<br>Now your migrated table should available under your [Connected database](#). If you open your created migration file you will notice two method up and down under class with provided name. The Up method for define schema of your table using Schema Builder(I will cover example of it in authentication section) and down mehtod function for delete table.
<br>In some cases if you update your schema and you want to update these schema changes to your database, you need to refresh migration schema via ``php artisan migrate:refresh``.
<br>Read More:[Laravel Migrations](http://laravel.com/docs/4.2/migrations#introduction)
#####Creating A Seeder
Laravel Seeding Classess mechanism provides you to seeds your database table with test data which is store under ``app/database/seeds``. Seeder class only contain single method with run. By default DataBaseSeeder class defined, you just need to call your newly created seeder file in run mehtod. And your created seed file contain your dummy data to insert into your database table under run method.
<br>Once you create your seed file, you can run a command to make achuall changes to your database via ``php artisan db:seed`` which will run all seeders file under seeds directory, similar if you want to run sepecific seeder file, you can use ``php artisan db:seed --class=[Name]``.
<br>Read More: [Laravel Seeder](http://laravel.com/docs/4.2/migrations#database-seeding)
#####Creating A Model
Every database table has a corresponding "Model" which is help to interact with that table, which is can be implement laravel Eloquent ORM. Eloquent ORM provides very usefull active/record implementation working for your database. 
<br>Read More: [Laravel Eloquent ORM Model](http://laravel.com/docs/4.2/eloquent#introduction)
#####Creating A Controller
Controller helps us to define all route-level logic using Controller classes. In our example, we will use two different types of controllers. First one is Resource Controller and second one is Implicit Controllers.
**Resource Controller** help us to build restful controller around resources. With the help of Artisan CLI command ``php artisan controller:make [ControllerName]`` and the Routes ``Route::resource('[URIName]', '[ControllerName]');``.  More documentaion can found under Laravel [Resource Controller](http://laravel.com/docs/4.2/controllers#restful-resource-controllers)
**Implicit Controller** allow to manage all methods using single route `` Route::controller('[URIName]', '[ControllerName]');``for controller.
<br>Read More: [Laravel Controller](http://laravel.com/docs/4.2/controllers#basic-controllers)





### Contributing To Demo Application

**All issues and pull requests should be filed on the [safoorsafdar/CRUD-Auth-app-with-Laravel4.2](https://github.com/safoorsafdar/CRUD-Auth-app-with-Laravel4.2) repository.**

### License

This application is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


