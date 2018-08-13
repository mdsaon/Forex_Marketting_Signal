<div class="marqueText" >
<marquee direction="left"> 
<?php
$sql="select * from news order by id desc limit 5";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
	print $s[1]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"." "." ";
}
?>
</marquee>
</div>