<?php
print '<a href="?a=signaln">Insert New Item On Signal</a>';

if(isset($_GET['id']))
{
	$sql = "delete from signal where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}
$sql = "select s.id,s.buyPoint,s.pips,s.stopLoss,s.timeFrom,s.timeTill,c.name as currency,ca.name as category,s.sellPoint,s.takeProfit,s.dateFrom,s.dateTill from signal as s,currency as c,category as ca where s.currencyid=c.id and s.categoryid=ca.id and currencyid=7";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Currency</th><th>Category</th><th>Buy Point</th><th>Pips</th><th>Stop Loss</th><th>Time From</th><th>Time Till</th><th>Sell Point</th><th>Take Profit</th><th>Date From</th><th>Date Till</th><th>Edit</th><th>Delete</th></tr>';
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
	print '<td>'.$s[6].'</td>';
	print '<td>'.$s[7].'</td>';
	print '<td>'.$s[1].'</td>';
	print '<td>'.$s[2].'</td>';
	print '<td>'.$s[3].'</td>';
	print '<td>'.$s[4].'</td>';
	print '<td>'.$s[5].'</td>';
	print '<td>'.$s[8].'</td>';
	print '<td>'.$s[9].'</td>';
	print '<td>'.$s[10].'</td>';
	print '<td>'.$s[11].'</td>';
	print '<td><a href="?a=usdchfe&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=signal&id='.$s[0].'">Delete</a></td>';	
	print '</tr>';
}
print '</table>';
?>