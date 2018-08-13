<div class="packagedisplay">
<br/>
<h5 align="left">Currency + Commodity</h5>

<?php

$sql = "select pds.id,p.description as package,pds.trial,pds.standard,pds.premium from goldpackageservice as pds,package as p where pds.descriptionid=p.id";
$r = mysql_query($sql);
print '<table class="fulltablea" align="left">';
print '<tr class="tablehead"><th align="center">Trial</th><th align="center">Standard</th><th align="center">Premium</th></tr>';
while($s = mysql_fetch_row($r))
{
	print '<tr class="fullrow">';
	print '<td align="center" font-size="14px"><h6>'.$s['2'].'</h6></td>';
	print '<td align="center"><h6>'.$s['3'].'</h6></td>';
	print '<td align="center"><h6>'.$s['4'].'</h6></td>';
	print '</tr>';
	
}
print '<tr class="button"><th><a href="?c=orderform&id=3">Buy Now</a></th><th><a href="?c=orderform&id=4">Buy Now</a></th><th><a href="?c=orderform&id=5">Buy Now</a></th></tr>';
print '</table>';
print '<br/>';
?>
<br/>
</div>