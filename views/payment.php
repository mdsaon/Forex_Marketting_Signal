
<?php
print '<a href="?a=paymentI">New Entry</a>';







if(isset($_GET['id']))
{
	$sql = "delete from payment where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}







$sql = "select * from payment";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th> &nbsp; Name &nbsp; </th><th>&nbsp; Edit &nbsp;</th><th>&nbsp; Delete &nbsp; </th></tr>';
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
	print '<td>'.$s[1].'</td>';
	print '<td><a href="?a=paymente&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=payment&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>