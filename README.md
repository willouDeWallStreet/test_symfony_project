# test_symfony_project
This is test of Symfony 4

## Start app
```
php bin/console server:run
```

## Clone & install a Symfony app from Github
```
git clone ...
cd my-project
composer install
```

## Code
### Create an entity
```
php bin/console make:entity
```

-> User

(add fields to this entity class)

-> username 

...

### Connect app to DB (MySQL) 
```
composer require doctrine maker
```

and 

Go to .env file and enter your DB information --> 

    DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

**OR**

In .env file create constants instead of DATABASE_URL :

    DATABASE_USER=your_db_username
    DATABASE_PWD=your_db_password
    DATABASE_NAME=your_db_name

And go to : config/packages/doctrine.yaml

    doctrine:

        dbal:

            # configure these for your database server
            driver: 'pdo_mysql'
            server_version: '5.7'
            charset: utf8mb4
            host: 127.0.0.1
            port: 3306
            user: '%env(DATABASE_USER)%'
            password: '%env(DATABASE_PWD)%'
            dbname: '%env(DATABASE_NAME)%'
            #default_table_options:
                #charset: utf8mb4
                #collate: utf8mb4_unicode_ci           
            #url: '%env(resolve:DATABASE_URL)%'

### Create an entity table in your DB

```
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
```

### Create a fixture
Fixtures are used to load a "fake" set of data into a database that can then be used for testing or to help give you some interesting data while you're developing your application.
```
composer require --dev doctrine/doctrine-fixtures-bundle
php bin/console make:fix
```
In this app, I called it : `UserFixture`
