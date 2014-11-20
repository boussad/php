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
      <?php 
		   include "connect.php";
		  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
		   $start_from = ($page-1) * 5;
		   $sql = "SELECT * FROM post ORDER BY date DESC ";
		   $rs_result = mysql_query ($sql,$con);
           while($row = mysql_fetch_array($rs_result))		   
		    {
			 $phpdate = strtotime( $row['date'] );
             $mysqldate = date( 'm/d/Y', $phpdate );
		     echo'<div class="comment">';
			 echo '<div class="mypost1">';
			 echo "<b>Posted By:</b>&nbsp;".$row['name'].",&nbsp;<font color='#0000FF'>".$row['subject']."</font>&nbsp;|&nbsp;<b>In:</b>&nbsp;".$mysqldate."<br /><br />";
			 echo "</div>";	 
		     echo '<div class="testimonial-cotes">'; 
			 echo "<p>".$row['post_txt']."&nbsp;&nbsp;&nbsp</p>";
			 echo "<form style='padding-left:20px;' methode='GET' action='commentblog.php'>";
			 echo "<input type='hidden' name='commentsubjectid' value=".$row['post_id']." />";
			 $resource = mysql_query("SELECT COUNT(post_id) FROM commentpost where post_id=".$row['post_id']);
             $count = mysql_result($resource,0);
			 echo "<a href='http://www.dynamic-computersma.com/tstone/commentblog.php?commentsubjectid=".$row['post_id']."&submit=Submit' ><p style='text-align:right; color:red'>(".$count.") comment</p></a>";
			 echo "</form>";
			 echo '</div>';
			 echo'</div>';
		    }
	       ?>   
  </div>
</div> 
  
<div class="footerwraper"> 
  <?php include "footermedia.php"?>    
</div>
</body>
</html>
