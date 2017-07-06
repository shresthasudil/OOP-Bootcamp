<?php
/**
 * Created by PhpStorm.
 * User: shresthasudil
 * Date: 7/6/17
 * Time: 11:16 AM
 */
namespace Acme;

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