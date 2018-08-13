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
	
	$er = 0;
	

	
	if($er == 0)
	{
		$sql = "update performance set EURUSD='".$eurusd."', USDJPY='".$usdjpy."', GBPUSD='".$gbpusd."',USDCHF='".$usdchf."',Gold='".$gold."',Oil='".$oil."',EROJPY='".$erojpy."', Silver='".$silver."', USDDKK='".$usddkk."', AUDJPY='".$audjpy."',EURJPY='".$eurjpy."',CHFJPY='".$chfjpy."',GBPJPY='".$gbpjpy."',CADJPY='".$cadjpy."', EURGBP='".$eurgbp."', USDCAD='".$usdcad."', AUDUSD='".$audusd."',NUZUSD='".$nuzusd."',AUDCAD='".$audcad."' where id = ".$_GET['id'];
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
	
	$sql = "select id,Date,EURUSD,USDJPY,GBPUSD,USDCHF,Gold,Oil,EROJPY,Silver,USDDKK,AUDJPY,EURJPY,CHFJPY,GBPJPY,CADJPY,EURGBP,USDCAD,AUDUSD,NUZUSD,AUDCAD from performance where id = ".$_GET['id'] or die(mysql_error());
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
        //$slno=$s[0];
		//$date=$s[1];
        $eurusd=$s[2];
        $usdjpy=$s[3];
        $gbpusd=$s[4];
        $usdchf=$s[5];
		$gold=$s[6];
		$oil=$s[7];
		$erojpy=$s[8];
		$silver=$s[9];
		$usddkk=$s[10];
		$audjpy=$s[11];
		$eurjpy=$s[12];
		$chfjpy=$s[13];
		$gbpjpy=$s[14];
		$cadjpy=$s[15];
		$eurgbp=$s[16];
		$usdcad=$s[17];
		$audusd=$s[18];
		$nuzusd=$s[19];
		$audcad=$s[20];
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