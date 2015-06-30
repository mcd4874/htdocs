<?php
/*
 * $_POST will access the information submit from other page.
 * it id of the submit as index
 * $)SEVER will check if we got any information from the sever.
 * If we submit email or something then we can get POST and excuse this code.
 * Otherwise this code won't work
 * */
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $information="";
    $information=$information."Name: ".$name."\n";
    $information=$information."Email: ".$email."\n";
    $information=$information."Message: ".$message."\n";
    //To Do:send email
    //After php code process, redirect the webpage to other page.
    header("location: contact-thank.php");
}
?>
<?php
$pageTittle="Contact Minh";
$section="contact";
include('inc/header.php'); ?>

    <div class="section page">
        <div class="wrapper">

            <h1>Contact</h1>

            <p>I&rsquor;d love to hear from you. Please complete the form to give us your information</p>

            <form method="post" action="contact.php">
                <table>
                    <tr>
                        <th>
                            <label for="name">Name</label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="email">Email</label>
                        </th>
                        <td>
                            <input type="text" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="message">Message</label>
                        </th>
                        <td>
                            <textarea name="message" id="message"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>

<?php include('inc/footer.php'); ?>