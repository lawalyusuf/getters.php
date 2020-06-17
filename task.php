<?php
class Task 
{
    public $description;
    public function __construct($description)
    {

    $this->description = $description;
    }   

}
$task = new Task('Learn OOP <br>');
$task2 = new Task('This is my first code in OOP, Keep it up');
var_dump($task->description);
var_dump($task2->description);



?>