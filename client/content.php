
<?php
if(isset($_GET['c']))
{
	if($_GET['c'] == "login" and isset($_SESSION['type']) and (isset($_SESSION['status'])))
	{
		print 'Login Successfull';
		header('Location:?=home');
	}
    else if($_GET['c']=="logout")
	{
		print "Log Out SucessFull";
		header('Location:?c=home');
	}
	else if($_GET['c'] == "signup")
	{
		include_once('client/signup.php');
	}
	else if($_GET['c'] == "signal")
	{
		if(isset($_SESSION['type']) and ($_SESSION['status']=="active"))
		{
			include_once('client/signal.php');	
		}
		if(isset($_SESSION['type']) and ($_SESSION['status']=="pending"))
		{
			print'<script language=javascript>
            alert("Please Wait for a While")
            </script>';
		}
		if(isset($_SESSION['type']) and ($_SESSION['status']=="expire"))
		{
			print'<script language=javascript>
            alert("You are expired please renew your package to see")
            </script>';			
		}
		
	}
	else
	{
		include_once("client/".$_GET['c'].".php");
	}
}
else
{
	include_once('client/home.php');	
}


?>
