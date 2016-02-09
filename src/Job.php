<?php
class Job
{
    private $title;
    private $description;
    private $salary;


    function __construct($job_title, $job_description, $job_salary)
    {
        $this->title = $job_title;
        $this->description = $job_description;
        $this->salary = $job_salary;

    }

    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setDescription($new_description)
    {
        $this->description = $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setSalary($new_salary)
    {
        $this->salary = $new_salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    //
    // function setContact($new_contact)
    // {
    //     $this->contact = $new_contact;
    // }
    //
    // function getContact()
    // {
    //     return $this->contact;
    // }

}


?>
