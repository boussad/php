<?php $con=mysql_connect("xxxxxxxx.com","dbname","pwd");
				if (!$con)
				{
					die("could not connect".mysql_error());
				} 
				mysql_select_db("xxxxxx",$con);
?>
