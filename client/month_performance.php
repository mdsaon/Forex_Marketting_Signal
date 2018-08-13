<div class="performance_currency">
<br/>
<h6>Month Performance</h6>
<?php
//GETDATE();
//$sql="select date from performance order by date desc";
//$r = mysql_query($sql);


//while($s = mysql_fetch_row($r))
//{
	
	//$s[0];
//$date = explode("-", $s[0]);
//$month = $date[count($date)-2];
//$year = $date[count($date)-3];
//$monthyear = $year."-".$month;
//print $monthyear." ";
//print $month." ";
//print $year." ";
//}
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Date like '".$monthyear."%'";
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Date like '%".$month."%'";
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Date like '%".$month."%' and '".$year."%' desc";
//$date1=date("Y-m");
//print $date1;
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Date like '".date("Y-m")."%'";
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Date";
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Month,Year";
//$sql="select SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Month,Year";
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance group by Month,Year order by Year desc limit 5";
$r1 = mysql_query($sql);
print '<center>';
print '<table class="data" align="center">';
print '<tr class="tablehead"><th align="center">Month</th><th align="center">EUR/USD</th><th align="center">USD/JPY</th><th align="center">GBP/USD</th><th align="center">USD/CHF</th><th align="center">Total Rate</th></tr>';
$f = 0;
while($s1 = mysql_fetch_row($r1))
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
	if($s1[0]==1)
	{
		$s1[0]="Jan-";
	}
	else if($s1[0]==2)
	{
		$s1[0]="Feb-";
	}
	else if($s1[0]==3)
	{
		$s1[0]="Mar-";
	}
	else if($s1[0]==4)
	{
		$s1[0]="Apr-";
	}
	else if($s1[0]==5)
	{
		$s1[0]="May-";
	}
	else if($s1[0]==6)
	{
		$s1[0]="Jun-";
	}
	else if($s1[0]==7)
	{
		$s1[0]="Jul-";
	}
	else if($s1[0]==8)
	{
		$s1[0]="Aug-";
	}
	else if($s1[0]==9)
	{
		$s1[0]="Sep-";
	}
	else if($s1[0]==10)
	{
		$s1[0]="Oct-";
	}
	else if($s1[0]==11)
	{
		$s1[0]="Nov-";
	}
	else if($s1[0]==12)
	{
		$s1[0]="Dec-";
	}
	
	print '<td align="center">'.$s1[0].$s1[1].'</td>';
	print '<td align="center">'.$s1[2].'</td>';
	print '<td align="center">'.$s1[3].'</td>';
	print '<td align="center">'.$s1[4].'</td>';
	print '<td align="center">'.$s1[5].'</td>';
	//print '<td>'.$s1[5].'</td>';
	print '<td align="center">'.$s1[6]=$s1[2]+$s1[3]+$s1[4]+$s1[5].'</td>';
	print '</tr>';
}
print '</table>';
print '<br/>';
print '</center>';

?>

</div>