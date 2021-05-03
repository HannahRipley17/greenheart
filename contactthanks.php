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
            <div class="main lilgrids contact">
                <div class="maincontent backrect">
                    <p class="blueheaders" id="changeme">Thanks for sending a message to your coordinator!</p>
                    <p>Your coordinator will respond within two days.</p>
                    <p class="contactinfo"><a href="tel:7027487899">702-748-7899</a><br><br> <a href="mailto:host@exchangestudentslasvegas.com">host@exchangestudentslasvegas.com</a></p>
                    <?php 
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        
                        $msg = "Name: " . $name .  "\n Email: " . $email .  "\n Message: " . $message;
                        if ($_POST['submit']) {
                            $msg = wordwrap($msg, 100);
                            mail("hannah.ripley@dmail.dixie.edu", "Contact Form", $msg);
                            echo "<script> changeMe(); </script>";
                        }
                    ?>
                </div>
            </div>
    <?php
        include("footer.php");
    ?>
</html>