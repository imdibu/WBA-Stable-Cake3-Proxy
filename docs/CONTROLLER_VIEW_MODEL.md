# Tutorial - Create a new controller with a new model and persist changes to database tutorial

## 1. Create a new controller

In order to easily create the new controller and the new model we should use the included CLI script:

```bash
# Execute Cake2 shell using Cake3 shell proxy

cd [APPLCATION_ROOT]

php bin/cake.php cron bake
```

Simply choose to create a new controller, use the default database connection (just hit return).
The shell will list all controllers that the application already have and prompt user to enter a new controller.
After that simply hit return on with default answer for all following questions.

Let's call the controller ```Tutorial``` this will create a new file called ```TutorialController``` under 
```legacy\Project\app\Controller\TutorialController.php```

## 2. Create a view for our controller

The controller actions should also return some data to the client. Let's create the view file using the CLI:

```bash
cd [APPLCATION_ROOT]

php bin/cake.php cron bake
```

Specify that we would like to create a new View. Use the default database connection, input the name of our controller 
which is ```Tutorial```. Specify that we would like to build the view interactively, that we don't want to create the
default CRUD view files, no admin routing but we would like to create a view for our ```index``` action.

This will create a new file under: ```\legacy\Project\app\View\Tutorial\index.ctp```

## 3. Create a new model in Cake2

Now let's create new model, again with the help of the CLI script:

```bash
# Execute Cake2 shell using Cake3 shell proxy

cd [APPLICATION_ROOT]

php bin/cake.php cron bake
```

Choose to create a new model, use the default database connection and choose the name of the model, let's call it
```Tutorial``` also. Update table name or use the default table name provided. Continue anyway even if the table could
not be automatically detected. Set the primary key as ```id``` and choose to create the file.

The model will be available at ```legacy\Project\app\Model\Tutorial.php```.

Create a new table in the database by running the following query:

```sql
CREATE TABLE coats_tutorials
(
id int PRIMARY KEY IDENTITY (1,1) NOT NULL,
first_name varchar(255),
last_name varchar(255)
);
```

## 4. Create a new model in Cake3

Create the same model in Cake3, this model will handle the writing of data to the database. Again, use the CLI:

```bash
# Execute Cake3 shell

cd [APPLICATION_ROOT]

php bin/cake.php bake model Tutorial --table coats_tutorials
```

We've created a new model named Tutorial and we explicitly specified the database table to be used for this particular
model ```coats_tutorials```. Cake3 will analyze the table and will create the necessary validations for each filed.

## 5. Create the link between Cake2 models and Cake3 models

In order to save data using Cake3 models, we will have to create an additional proxy class that will handle the save for us:

```php
# src\Services\Models\TutorialProxy3.php
<?php

namespace App\Services\Models;

class TutorialProxy3 extends BaseModelProxy3
{
    public $model = 'Tutorial';
}
```

The name of the class should follow this simple rule:

```
[Cake2_Model_Name]Proxy3
```

While for the model public property we specify the name of the model in Cake3 that should handle the write.

```php
public $model = 'Tutorial';
```

## 6. Put our controller and model to work

Now that we have everything in place to save data to the database, we will create a new action called ```index```
where we will create new entry in the database and display the newly created primary key for the ```Tutorial``` model.

```php
# legacy\Project\app\Controller\TutorialController.php
public function index()
{
    $data = array(
        'first_name' => 'Test',
        'last_name' => 'Tutorial'
    );

    if (!$this->Tutorial->save($data)) {
        throw new Exception();
    }

    $this->set('tutorial', $this->Tutorial);
}
```

Also update the view to display the newly created tuple:

```php
# legacy\Project\app\View\Tutorial\index.ctp
<?php echo $tutorial->id ?>
```














