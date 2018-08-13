<?php

print '<a href="?a=performanceIC">New Entry for Commodite Performance</a>';
print "<br>";


if(isset($_GET['id']))
{
	$sql = "delete from performance where id = ".$_GET['id'];
	if(mysql_query($sql))
	{
		print '<div class="sc">Data Deleted !!!</div>';
	}
}

$sql="select id,Date,EURUSD,USDJPY,GBPUSD,USDCHF,Gold,Oil,EROJPY,Silver,USDDKK,AUDJPY,EURJPY,CHFJPY,GBPJPY,CADJPY,EURGBP,USDCAD,AUDUSD,NUZUSD,AUDCAD from performance";
$r = mysql_query($sql);
print '<br/>';
print '<table class="" align="center" border="1" style="font-size:13px">';
print '<tr class="" ><td>SL.</td><td>Date</td><td style="font-size:9px">EUR/USD</td><td>USD/JPY</td><td>GBP/USD</td><td>USD/CHF</td><td>Gold</td><td>Oil</td><td>ERO/JPY</td><td>Silver</td><td>USD/DKK</td><td>AUD/JPY</td><td>EUR/JPY</td><td>CHF/JPY</td><td>GBP/JPY</td><td>CAD/JPY</td><td>EUR/GBP</td><td>USD/CAD</td><td>AUD/USD</td><td>NUZ/USD</td><td>AUD/CAD</td><td>Total</td><td>Edit</td><td>Delete</td></tr>';
$f = 0;
while($s = mysql_fetch_row($r))
{
	/*if($f == 0)
	{
		print '<tr class="default">';
		$f = 1;
	}
	else
	{
		print '<tr class="alternate">';
		$f = 0;
	}*/
	print '<td>'.$s[0].'</td>';
	print '<td>'.$s[1].'</td>';
	print '<td>'.$s[2].'</td>';
	print '<td>'.$s[3].'</td>';
	print '<td>'.$s[4].'</td>';
	print '<td>'.$s[5].'</td>';
	print '<td>'.$s[6].'</td>';
	print '<td>'.$s[7].'</td>';
	print '<td>'.$s[8].'</td>';
	print '<td>'.$s[9].'</td>';
	print '<td>'.$s[10].'</td>';
	print '<td>'.$s[11].'</td>';
	print '<td>'.$s[12].'</td>';
	print '<td>'.$s[13].'</td>';
	print '<td>'.$s[14].'</td>';
	print '<td>'.$s[15].'</td>';
	print '<td>'.$s[16].'</td>';
	print '<td>'.$s[17].'</td>';
	print '<td>'.$s[18].'</td>';
	print '<td>'.$s[19].'</td>';
	print '<td>'.$s[20].'</td>';
	//print '<td>'.$s[21].'</td>';
	print '<td>'.$s[21]=$s[2]+$s[3]+$s[4]+$s[5]+$s[6]+$s[7]+$s[8]+$s[9]+$s[10]+$s[11]+$s[12]+$s[13]+$s[14]+$s[15]+$s[16]+$s[17]+$s[18]+$s[19]+$s[20].'</td>';
	print '<td><a href="?a=commoditeperformancee&id='.$s[0].'">Edit</a></td>';
	print '<td><a href="?a=commoditeperformance&id='.$s[0].'">Delete</a></td>';
	print '</tr>';
}
print '</table>';
print '<br/>';
?>
<td style="font-size:9px"></td>