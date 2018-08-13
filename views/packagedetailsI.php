<?php
$package= "";
$duration="";
$price="";
$packagetype="";


$ename = "";
$epackage="";
$eduration="";
$eprice="";
$epackagetype="";


if(isset($_POST['submit']))
{
	
	$package=$_POST['package'];
    $duration=$_POST['duration'];;
    $price=$_POST['price'];
    $packagetype=$_POST['packagetype'];
	
	$er = 0;
	
	if(ms($package) == "")
	{
		$er++;
		$epackage = "Required";		
	}
	if(ms($duration) == "")
	{
		$er++;
		$eduration = "Required";		
	}
	
   if(ms($packagetype) == "")
	{
		$er++;
		$epackagetype = "Required";		
	}
	
	
	if($er == 0)
	{
		$sql = "insert into packagedetails(packageid,duration,price,packagetypeid) values('".ms($package)."','".ms($duration)."','".ms($price)."','".ms($packagetype)."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
			$name = "";
             $package= "";
            $duration="";
            $price="";
            $packagetype="";
			
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
<form name="form1" method="post" action="">
 <div class="insertitem">
  <table width="600" border="0" align="center">
    <tr>
      <td>Package</td>
      <td><select name="package" id="package">
        <option value="0">Select</option>
        <?php
     $sql = "select * from package";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($package == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
      </select></td>
    </tr>
    <tr>
      <td>Duration</td>
      <td><input name="duration" type="text" id="duration" value="<?php print $duration; ?>" /><div class="er"><?php print $eduration; ?></div></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input name="price" type="text" id="price" value="<?php print $price; ?>" /><div class="er"><?php print $eprice; ?></div></td>
    </tr>
    <tr>
      <td>Package Type</td>
      <td><select name="packagetype" id="country">
        <option value="0">Select</option>
        <?php
     $sql = "select * from packagetype";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($packagetype== $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <input name="reset" type="reset" id="reset" value="Reset"/>
      <input name="submit" type="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
  </div>
</form>
