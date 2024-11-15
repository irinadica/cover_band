<?php
$email_config=[
    'server' => 'smtp.mailgun.org',
    'port' => '587',
    'username' => 'postmaster@sandboxcf14be25d86e4765a79eb521a21db4ad.mailgun.org',
    'password' => '83a8f4b1ebe8b6c85a7d70d64eb3ee7c-07f37fca-16a4bea0',
    'security' => 'tls',
    'admin_email' => '101871uk@saeinstitute.edu',
    'debug' => (DEV) ? 2 : 0,
];

$phpmailer=new \PHPMailer\PHPMailer\PHPMailer(true);

$email= new Email($email_config);
$email->send_email($from,$to,$subject,$message);


