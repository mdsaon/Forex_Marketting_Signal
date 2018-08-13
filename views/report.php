<?php
print '<table width="600" border="0" align="center">
  <tr>
    <td>Date From</td>
    <td><input type="date" name="datefrom"> </td>
  </tr>
  <tr>
    <td>Date To</td>
    <td><input type="date" name="dateto"></td>
  </tr>
</table>';

$sql = "select r.id,r.date,p.name as packagetype,r.userNo,py.name as payment,r.totalEarn from report as r,packagetype as p,payment py where r.packageTypeId=p.id and r.paymentId=py.id";
$r = mysql_query($sql);

print '<table class="data" align="center">';
print '<tr class="tablehead"><th>Date</th><th>Package</th><th>User Number</th><th>Payment</th><th>Total Earn</th></tr>';
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
	
	print '</tr>';
}
print '</table>';
?>