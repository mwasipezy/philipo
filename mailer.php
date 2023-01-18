<?php
    $fromEmail=$_POST['mail'];
    $fromName=$_POST['name'];   
    $page=$_POST['page']; 
    $body=$_POST['body']; 
    $Subject=$_POST['otherinfor']; 
    
    $mailTo='helpdesk@culltek.com';
    $res='Success'; 
   
     $Headers  = "MIME-Version: 1.0\n";
     $Headers .= "Content-type: text/html; charset=iso-8859-1\n";
     $Headers .= "From: ".$fromName." <".$fromEmail.">\n";
     $Headers .= "Reply-To: ".$fromName."\n";
     $Headers .= "X-Sender: <".$fromEmail.">\n";
     $Headers .= "X-Mailer: PHP\n"; 
     $Headers .= "X-Priority: 1\n"; 
     $Headers .= "Return-Path: <".$fromEmail.">\n"; 
     
     if(strpos($Subject, 'Enterprise') !== false || strpos($Subject, 'Student') !== false ||strpos($Subject, 'Website') !== false)
     {
         $Subject=$Subject."Project";
     }
    
     if( strpos($page, 'Enterprise') !== false ||   strpos($page, 'Contact') !== false)
     {
          $body=$body."<br>"."Reguested from".$body;
     }
     if(mail($mailTo, $Subject, $body, $Headers) == false) {
         //Error
         $res= "Email failed";
     }
     echo $res;
?>