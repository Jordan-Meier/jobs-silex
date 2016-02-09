<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";
    require_once __DIR__."/../src/Contact.php";


    $app = new Silex\Application();

    $app->get("/", function() {
        return "
            <!DOCTYPE html>
            <html>
                <head>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
                    <title>Post a Job Opening</title>
                </head>
                <body>
                    <div class='container'>
                        <h1>Post a Job Opening</h1>
                        <form action='/view_jobs'>
                            <div class='form-group'>
                                <label for='title'>Enter Job Title:</label>
                                <input id='title' name='title' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='description'>Enter Job Description:</label>
                                <input id='description' name='description' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='salary'>Enter Job Salary:</label>
                                <input id='salary' name='salary' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='name'>Enter Contact Name:</label>
                                <input id='name' name='name' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='email'>Enter Contact Email:</label>
                                <input id='email' name='email' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='number'>Enter Contact Phone #:</label>
                                <input id='number' name='number' class='form-control' type='text'>
                            </div>

                            <button type='submit' class='btn-success'>Submit</button>
                        </form>
                    </div>
                </body>
            </html>
            ";
    });

    $app->get("/view_jobs", function () {
        $new_contact = new Contact ($_GET['name'], $_GET['email'], $_GET['number']);
        $my_job = new Job($_GET['title'], $_GET['description'], $_GET['salary'], $new_contact);
        $current_contact = $my_job->getContact();

        //the line below would over ride any inputted name with Bob
        // $current_contact->setName("Bob");
        
        $contact_name = $current_contact->getName();
        $contact_email = $current_contact->getEmail();
        $contact_number = $current_contact->getNumber();
        $output= "<div class='row'>
                <div class='col-md-6'>
                    <p>Job Title: " . $my_job->getTitle() . "</p>
                    <p>Job Description: " . $my_job->getDescription() . "</p>
                    <p>Salary: " . $my_job->getSalary() . "</p>
                    <p>Contact Name: " . $contact_name . "</p>
                    <p>Contact Email: " . $contact_email . "</p>
                    <p>Contact Phone #: " . $contact_number . "</p>
                </div>
                ";
        return $output;

    });

    return $app;
?>
