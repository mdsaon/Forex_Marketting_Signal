<?php
if(isset($_SESSION['type']))
{

	$sql="update orderdetails set status='pending',approvedate = null,expiredate = null, orderdate='".date('Y-m-d H:i:s')."' where userid='".$_SESSION['id']."'";
	
	$s=mysql_query($sql);
	if($s)
	{
		print 'You have succesfully done to renew your package';
		}
		else
		{
			print mysql_error();
			}
	}
	else
	{
		print 'You have a package already!';
		}


?>