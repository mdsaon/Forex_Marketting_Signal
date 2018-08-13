<?php
$slno="";
$date="";
$eurusd="";
$usdjpy="";
$gbpusd="";
$usdchf="";
$gold="";
$oil="";
$erojpy="";

$eslno="";
$edate="";
$eeurusd="";
$eusdjpy="";
$egbpusd="";
$eusdchf="";
$egold="";
$eoil="";
$eerojpy="";

if(isset($_POST['submit']))
{
	
    $slno=$_POST['slno'];
	$date=$_POST['date'];
	$eurusd=$_POST['eurusd'];
	$usdjpy=$_POST['usdjpy'];
	$gbpusd=$_POST['gbpusd'];
	$usdchf=$_POST['usdchf'];
	$gold=$_POST['gold'];
	$oil=$_POST['oil'];
	$erojpy=$_POST['erojpy'];
   
	
	$er = 0;
	//if(ms($currency) == "")
	//{
		//$er++;
		//$ecurrency = "Required";		
	//}
	
	
	if($er == 0)
	{
		$sql = "insert into performance(id,Date,EURUSD,USDJPY,GBPUSD,USDCHF,Gold,Oil,EROJPY) values('".$slno."','".$date."','".$eurusd."','".$usdjpy."','".$gbpusd."','".$usdchf."','".$gold."','".$oil."','".$erojpy."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
	$slno="";
$date="";
$eurusd="";
$usdjpy="";
$gbpusd="";
$usdchf="";
$gold="";
$oil="";
$erojpy="";
			
		}
		else
		{
			print '<div class="er">'.mysql_error().'</div>';
		}
	}
	else
	{
		print '<div class="er">Value Missing</div>';
	}
}

?>
<form action="" method="post">
  <table width="600" border="1" align="center">
    <tr>
      <td width="158">Sl No</td>
      <td width="426"><label for="textfield"></label>
      <input type="text" name="slno" id="date" value="<?php print $slno;?>"/></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>
      <input type="date" name="date" id="date" value="<?php print $date;?>"/></td>
    </tr>
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
      <td>Gold</td>
      <td>
      <input type="text" name="gold" id="gold" value="<?php print $gold;?>" /></td>
    </tr>
    <tr>
      <td>Oil</td>
      <td>
      <input type="text" name="oil" id="oil" value="<?php print $oil;?>" /></td>
    </tr>
    <tr>
      <td>ERO/JPY</td>
      <td>
      <input type="text" name="erojpy" id="erojpy" value="<?php print $erojpy;?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>