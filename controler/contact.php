<?php
 declare(strict_types=1);

use PHPBook\Validate\Validate;

require 'config.php';

$from='';
$message='';
$errors=[];
$success='';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $from=$_POST['email'];
    $message=$_POST['message'];
    $errors['email']= Validate::IsEmail($from) ? '':'Email not valid';
    $errors['message']= Validate::IsText($message,1,1000)?'':'Please enter a message up to 1000 characters';
    $invalid=implode($errors);
    if($invalid)
    {
        $errors['warning']='Please correct the errors';

    }
    else
    {
        $subject="Contact form message sent from".$from;
        $email=new \PhpBook\Email\Email($email_config);
        $email->sendEmail($email_config['admin_email'],$email_config['admin_email'],$subject,$message);
        $success='Your message has been sent';
    }
    $data['navigation']=$cms->getCategory()->getAll();
    $data['from']=$from;
    $data['message']=$message;
    $data['errors']=$errors;
    $data['success']=$success;
    echo $twig->render('footer.php',$data);
}

