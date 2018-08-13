<?php
$buypoint ="";
$pips ="";
	$stoploss ="";
	$timefrom ="";
	$timetill="";
	$currency ="";
	$category ="";
    $sellpoint ="";
    $takeprofit= "";
    $datefrom= "";
	$datetill="";
	$status="";



if(isset($_POST['submit']))
{
	
    $buypoint =$_POST['buypoint'];
	$pips =$_POST['pips'];
	$stoploss =$_POST['stoploss'];
	$timefrom =$_POST['timefrom'];
	$timetill=$_POST['timetill'];
	$currency =$_POST['currency'];
	$category =$_POST['category'];
    $sellpoint =$_POST['sellpoint'];
    $takeprofit= $_POST['takeprofit'];
    $datefrom= $_POST['datefrom'];
	$datetill= $_POST['datetill'];
    $status= $_POST['status'];
	//$date = new DateTime('now', new DateTimeZone('Asia/Dhaka'))->format('d-m-Y H:i:s a');
 //$datetime= $date->format('d-m-Y H:i:s a');
 
	$er = 0;
	if(ms($currency) == "")
	{
		$er++;
		$ecurrency = "Required";		
	}
	if(ms($pips)== "")
	{
		$er++;
		$epips = "Required";
	}
	
	if($er == 0)
	{
		$sql = "insert into signal(buyPoint,pips,stopLoss,timeFrom,timeTill,currencyid,categoryid,sellPoint,takeProfit,dateFrom,dateTill,dateTime,status) values('".$buypoint."','".$pips."',
			'".$stoploss."','".$timefrom."','".$timetill."','".$currency."','".$category."','".$sellpoint."','".$takeprofit."','".$datefrom."','".$datetill."','".date('Y-m-d H:i:s')."','".$status."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
	$buypoint ="";
    $pips ="";
	$stoploss ="";
	$timeform ="";
	$timetill="";
	$currency ="";
	$category ="";
    $sellpoint ="";
    $takeprofit= "";
    $dateform= "";
	$datetill="";
	$status="";
			
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
<div class="insertitem">
<form action="" method="post">
<table  border="0" width="1200">
<tr><p><td>Buy Point</td>
    <td><input type="text" name="buypoint" id="buypoin" value="<?php print $buypoint; ?>" ><span class="error"><?php print $ebuypoint; ?></span></p></td>
    
   <p>
  <td>Pips</td>
    <td><input type="text" name="pips" id="pips" value="<?php print $pips; ?>"><span class="error"><?php print $epips; ?></span></td>
    </tr>   </p>
   <p>
 <tr>
 <td>Stop Loss</td>
 <td><input type="text" name="stoploss" id="stoploss" value="<?php $stoploss;?>"/><span class="error"><?php print $estoploss; ?></span></p></td>
<p> <td> Time Form</td>
    <td><input name="timefrom" placeholder="HH:MM:SS" type="time" id="timefrom" value="<?php $timeform;?>"/><span class="error"><?php print $etimefrom;?></span></p></td>
 <p><td> Time Till</td>
  <td>  <input name="timetill" placeholder="HH:MM:SS" type="time" id="timetill" value="<?php $timetill; ?>"/><span class="error"><?php print $etimetill; ?></span></p></td>
  </tr>
    
    <tr>
    
  <p>  <td>Currency</td>
   <td> 
   <select name="currency" id="curency">
      <option value="0">Select</option>
     <?php
     $sql = "select * from currency";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($currency == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
    </select></p>
    </td>
    <td>Category</td>
 <p>  <td> 
   <select name="category" id="category">
      <option value="0">Select</option>
     <?php
     $sql = "select * from category";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($category == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
    </select></p>
    </td>
    </tr>
    <tr>
   <p> <td>Sell Point</td>
    <td><input type="text" name="sellpoint" id="sellpoint" value="<?php print $sellpoint; ?>"><span class="error"><?php print $esellpoint; ?></span></p></td>
    <p>
    <td>Take Profit</td>
   <td> <input type="text" name="takeprofit" id="takeprofit" value="<?php print $takeprofit; ?>"><span class="error"><?php print $etakeprofit; ?></span></p></td>
   </tr>
   <tr>
   <p><td>
      Date Form</td>
    <td><input type="date" name="datefrom" placeholder="Y/M/D" id="datefrom" value="<?php print $datefrom; ?>"><span class="error"><?php print $edatefrom; ?></span></p></td>
    <p>
   <td>Date Till</td>
    <td><input type="date" name="datetill" placeholder="Y/M/D" id="datetill" value="<?php print $datetill; ?>"><span class="error"><?php print $edatetill; ?></span></td></p>
    
   <td>Status</td>
    <td><select name="status">
    <option value="0" selected="selected">Select....</option>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>
    <input type="reset" name="reset" id="reset" value="Reset">&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" id="submit" value="Save">
  </td>
  </tr>
  </table>
</form>
</div>