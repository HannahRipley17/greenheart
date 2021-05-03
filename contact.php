<!DOCTYPE html>
<html lang="en">
    <?php
        include("headernohero.php");
    ?>
    <body>
        <div class="grid">
            <?php
                $currentPage = 'contact';
                include("nav.php");
            ?>
            <div class="main lilgrids contact">
                <div class="maincontent backrect">
                    <p class="blueheaders" id="changeme">Send your coordinator a message</p>
                    <p>Your coordinator will respond within two days.</p>
                    <p class="contactinfo"><a href="tel:7027487899">702-748-7899</a><br><br> <a href="mailto:host@exchangestudentslasvegas.com">host@exchangestudentslasvegas.com</a></p>
                    <form action="contactthanks.php" method="POST" class="formgrid" id="contactform">
                        <input type="text" name="name" placeholder="Full name">
                        <input type="text" name="email" placeholder="Email address">
                        <textarea name="message" cols="30" rows="10" placeholder="Type your message here..."></textarea>
                        <!-- <p id="submit" onclick="changeMe()">Send Your Message</p> -->
                        <input type="submit" name="submit" value="Send Your Message" id="submit">
                    </form>
                    
                </div>
            </div>
    <?php
        include("footer.php");
    ?>
</html>