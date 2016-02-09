<?php
    class Contact
    {
        private $name;
        private $email;
        private $number;


        function __construct($contact_name, $contact_email, $contact_number)
        {
            $this->name = $contact_name;
            $this->email = $contact_email;
            $this->number = $contact_number;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setEmail($new_email)
        {
            $this->email = $new_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setNumber($new_number)
        {
            $this->number = $new_number;
        }

        function getNumber()
        {
            return $this->number;
        }

    }

?>
