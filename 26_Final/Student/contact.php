<?php 
define('TITLE', 'Contact Us | Franklin\'s Fine Dining');
include('includes/header.php');
?>

<!--see notes for detailed explanation of using php here to submit form-->

<div id=-'contact'>
<hr>
<h1>Get In Touch With Us</h1>

<!--check to see if the submit button has been clicked by user-->
<!--if the user has clicked the submit button then we can start grabbing the information entered by the user on the form.--> 
<!--we collect the information entered by the user by creating a variable for each piece of information that we want to collect and we assign as value to each variable the attribute of the relevant html element  that we are collecting-->
<!--apply the trim function to name and email to tidy them up and to get rid of any whitespaces which may lead to errors, specifically email where it has to exactly match a mail-->
<?php

//check for header injections
function has_header_injection($str){
    return preg_match( "/[\r\n]", $str);
}
if (isset ($_POST['contact_submit'])) {
$name = trim( $_POST['name']);
$email = trim($_POST['email']);
$msg = $_POST['message'];

//Check to see if $name or $email have header injections
if (has_header_injection($name) || has_header_injection($email)) {
    die();  //if true, kill the script
}
if (!$name || !$email || !$msg){
    echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Please try again.</a>';
    exit;
}
//Add the recipient email to a variable
$to = 'hasan79.hoa@gmail.com';

//Create a subject
$subject = "$name sent you a message via your contact form";

//Construct the message
$message = "Name: $name\r\n";
$message .= "Email: $email\r\n";
$message .= "Message: \r\n$msg";

//Check to see if the subscribe box was checked - if the statement was checked, the statement 'subscribe' would have been sent from the POST collection and we double-check it by checking that the statement that was sent is 'subscribe'
if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
    //Add a new line to the message variable notifying that email should be added to mailing list
    $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
}
//format the message so as to give it a tidy appearance - this will take the long string of text that will be typed into message and wrap it to 72 characters per line
$message = wordwrap($message, 72);

//set the email headers into a variable - this lets email clients like gmail etc know the MIME version, content, if priority etc...
$headers = "MIME-Version: 1.0\r\n";
$headers .="Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $name <$email>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//Send the email
mail($to, $subject, $message, $headers)

?>
<!--Show success message after email has been sent-->
<h5> Thanks for contacting Franklin's!</h5>
<p>Please allow 24 hours for a response.</p>
<p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>
<?php } else { ?>

<form method='post' action=' ' id='contact_form'>
    <label for='name'>Your name</label>
    <input type='text' id='name' name='name'>

    <label for='email'>Your email</label>
    <input type='email' id='email' name='email'>

    <label for='message'>and your message</label>
    <textarea id='message' name='message'></textarea>

    <input type='checkbox' id='subscribe' name='subscribe' value='Subscribe'>
    <label for='subscribe'>Subscribe to newsletter</label>

    <input type='submit' class='button next' name='contact_submit' value='Send Message'>

</form>
<?php } ?>
<hr>

</div>


<?php
include('includes/footer.php');
?>