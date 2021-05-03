<!DOCTYPE html>
<html lang="en">
    <?php
        include("headernohero.php");
    ?>
    <body>
        <div class="grid">
            <?php
                include("nav.php");
            ?>


        <?php 
            $name = $_POST['name'];
            echo $name;
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];

            $maritalstatus = $_POST['maritalstatus'];
            $children = $_POST['children'];
            $pets = $_POST['pets'];
            $religion = $_POST['religion'];
            $religion2 = $_POST['religion2'];
            $church = $_POST['church'];
            $gender = $_POST['gender'];

            $specialrequests =  $_POST['specialrequests'];

            $msg = "Name:" . $name .  "\n Email:" . $email .  "\n Phone #:" . $phone .  "\n Address:" . $address .  "\n City:" . $city .  "\n State: " . $state .  "\n ZIP:" . $zip .   "\n Marital Status: " . $maritalstatus .  "\n Children Status: " . $children .  "\n Pets: " . $pets .  "\n Host religion: " . $religion . "\n Religion of student: " . $religion2 .  "\n Wants student to go to church with them: " . $church .  "\n Gender preference: " . $gender . "\n Special requests or comments: " . $specialrequests;
            if ($_POST['submit']) {
                mail("hannah.ripley@dmail.dixie.edu", "New Application", $msg);
                mail("bridgetteren@gmail.com", "New Application", $msg);
            }
        ?>


            <div class="main lilgrids">
                <div class="maincontent">
                    <p class="blueheaders">Thank You!</p>
                    <p>Thank you for submitting your application! Your application has been received.</p>
                    <p> Within 24 hours you will receive an email with information on how to log on to the official CCI Greenheart page. You will also receive a call from your Local Coordinator (LC) to answer any additional questions you may have.</p>
                    <p>Once you have logged into your account, you can begin the application process which involves 2 local references, background checks for everyone over 17 living in the home, pictures of your home and family, and other information about your family for your future student to see.</p>
                    <p>As you are working on your application, your LC will begin showing you student profiles for you to look over until you find one that is a good fit for your family.</p>
                    <p>If you are considering a student, your LC can put a hold on him/her that lasts for 5 days until you are sure you’re ready to host.</p>
                    <p>Once you are sure you have found the right student, let your LC know. He/she will begin the process of getting approval from Clark County School District and compiling all the paperwork needed to finalize the process.</p>
                    <p>Normally within a month you will be able to communicate directly with your future exchange student!
                    <p>Feel free to contact your local Coordinator Bridgette Luman anytime at host@exchangestudentslasvegas.com or through the <a href="contact.html">contact page.</a></p>
                </div>
            </div>
            
    <?php
        include("footer.php");
    ?>
</html>