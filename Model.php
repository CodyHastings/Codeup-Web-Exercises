<?php

class Model
{
    // Array to store our key/value data
    private $data = [];
    protected static $table;

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->data[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }
    public static function getTableName()
    {


    	return static::$table;

    }
}


// Open your Model class from the previous lesson. Add a new protected static property named $table. 
// This table property will be used to let our model know which database table we will be representing.

// In the Model class, add a static method named getTableName() that returns the value of the static property $table.

// Create a new file name User.php.

// In this new file, create a User class that extends Model. This class will be very simple, 
// and will only contain the overridden $table property, set to users.

// Test your User class by calling User::getTableName(). Did it return the string users? 
// In your parent Model class, did you use self:: or static::? Does switching them change the result?