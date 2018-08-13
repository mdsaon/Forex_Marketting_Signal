<h1 align="center"> All Order Details</h1>
<?php
if(isset($_GET['id']))
{
	$sql = "delete from order where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select o.id,o.email,u.name as user,p.name as packageid,pk.name as packagetypeid,pt.name as paymentid,o.orderdate,o.approvedate,o.expiredate,o.status 
from orderdetails as o,user as u,package as p,packagetype as pk,payment as pt 
where o.userid=u.id and o.packageid=p.id and o.packagetypeid=pk.id and o.paymentid=pt.id and packagetypeid=4";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Payment Email</th><th>Name</th><th>Package</th><th>Package Type</th><th>Payment Method</th><th>Oder Date</th><th>Approve Date</th><th>Expire Date</th><th>Status</th><th>Edit </th><th>Delete</th></tr>';
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
	print '<td>'.$s[9].'</td>';
	print '<td><a href="?a=ordere&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=order&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>