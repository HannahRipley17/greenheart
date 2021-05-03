<!DOCTYPE html>
<html lang="en">
    <?php
        include("header.php");
    ?>
    <body>
        <div class="grid">
            <?php
            $currentPage = 'apply';
                include("nav.php");
            ?>
            <div class="applyhero lilgrids">
                <p class="herocaptionthing" id="herowordsapply">Application</p> 
                <p class="herocaptionthing" id="bigheroapply">Begin the Application Process</p> 
            </div>
            <div id="bluebar">
                <div > 
                    <a href="application.php" id="hostbutton">HOST NOW</a>
                </div>
            </div>
            <div class="main lilgrids">
                    <p class="headers">Begin the Application Process</p>
                    <div class="maincontent">
                        <p>
                            Fill out the questionnaire below.
                            When you have picked a student, your LC will begin the paperwork needed.    
                        </p>
                        <p>
                            Within 24 hours, you will receive an email with instructions on how to create an account, and a call from your Local Coordinator (LC) who will help you with any questions you have.
                        </p>
                        <p>
                            Once you have created your account, you will be able to begin the application process which includes providing two local references, background checks for everyone over 17 living in the home, pictures of your home and family, and other information about your family for your future student to see. We take the safety of our students seriously!
                        </p>
                        <p>
                            As you are working on this application, your LC will begin showing you student profiles based on your responses to the form you fill out here.
                        </p>
                        <p>
                            You will be able to talk to your student within a month! 
                        </p>
                        <p>
                            They can’t wait to meet you!
                        </p>
                        <br>
                        <form action="thankyoumobile.php" method="POST" class="applyformgrid">
                            <p class="blueheaders">Questionnaire</p>
                            <input type="text" name="full" placeholder="Full name">
                            <input type="text" name="email" placeholder="Email address">
                            <input type="text" name="phone" placeholder="Phone number">
                            <input type="text" name="address" placeholder="Address">
                            <input type="text" name="city" placeholder="City">
                            <input type="text" name="state" placeholder="State">
                            <input type="text" name="zip" placeholder="Zip code">

                            <div class="radio">
                                <p class="formheaders">What is your current marital status?</p>
                                <input type="radio" name="maritalstatus" value="Married" id="married">
                                <label for="married">Married</label><br>
                                <input type="radio" name="maritalstatus" value="Married - same sex" id="mss">
                                <label for="mss">Married- Same Sex</label><br>
                                <input type="radio" name="maritalstatus" value="Engaged" id="engaged">
                                <label for="engaged">Engaged</label><br>
                                <input type="radio" name="maritalstatus" value="Cohabiting" id="cohab">
                                <label for="cohab">Cohabitating</label><br>
                                <input type="radio" name="maritalstatus" value="Single Male" id="sm">
                                <label for="sm">Single Male</label><br>
                                <input type="radio" name="maritalstatus" value="Single Female" id="sf">
                                <label for="sf">Single Female</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">Do you have children?</p>
                                <input type="radio" name="children" value="Yes" id="yes">
                                <label for="yes">Yes</label><br>
                                <input type="radio" name="children" value="No" id="no">
                                <label for="no">No</label><br>
                                <input type="radio" name="children" value="Yes, live with me part time" id="ypt">
                                <label for="ypt">Yes, live with me part time</label><br>
                                <input type="radio" name="children" value="Yes, but live away from home" id="yla">
                                <label for="yla">Yes, but live away from home</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">Do you have any pets?</p>
                                <input type="radio" name="pets" value="Dogs" id="dogs">
                                <label for="dogs">Dog(s)</label><br>
                                <input type="radio" name="pets" value="Cats" id="cats">
                                <label for="cats">Cat(s)</label><br>
                                <input type="radio" name="pets" value="Fish" id="fish">
                                <label for="fish">Fish</label><br>
                                <input type="radio" name="pets" value="Birds" id="birds">
                                <label for="birds">Birds</label><br>
                                <input type="radio" name="pets" value="Reptiles" id="reptiles">
                                <label for="reptiles">Reptiles</label><br>
                                <input type="radio" name="pets" value="None" id="none">
                                <label for="none">None</label><br>
                                <input type="radio" name="pets" value="Other" id="other">
                                <label for="other">Other</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">What is your religion?</p>
                                <input type="radio" name="religion" value="Christian" id="christian">
                                <label for="christian">Christian</label><br>
                                <input type="radio" name="religion" value="Catholic" id="catholic">
                                <label for="catholic">Catholic</label><br>
                                <input type="radio" name="religion" value="Mormon" id="lds">
                                <label for="lds">Church of Jesus Christ of Latter-Day Saints</label><br>
                                <input type="radio" name="religion" value="Muslim" id="muslim">
                                <label for="muslim">Muslim</label><br>
                                <input type="radio" name="religion" value="Jewish" id="jewish">
                                <label for="jewish">Jewish</label><br>
                                <input type="radio" name="religion" value="Atheist" id="atheist">
                                <label for="atheist">Atheist</label><br>
                                <input type="radio" name="religion" value="Agnostic" id="agnostic">
                                <label for="agnostic">Agnostic</label><br>
                                <input type="radio" name="religion" value="None" id="none1">
                                <label for="none1">None</label><br>
                                <input type="radio" name="religion" value="Other" id="other1">
                                <label for="other1">Other</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">Is the religion of the student important to you?</p>
                                <input type="radio" name="religion2" value="Yes" id="yes2">
                                <label for="yes2">Yes, I would like them to share my faith</label><br>
                                <input type="radio" name="religion2" value="No" id="no2">
                                <label for="no2">No, I would be happy to host a student of any faith</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">Would you like a student who attends church with you?</p>
                                <input type="radio" name="church" value="Yes" id="yes1">
                                <label for="yes1">Yes</label><br>
                                <input type="radio" name="church" value="No" id="no1">
                                <label for="no1">No</label><br>
                                <input type="radio" name="church" value="No preference" id="nop">
                                <label for="nop">No preference</label><br>
                            </div>
                            <div class="radio">
                                <p class="formheaders">Do you have a gender preference?</p>
                                <input type="radio" name="gender" value="Female" id="female">
                                <label for="female">Female</label><br>
                                <input type="radio" name="gender" value="Male" id="male">
                                <label for="male">Male</label><br>
                                <input type="radio" name="gender" value="No preference" id="nope">
                                <label for="nope">No preference</label><br>
                            </div>

                            <p id="label">Is there anything else we should take into consideration when presenting student profiles to you? (Hobbies, dietary preferences, age, etc.?)</p>
                            <textarea name="specialrequests" cols="30" rows="10" placeholder="Type here"></textarea>
                            <input type="submit" id="applysubmit" name="submit" value="Submit Application">
                            <!-- <a href="thankyoumobile.php" id="applysubmit">Submit Application</a>  -->
                        </form>
                        <br>
                        <br>
                    </div>
            </div>
    <?php
        include("footer.php");
    ?>
</html>