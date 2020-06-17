<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> <h3>
    <?php 
    echo "Getters and Setters in PHP <br> This code get the days value of the person for certain years <br>";
        class Person // for person object, a name is given
        {
            public $name; // This is the properties of the name assign
            public $age;
            public function __construct($name) // This is use to ctraete the new person object name
            {
              $this->name =$name; // Name assign
            }
            // Getters & Setters: This for security measure and protection

            public function getAge()
            {
                return $this ->age * 365; // just to return the properties
            }

            public function setAge($age) //setter method and it property name
            {
                if (age < 18)
                {
                    throw new Exception("Person is not old enough.");
                } 
                $this->age = $age; // age assign
            }

        }
        $lawal = new Person ('Lawal Owolabi <br>');
        $lawal->age = 31; // to assign the properties of age
        //$lawal->setAge(35);
        //var_dump($lawal);
        var_dump($lawal->getAge()); // to return a certain properties 
    ?>
</body>
</html>