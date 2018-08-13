<?php

$sql="select *from performance order by Date desc";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Date</th><th>EUR/USD</th><th>USD/JPY</th><th>GBP/USD</th><th>USD/CHF</th><th>Total Rate</th></tr>';
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
	print '<td>'.$s[6]=$s[2]+$s[3]+$s[4]+$s[5].'</td>';
	print '</tr>';
}
print '</table>';
?>