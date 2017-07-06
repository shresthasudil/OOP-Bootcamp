<?php
/**
 * Created by PhpStorm.
 * User: shresthasudil
 * Date: 7/6/17
 * Time: 8:37 AM
 */
require 'vendor/autoload.php';
use Acme\Person;
use Acme\Business;
use Acme\Staff;

$jeffery = new Person('Jeffery Way');   // A new Person
$staff = new Staff([$jeffery]);               // A new Staff with Person added to Staff member list.
$laracasts = new Business($staff);            // A new Business with $staff now associated with it.
$laracasts->hire(new Person('Jane Doe'));   // Business $laracasts hires Person $jeffery and lists in $staff.

var_dump($laracasts->getStaffMembers());        // Object Communication...