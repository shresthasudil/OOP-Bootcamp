<?php
/**
 * Created by PhpStorm.
 * User: shresthasudil
 * Date: 7/6/17
 * Time: 8:37 AM
 */

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

/**
 * Business depends upon Staff to run, so we need a Staff to create a new Business.
 * Business hires Person.
 *
 * Class Business
 */
class Business {

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Business hires Person.
     * @param Person $person
     */
    public function hire(Person $person)
    {
        // add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }

}

/**
 * Business hires Person, when Person joins they are Staff
 * Is the Business be responsible for handling and tracking its staff? NO, so make Staff class
 * Class Staff
 */
class Staff {
    protected $members = [];

    /**
     * Staff constructor.
     * Make Staff with or without members.
     * @param array $members
     */
    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$jeffery = new Person('Jeffery Way');   // A new Person
$staff = new Staff([$jeffery]);               // A new Staff with Person added to Staff member list.
$laracasts = new Business($staff);            // A new Business with $staff now associated with it.
$laracasts->hire(new Person('Jane Doe'));   // Business $laracasts hires Person $jeffery and lists in $staff.

var_dump($laracasts->getStaffMembers());        // Object Communication...