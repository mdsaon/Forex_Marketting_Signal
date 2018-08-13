<div class="performance_currency">
<br/>
<h6>Day Performance</h6>
<?php
print '<center>';
$sql="select * from performance order by date desc";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th align="center">Date</th><th align="center">EUR/USD</th><th align="center">USD/JPY</th><th align="center">GBP/USD</th><th align="center">USD/CHF</th><th align="center">Total Rate</th></tr>';
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
	print '<td align="center">'.$s[1].'</td>';
	print '<td align="center">'.$s[2].'</td>';
	print '<td align="center">'.$s[3].'</td>';
	print '<td align="center">'.$s[4].'</td>';
	print '<td align="center">'.$s[5].'</td>';
	print '<td align="center">'.$s[6]=$s[2]+$s[3]+$s[4]+$s[5].'</td>';
	print '</tr>';
}
print '</table>';
print '<br/>';
print '</center>';
?>
</div>