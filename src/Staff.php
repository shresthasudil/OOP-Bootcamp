<?php
/**
 * Created by PhpStorm.
 * User: shresthasudil
 * Date: 7/6/17
 * Time: 11:16 AM
 */
namespace Acme;
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