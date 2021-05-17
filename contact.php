<?php

$conn = mysqli_connect('localhost','root','','pratik_resume');
$error1 = '';
$error2 = '';
$error3 = '';
$success = '';

if(isset($_REQUEST['send'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    if(empty($name)){
        $error1 .= 'FilL you name';
        
    }
    if(empty($email)){
        $error2 .= 'Fill your email';
        
    }

    if(empty($message)){
        $error3 .= 'Fill your message';
        
    }
    
    
    if(!empty($name) and !empty($email) and !empty($message)){
        $query = "INSERT INTO resume_contact SET
                 name = '$name',
                 email = '$email',
                 message = '$message'";
        
        if(mysqli_query($conn, $query)){
            $success = 'Message send successfully';
        }
        
    }
    
    

}


?>
