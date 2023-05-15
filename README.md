

## About Spatie Laravel Permission Package

### Installing

#### Step 1: You can install the package via composer:
```
 composer require spatie/laravel-permission
 ```
#### Step 2 (Optional): The service provider will automatically get registered. Or you may manually add the service provider in your config/app.php file:

```
'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
];

```
#### Step 3: You should publish the migration and the config/permission.php config file with:

```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

#### Step 4: Clear your config cache


```
php artisan optimize:clear
 # or
 php artisan config:clear
```

#### Step 5: Run the migrations
```
php artisan migrate
```

#### Step 6: Add the necessary trait to your User model
```
// The User model requires this trait
use HasRoles;
```


### Basic Usage
#### Step 1: add the Spatie\Permission\Traits\HasRoles trait to your User model(s):

```
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
```

### Documentation
We can see this documentations and apply multiple functions.
https://spatie.be/docs/laravel-permission/v5/installation-laravel

### Video Tutorial
We can follow this tutorial.
https://www.youtube.com/watch?v=zIgYJlu03bI&list=PLe30vg_FG4OQ47ovsjgSSX5BZy_kqbuTO&index=8