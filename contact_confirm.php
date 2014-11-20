<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamic Computer</title>
        <?php include "linktolinks.php" ?>
</head>
<body>
<div class="headerwraper">
   <?php include "toprectangle.php" ?>
   <?php include "topmenu.php" ?> 
</div>

<div class="mainpagewraper">
    <div class="maincontainer"> 
        <div class="testimonialrow">        
    <div class="commentcomtainer">             
           <?php  		
					    $to= 'boussad80@hotmail.com';
						$name_entry=$_GET['your_name'];
						$email_entry=$_GET['your_email'];
                        $subject =$_GET["subject"];
                        $message =$_GET["your_message"] ;
						$date_entry=date("Y-m-d");
						$headers = 'From:'.$email_entry."\r\n".
                                   'Reply-To:'.$email_entry. "\r\n" ;
					   if ($name_entry!="" && $email_entry!="" && $message!="" && $subject!="" )
					   {                                                  
                      if (mail($to, $subject, $message, $headers))
						  {
						   echo("<p>Thank You, Your Message successfully sent!</p>");
						  } 
							 else
							   {
							   echo("<p>Message delivery failed...</p>");
							   }
					    
					   }
					   
					  else {
						     echo "<center><h3 style='color:red'>Formular Not Completed, Please Try Again!</h3> </center>";
					       }
						 
						
					
					    
?>
           <br />
          
         </div> 
      </div>   
    </div>
</div> 
  
<div class="footerwraper"> 
  <?php include "footermedia.php"?>    
</div>
</body>
</html>
