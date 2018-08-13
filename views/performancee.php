<?php
$slno="";
$date="";
$eurusd="";
$usdjpy="";
$gbpusd="";
$usdchf="";

$eslno="";
$edate="";
$eeurusd="";
$eusdjpy="";
$egbpusd="";
$eusdchf="";


if(isset($_POST['submit']))
{

	//$slno=$_POST['slno'];
	//$date=$_POST['date'];
	$eurusd=$_POST['eurusd'];
	$usdjpy=$_POST['usdjpy'];
	$gbpusd=$_POST['gbpusd'];
	$usdchf=$_POST['usdchf'];
	
	$er = 0;
	

	
	if($er == 0)
	{
		$sql = "update performance set EURUSD='".$eurusd."', USDJPY='".$usdjpy."', GBPUSD='".$gbpusd."',USDCHF='".$usdchf."' where id = ".$_GET['id'];
		if(mysql_query($sql))
		{
			print '<div class="sc">Update Saved !!!</div>';
		}
		else
		{
			print '<span class="er">'.mysql_error().'</span>';
		}
	}
	else
	{
		print '<div class="er">Value Missing</div>';
	}
}
else
{
	$sql = "select EURUSD,USDJPY,GBPUSD,USDCHF from performance where id = ".$_GET['id'] or die(mysql_error());
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
        //$slno=$s[0];
		//$date=$s[1];
        $eurusd=$s[0];
        $usdjpy=$s[1];
        $gbpusd=$s[2];
        $usdchf=$s[3];
	}
}

?>
<form action="" method="post">
  <table width="600" border="0" align="center">
    <tr>
      <td>EUR/USD</td>
      <td>
      <input type="text" name="eurusd" id="eurusd" value="<?php print $eurusd;?>" /></td>
    </tr>
    <tr>
      <td>USD/JPY</td>
      <td>
      <input type="text" name="usdjpy" id="usdjpy" value="<?php print $usdjpy;?>" /></td>
    </tr>
    <tr>
      <td>GBP/USD</td>
      <td>
      <input type="text" name="gbpusd" id="gbpusd" value="<?php print $gbpusd;?>" /></td>
    </tr>
    <tr>
      <td>USD/CHF</td>
      <td>
      <input type="text" name="usdchf" id="usdchf" value="<?php print $usdchf;?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>