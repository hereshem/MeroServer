
<META http-equiv="refresh" content="5;URL=http://www.pi.hemshrestha.com.np">

<?php 
$errors = '';
$myemail = 'contact@hemshrestha.com.np';
if(empty($_POST['cnt_fname'])  ||
   empty($_POST['cnt_email']) ||
   empty($_POST['cnt_msg']))
{
    $errors .= "Error: all fields are required";
}
$name = $_POST['cnt_fname'];
$email_address = $_POST['cnt_email'];
$message = $_POST['cnt_msg'];
//if (!preg_match("/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email_address)){
//    $errors .= "\n Error: Invalid email address";
//}
if( empty($errors))
{
    $to = $myemail;
    $email_subject = "Request from : {$name}";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: {$name} \n ".
        "Email: {$email_address}\n Message \n {$message}";
    $headers = "From: {$myemail}\n";
    $headers .= "Reply-To: {$email_address}";
    if(mail($to,$email_subject,$email_body,$headers)){
      echo "Your request is on the progress now. We will reply you soon.";
    }
    else{
      echo "Error in submission.";
    }
}
else echo $errors;
?>
 
<br/><br/><br/>You will be redirected in 5 seconds.