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
   
	
	$er = 0;
	//if(ms($currency) == "")
	//{
		//$er++;
		//$ecurrency = "Required";		
	//}
	
	
	if($er == 0)
	{
		$sql = "update signal set buyPoint = '".ms($buypoint)."', pips= '".ms($pips)."', stopLoss='".ms($stoploss)."',timeFrom='".ms($timefrom)."', timeTill='".ms($timetill)."', currencyId='".ms($currency)."',categoryId='".ms($category)."', sellPoint='".ms($sellpoint)."',takeProfit='".ms($takeprofit)."', dateFrom='".ms($datefrom)."','".ms($datetill)."' where id = ".$_GET['id'];
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
	$sql = "select * from signal where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
	$buypoint =$s[1];
    $pips =$s[2];
	$stoploss =$s[3];
	$timefrom =$s[4];
	$timetill=$s[5];
	$currency =$s[6];
	$category =$s[7];
    $sellpoint =$s[8];
    $takeprofit= $s[9];
    $datefrom= $s[10];
	$datetill=$s[11];
	}
}

?>
<form action="" method="post">
<table  align="center" border="0">
<tr><td>Buy Point</td>
    <td><input type="text" name="buypoint" id="buypoin" value="<?php print $buypoint; ?>" ><span class="error"><?php print $ebuypoint; ?></span></td>
    
   <p>
  <td>Pips</td>
    <td><input type="text" name="pips" id="pips" value="<?php print $pips; ?>"><span class="error"><?php print $epips; ?></span></td>
    </tr>   </p>
   <p>
 <tr>
 <td>Stop Loss</td>
 <td><input name="stoploss" type="text" id="stoploss" /><span class="error"><?php print $estoploss; ?></span></p></td>
 <td> Time Form</td>
    <td><input name="timefrom" type="datetime" id="timefrom" value="<?php $timefrom;?>"/><span class="error"><?php print $etimefrom; ?></span></p></td>
    <p>  </tr>
<tr>
 <td> Time Till</td>
  <td>  <input name="timetill" type="timetill" id="timetill" value="<?php $timetill;?>"/><span class="error"><?php print $etimetill; ?></span></p></td>
    
    
    <td>Currency</td>
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
    </select>
    </td></tr>
    <tr>
    <td>Category</td>
   <td> 
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
    </select>
    </td>
    <td>
   <label> Sell Point</label></td>
    <td><input type="text" name="sellpoint" id="sellpoint" value="<?php print $sellpoint; ?>"><span class="error"><?php print $esellpoint; ?></span></p></td></tr>
    <tr>
    </p>
    <td> <label> Take Profit</label></td>
   <td> <input type="text" name="takeprofit" id="takeprofit" value="<?php print $takeprofit; ?>"><span class="error"><?php print $etakeprofit; ?></span></p></td>

   <td>
     <label> Date Form</label></td>
    <td><input type="datetime" name="datefrom" id="datefrom" value="<?php print $datefrom; ?>"><span class="error"><?php print $edatefrom; ?></span></p></td></tr>
    </p>
    <tr>
   <td> <label> Date Till</label></td>
    <td><input type="datetime" name="datetill" id="datetill" value="<?php print $datetill; ?>"><span class="error"><?php print $edatetill; ?></span></p></td>
    <td</td></tr>
    <tr>
    <td></td>
    <td>
    <input type="submit" name="submit" id="submit" value="Submit">
  </label>
    <input type="reset" name="reset" id="reset" value="Reset">
  </label></td>
  </tr>
  </table>
</form>