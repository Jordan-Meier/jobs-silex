<?php
class Job
{
    private $title;
    private $description;
    private $salary;
    private $contact_name;
    private $contact_phone;

    function __construct($job_title, $job_description, $job_salary, $job_contact_name, $job_contact_phone)
    {
        $this->title = $job_title;
        $this->description = $job_description;
        $this->salary = $job_salary;
        $this->contact_name = $job_contact_name;
        $this->contact_phone = $job_contact_phone;

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

    function setContactName($new_contact_name)
    {
        $this->contact_name = $new_contact_name;
    }

    function getContactName()
    {
        return $this->contact_name;
    }

    function setContactPhone($new_contact_phone)
    {
        $this->contact_phone = $new_contact_phone;
    }

    function getContactPhone()
    {
        return $this->contact_phone;
    }
}


?>
