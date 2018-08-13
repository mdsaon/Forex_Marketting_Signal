<?php
if(isset($_GET['a']))
{
	  if(($_GET['a']=="login") and (isset($_SESSION['type'])))
     {
		header('Location:?a=home');
		include_once("../views/home.php");
     }
	 else if(($_GET['a']=="logout"))
	 {
	    header('Location:?a=login');
	    include_once("../views/login.php");
	 }
     else
	 {
      include_once('../views/'.$_GET['a'].'.php');
	 }
}

else
{
   include_once("../views/home.php");
}
?>