
<?php
print '<a href="?a=newsI">New Entry</a>';

if(isset($_GET['id']))
{
	$sql = "delete from news where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql = "select * from news";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Heading</th><th>Description</th><th>Date</th><th>Time</th><th> Edit</th><th> Delete</th></tr>';
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
	print '<td><a href="?a=newse&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=news&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>