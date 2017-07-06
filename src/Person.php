<?php
/**
 * Created by PhpStorm.
 * User: shresthasudil
 * Date: 7/6/17
 * Time: 11:15 AM
 */
namespace Acme;

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}