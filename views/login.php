<?php
$email= "";
$password = "";


if(isset($_POST['btnlogin']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$sql = "select * from user where email = '".ms($email)."' and password = '".ms($password)."'";
	
	$r = mysql_query($sql);
	if(mysql_num_rows($r) > 0)
	{
		//print '<span class="sc">Login Successfull</span>';
		header('Location:?a=home');
		while($s = mysql_fetch_row($r))
		{
			$_SESSION['id'] = $s[0];
			$_SESSION['name'] = $s[1];
			$_SESSION['email'] = $s[2];
			$_SESSION['status']=$s[7];
			$_SESSION['type'] = $s[8];
			
		}
	}
}

if(isset($_GET['a']))
{
	if($_GET['a'] == "logout")
	{
		unset($_SESSION['id']);
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['status']);
		unset($_SESSION['type']);	
		
	}
}


?>
<div class="loginform">
<br />
<form name="form1" method="post" action="">
 Your Mail
    <br>
    <input type="text" name="email" id="username">
    <br>
  Password
  <br>
  <input type="password" name="password" id="password">
    <br><br />
  
<input type="submit" name="btnlogin" id="btnlogin" value="Log me in">
<input type="reset" name="btnReset" id="reset" value="Reset">
</form>
<br>
</div>