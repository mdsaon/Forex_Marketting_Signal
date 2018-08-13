
<?php
print '<a href="?a=packageI">New Entry</a>';







if(isset($_GET['id']))
{
	$sql = "delete from package where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}







$sql = "select * from package";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th> &nbsp; Name &nbsp; </th><th>Description</th><th>&nbsp; Edit &nbsp;</th><th>&nbsp; Delete &nbsp; </th></tr>';
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
	print '<td>'.$s[2].'</td>';
	print '<td><a href="?a=packagee&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=package&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>