
<?php
print '<a href="?a=packagedetailsI">New Entry</a>';

if(isset($_GET['id']))
{
	$sql = "delete from packagedetails where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select p.id,p.duration,p.price,pk.name as package,pkt.name as packagetype from packagedetails as p,package as pk,packagetype as pkt where p.packageid=pk.id and p.packagetypeid=pkt.id";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Package</th><th>Duration</th><th>Price</th><th>PackageType</th><th> Edit</th><th> Delete</th></tr>';
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
	print '<td>'.$s[3].'</td>';
	print '<td>'.$s[1].'</td>';
	print '<td>'.$s[2].'</td>';
	print '<td>'.$s[4].'</td>';
	print '<td><a href="?a=packagedetailse&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=packagedetails&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>