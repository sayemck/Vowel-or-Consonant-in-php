<?php
	if(isset($_GET['submit'])){
		if ($_GET['char']=='a' || $_GET['char']=='e'|| $_GET['char']=='i' || $_GET['char']=='o'||
		$_GET['char']=='u')
		{
			print "Vowel";
		}
		else {
			print "Consonent";
			}
		}
?>
	
 
<form action="" method="get">
 
Enter Your number
<input type="text" name="char" id="char"/>
 
<input type="submit" name="submit" value="submit"/>
 
</form>