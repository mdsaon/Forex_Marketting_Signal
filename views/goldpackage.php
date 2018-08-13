
<?php
print '<a href="?a=goldpackageI">New Entry For GoldPackage</a>';

if(isset($_GET['id']))
{
	$sql = "delete from goldpackageservice where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select pds.id,p.description as package,pds.trial,pds.standard,pds.premium from goldpackageservice as pds,package as p where pds.descriptionid=p.id";
$r = mysql_query($sql);

print '<h1 align="center">Signal Package</h1>';
print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Description</th><th>Trail</th><th>Standard</th><th>Premium</th><th> Edit</th><th> Delete</th></tr>';
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
	print '<td><a href="?a=goldpackagee&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=goldpackage&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>