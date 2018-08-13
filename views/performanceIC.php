<?php

//$slno="";
//$date="";
$eurusd="";
$usdjpy="";
$gbpusd="";
$usdchf="";
$gold="";
$oil="";
$erojpy="";
$silver="";
$usddkk="";
$audjpy="";
$eurjpy="";
$chfjpy="";
$gbpjpy="";
$cadjpy="";
$eurgbp="";
$usdcad="";
$audusd="";
$nuzusd="";
$audcad="";
//$oil="";
//$erojpy="";

//$eslno="";
//$edate="";
$eeurusd="";
$eusdjpy="";
$egbpusd="";
$eusdchf="";
$egold="";
$eoil="";
$eerojpy="";

if(isset($_POST['submit']))
{
	
    //$slno=$_POST['slno'];
	//$date=$_POST['date'];
	$eurusd=$_POST['eurusd'];
	$usdjpy=$_POST['usdjpy'];
	$gbpusd=$_POST['gbpusd'];
	$usdchf=$_POST['usdchf'];
	$gold=$_POST['gold'];
	$oil=$_POST['oil'];
	$erojpy=$_POST['erojpy'];
	$silver=$_POST['silver'];
	$usddkk=$_POST['usddkk'];
	$audjpy=$_POST['audjpy'];
	$eurjpy=$_POST['eurjpy'];
	$chfjpy=$_POST['chfjpy'];
	$gbpjpy=$_POST['gbpjpy'];
	$cadjpy=$_POST['cadjpy'];
	$eurgbp=$_POST['eurgbp'];
	$usdcad=$_POST['usdcad'];
	$audusd=$_POST['audusd'];
	$nuzusd=$_POST['nuzusd'];
	$audcad=$_POST['audcad'];
	
   $date=date('Y-m-d');
$date=explode("-",$date);
$month = $date[count($date)-2];
$year = $date[count($date)-3];
	$er = 0;
	//if(ms($currency) == "")
	//{
		//$er++;
		//$ecurrency = "Required";		
	//}
	
	
	if($er == 0)
	{
		$sql = "insert into performance(Date,Month,Year,EURUSD,USDJPY,GBPUSD,USDCHF,Gold,Oil,EROJPY,Silver,USDDKK,AUDJPY,EURJPY,CHFJPY,GBPJPY,CADJPY,EURGBP,USDCAD,AUDUSD,NUZUSD,AUDCAD) values('".date('Y-m-d')."','".$month."','".$year."','".$eurusd."','".$usdjpy."','".$gbpusd."','".$usdchf."','".$gold."','".$oil."','".$erojpy."','".$silver."','".$usddkk."','".$audjpy."','".$eurjpy."','".$chfjpy."','".$gbpjpy."','".$cadjpy."','".$eurgbp."','".$usdcad."','".$audusd."','".$nuzusd."','".$audcad."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
	//$slno="";
//$date="";
$eurusd="";
$usdjpy="";
$gbpusd="";
$usdchf="";
$gold="";
$oil="";
$erojpy="";
$silver="";
$usddkk="";
$audjpy="";
$eurjpy="";
$chfjpy="";
$gbpjpy="";
$cadjpy="";
$eurgbp="";
$usdcad="";
$audusd="";
$nuzusd="";
$audcad="";
			
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
      <td>Silver</td>
      <td>
      <input type="text" name="silver" id="silver" value="<?php print $silver;?>" /></td>
    </tr>
        <tr>
      <td>USD/DKK</td>
      <td>
      <input type="text" name="usddkk" id="usddkk" value="<?php print $usddkk;?>" /></td>
    </tr>
        <tr>
      <td>AUD/JPY</td>
      <td>
      <input type="text" name="audjpy" id="audjpy" value="<?php print $audjpy;?>" /></td>
    </tr>
        <tr>
      <td>EUR/JPY</td>
      <td>
      <input type="text" name="eurjpy" id="eurjpy" value="<?php print $eurjpy;?>" /></td>
    </tr>
        <tr>
      <td>CHF/JPY</td>
      <td>
      <input type="text" name="chfjpy" id="chfjpy" value="<?php print $chfjpy;?>" /></td>
    </tr>
        <tr>
      <td>GBP/JPY</td>
      <td>
      <input type="text" name="gbpjpy" id="gbpjpy" value="<?php print $gbpjpy;?>" /></td>
    </tr>
        <tr>
      <td>CAD/JPY</td>
      <td>
      <input type="text" name="cadjpy" id="cadjpy" value="<?php print $cadjpy;?>" /></td>
    </tr>
        <tr>
      <td>EUR/GBP</td>
      <td>
      <input type="text" name="eurgbp" id="eurgbp" value="<?php print $eurgbp;?>" /></td>
    </tr>
        <tr>
      <td>USD/CAD</td>
      <td>
      <input type="text" name="usdcad" id="usdcad" value="<?php print $usdcad;?>" /></td>
    </tr>
        <tr>
      <td>AUD/USD</td>
      <td>
      <input type="text" name="audusd" id="audusd" value="<?php print $audusd;?>" /></td>
    </tr>
        <tr>
      <td>NUZ/USD</td>
      <td>
      <input type="text" name="nuzusd" id="nuzusd" value="<?php print $nuzusd;?>" /></td>
    </tr>
        <tr>
      <td>AUD/CAD</td>
      <td>
      <input type="text" name="audcad" id="audcad" value="<?php print $audcad;?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>