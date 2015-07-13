<?php
/*
 * $_POST will access the information submit from other page.
 * it id of the submit as index
 * $)SEVER will check if we got any information from the sever.
 * If we submit email or something then we can get POST and excuse this code.
 * Otherwise this code won't work
 * */
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $message=trim($_POST['message']);
//    valide your code if no information are entered correctly
    if($name=="" or $email=="" or $message==""){
        echo "you must specify for name,email or message";
        exit;
    }
    //check the validate of the form
    foreach ($_POST as $value){
        if(stripos($value,'Content-Type:')!=FALSE){
            echo "problem with information enter";
            exit;
        }
    }
    //Check if the hijack robot fill out this form and stop submission
    if ($_POST['address']!=""){
        echo "evil robot fill out this form";
        exit;
    }
    $information="";
    $information=$information."Name: ".$name."\n";
    $information=$information."Email: ".$email."\n";
    $information=$information."Message: ".$message."\n";
    //To Do:send email
    //After php code process, redirect the webpage to other page.
    //We want to redirect back to contact page and use if statement. So we set the status=thanks
    //to call the $_SEVER['status']=thanks
    header("location: contact.php?status=thanks");
    exit;
}
?>
<?php
$pageTittle="Contact Minh";
$section="contact";
include('inc/header.php'); ?>

    <div class="section page">
        <div class="wrapper">

            <h1>Contact</h1>
            <!--$_GET will check the variable at the end of web address from the above code. If we process the code then our status will exist and we can process the if statment-->
            <?php if(isset($_GET['status']) && $_GET['status']=='thanks'){ ?>
                <p>Thank for the email.I&rsquo;ll be in touch with you soon</p>
            <?php } else { ?>
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
                    <!--This will make sure user can't see this form to fill out and hijack robot will fill this out if they enter information-->
                    <tr style="display:none;">
                        <th>
                            <label for="address">Address</label>
                        </th>
                        <td>
                            <input type="text" name="address" id="address">
                            <p>Don't fill out this area</p>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Send">
            </form>
            <?php } ?>
        </div>
    </div>

<?php include('inc/footer.php'); ?>