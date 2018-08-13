<?php

print '<a href="?a=performanceI">New Entry for Currency Performance</a>';
print "<br>";
print '<a href="?a=commoditeperformance">Commodite Performance</a>';

if(isset($_GET['id']))
{
	$sql = "delete from performance where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql="select id,Date,EURUSD,USDJPY,GBPUSD,USDCHF from performance order by id desc";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>SL No<th>Date</th><th>EUR/USD</th><th>USD/JPY</th><th>GBP/USD</th><th>USD/CHF</th><th>Total Rate</th><th>Edit</th><th>Delete</th></tr>';
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
	print '<td>'.$s[2].'</td>';
	print '<td>'.$s[3].'</td>';
	print '<td>'.$s[4].'</td>';
	print '<td>'.$s[5].'</td>';
	print '<td>'.$s[6]=$s[2]+$s[3]+$s[4]+$s[5].'</td>';
	print '<td><a href="?a=performancee&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=performance&id='.$s[0].'">Delete</a></td>';
	print '</tr>';
}
print '</table>';
?>