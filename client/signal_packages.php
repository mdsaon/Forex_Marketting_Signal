<div class="signal">
<?php
$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=4 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
print '<tr >';
print '<td bgcolor="#6600FF" width="600" colspan="5"></td>';
print '<td>';
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
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC">'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">Buy Point: '.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">Sell Point: '.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">Take Profit: '.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF"> Stop Loss: '.$s[5].'</td></tr>';
	if($s[6]==Active)
	{
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">Status: '.$s[6].'</td>';
	}
	else
	{
		print '<tr><td width="200px" align="center" style="color:red" bgcolor="#FFCC99">Status: '.$s[6].'!</td>';
		}
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	
}
print '</td>';
print '</tr>';
print '</table>';
print '</br>';


$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=5 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
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
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC">'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[5].'</td></tr>';
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">'.$s[6].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	
}

print '</table>';
print '</br>';

$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=6 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
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
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC">'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[5].'</td></tr>';
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">'.$s[6].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	
}

print '</table>';
print '</br>';

$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=7 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
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
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC">'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[5].'</td></tr>';
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">'.$s[6].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	
}

print '</table>';
print '</br>';
print '</br>';
$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=10 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
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
	/*if($s[6]==Inactive)
	{
		print '<table align="center" height="100px" bordercolor="#FF0000"><tr><td width="400px" align="center" bgcolor="#FFFFCC" class="opacity"><img src="images/center.png" height="100px" width="400px"/></td></tr></table>';
	}
	else
	{*/
	//print '<table border="0" align="center" class="opacity">
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC" >'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">'.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">'.$s[5].'</td></tr>';
	if($s[6]==Active)
	{
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">'.$s[6].'</td>';
	}
	else
	{
		print '<tr><td width="200px" align="center" style="color:red" bgcolor="#FFCC99">'.$s[6].'!</td>';
		}
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	}
	


print '</table>';
print '</br>';


$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=8 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" align="center" class="opacity">';
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
	print '<tr><th colspan="2" width="400px" align="center" bgcolor="#FFFFCC">'.$s[0].'</th></tr>';
	print '<tr><td colspan="2" width="400px" align="center" bgcolor="#FFCC99">Posted: '.$s[1].' ago</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">Buy Point: '.$s[2].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">Sell Point: '.$s[3].'</td></tr>';
	print '<tr><td width="200px" align="center" bgcolor="#FFCC99">Take Profit: '.$s[4].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF">Stop Loss: '.$s[5].'</td></tr>';
	print '<tr><td width="200px" align="center" style="color:green" bgcolor="#FFCC99">Status: '.$s[6].'</td>';
	print '<td width="200px" align="center" bgcolor="#99CCFF"></td></tr>';
	
}

print '</table>';
print '</br>';


$sql = "select c.name as currency,s.timeFrom,s.buyPoint,s.sellPoint,s.takeProfit,s.stopLoss,s.status from signal as s,currency as c,category as ca where s.currencyid=c.id and currencyid=9 order by dateTime limit 1";
$r = mysql_query($sql);
print '<table border="0" class="opacity">';
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
	print '<tr class="signalheader"><th colspan="2" width="400px" align="center" >'.$s[0].'</th></tr>';
	print '<tr class="signalpost"><td colspan="2" width="400px" align="center" >Posted: '.$s[1].' ago</td></tr>';
	print '<tr class="default"><td width="200px" align="center" >Buy Point: '.$s[2].'</td>';
	print '<td align="center">Sell Point: '.$s[3].'</td></tr>';
	print '<tr class="alternate"><td align="center">Take Profit: '.$s[4].'</td>';
	print '<td align="center">Stop Loss: '.$s[5].'</td></tr>';
	if($s[6]==Active)
	{
	print '<tr class="default"><td width="200px" align="center" style="color:green" >Status: '.$s[6].'</td>';
	}
	else
	{
		print '<tr class="default"><td width="200px" align="center" style="color:red" >Status: '.$s[6].'!</td>';
		}
	print '<td width="200px" align="center" ></td></tr>';
	
}

print '</table>';
print '</br>';
?>
</div>
