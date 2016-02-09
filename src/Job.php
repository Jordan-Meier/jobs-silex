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


}




?>
