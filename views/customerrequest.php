<h1 align="center"> All Order Details</h1>
<?php
if(isset($_GET['id']))
{
	$sql = "delete from support where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select s.id,u.name as user,s.name,s.email,c.name as country,s.phone,s.subject,s.message,s.date
from support as s,user as u,country as c 
where s.userid=u.id and s.countryid=c.id order by id desc";

$r = mysql_query($sql);
print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Username</th><th>Name</th><th>Email</th><th>Country</th><th>Phone</th><th>Subject</th><th>Message</th><th>Request Date</th><th>Delete</th></tr>';
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
	print '<td><a href="?a=customerrequest&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>