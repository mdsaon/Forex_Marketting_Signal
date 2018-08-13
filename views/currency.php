<?php

print '<a href="?a=currencyI">New Entry</a>';

if(isset($_GET['id']))
{
	$sql = "delete from currency where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<span class="sc">Data Deleted</span>';
	}
}

$sql = "select id,name from currency";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>SL No<th>Name</th><th>Edit</th><th>Delete</th></tr>';
$f = 0;
while($s = mysql_fetch_row($r))
{
	if($f == 0)
	{
		print '<tr class="default">';
		$f = 1;
	}
	else
	{
		print '<tr class="alternate">';
		$f = 0;
	}
	print '<td>'.$s[0].'</td>';
	print '<td>'.$s[1].'</td>';
	//if(isset($_SESSION['type']))
	//{
		print '<td><a href="?a=currencye&id='.$s[0].'">Edit</a></td>';
		//if($_SESSION['type'] == "A")
		//{
		print '<td><a href="?a=currency&id='.$s[0].'">Delete</a></td>';	
	//	}
	//}	
	print '</tr>';
}
print '</table>';
?>