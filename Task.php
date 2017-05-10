<?php
/**
 * Basic rule is to name the Class with Noun, but its not always true.
 * File name is same as Class name.
 * Classes are Blueprint for Objects.
 */
class Task {
    /**
     * Property in the class.
     * Public: anyone can access this property outside of the class.
     */
    // public $description = 'Go to the store';                 // Do NOT hard code properties in class.
    public $title;

    public $description;

    public $completed = false;          // set to false as most task are initially NOT completed.

    /**
     * The contents of this methods are immediately fired when a Object is created of this Class.
     * Task constructor.
     * @param $title        Task title
     * @param $description  Task description
     */
    public function __construct($title, $description)
    {
        // var_dump('called');
        /**
         * '$this' refers to the Object, so when an Object is created for this Class,
         * the Object will have its $title, $description property set with value carried by $title, $description
         * arguments
         */
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Think of a most Readable and Speakable way to name the function.
     * Here, $task->complete(), means we want the $task to be set its property $completed to 'true'.
     */
    public function complete()
    {
        $this->completed = true;
    }
}

/** Object are the Instances of a Class */

/*
 * Here, $task is an Object of Class Task
 * $task will have its $description property set to 'Learn OOP'
 */
$task = new Task('Learn OOP', 'To learn Object Oriented Programming.');
var_dump(($task->title));
var_dump($task->description);         // access the $description variable of the Task Class.
var_dump($task->completed);

$task2 = new Task('Pick up groceries', 'Go to market and do grocery');
$task2->complete(); // call complete() method when the task is completed.
var_dump(($task2->title));
var_dump($task2->description);
var_dump($task2->completed);