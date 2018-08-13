<div class="client_content">
<br />
<h1 align="center">User Profile</h1>
<?php
$sql = "select u.id,u.name,u.email,u.password,c.name as country,u.phone from user as u,country as c where u.countryid=c.id and u.id=" .$_SESSION['id'];
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Name</th><th>Email</th><th>Password</th><th>Country</th><th>Phone</th><th>Edit Info</th></tr>';
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
	print '<td><a href="?c=profilee&id='.$s[0].'">Edit</a></td>';
	print '</tr>';
}
print '</table>';
?>
</div>