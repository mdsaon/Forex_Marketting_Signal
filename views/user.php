
<?php
if(isset($_GET['id']))
{
	$sql = "delete from user where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select u.id,u.name,u.email,u.password,c.name as country,u.phone,u.date,u.status,u.type from user as u,country as c where u.countryid=c.id";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Name</th><th>Email</th><th>Password</th><th>Country</th><th>Phone</th><th>Date</th><th>Status</th><th>Type</th><th>Edit </th><th>Delete</th></tr>';
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
	print '<td>'.$s[3].'</td>';
	print '<td>'.$s[4].'</td>';
	print '<td>'.$s[5].'</td>';
	print '<td>'.$s[6].'</td>';
	print '<td>'.$s[7].'</td>';
	print '<td>'.$s[8].'</td>';
	print '<td><a href="?a=usere&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=user&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>