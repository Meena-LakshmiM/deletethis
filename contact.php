<?php
 
 $name = $_REQUEST['name'];
$city = $_REQUEST['city'];
$user_email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if(empty($name) || empty($city) || empty($user_email) || empty($message))
{
    echo "Please fill all the fields !!"
}else{
    mail("meenumanivannan712@gmail.com" , "Message" , $message ,"From : $name < $email >");
    echo "<script type= 'text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    <script>" ;
    

}

?>