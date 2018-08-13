<?php
if(isset($_POST['submit']))
{
	$sql = "select name,email, password from user where email = '".$_POST['email']."'";
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
		print "<hr>Name : ".$s[0]."<br>";
		print "Email : ".$s[1]."<br>";
		print "Password : ".$s[2]."<br><hr>";
	}
}

?><form name="form1" method="post" action="">
  <label>Enter Your Email
  <input name="email" type="text" id="email">
  </label>
  <label>
  <input name="submit" type="submit" id="submit" value="Submit">
  </label>
</form>
