<?php
print '<h1 align="center">Signal Package</h1>';


$description = "";
$trial="";
$standard="";
$premium="";

$edesription="";
$etrial="";
$estandard="";
$epremium="";



if(isset($_POST['submit']))
{
	$description = $_POST['description'];
	$trial = $_POST['trial'];
	$standard = $_POST['standard'];
	$premium = $_POST['premium'];

	
	$er = 0;
	if(ms($description) == "")
	{
		$er++;
		$edescription = "Required";		
	}
	if(ms($trial) =="")
	{
		$er++;
		$etrial="Required";
	}
	if(ms($standard) =="")
	{
		$er++;
		$estandard="Required";
	}
	if(ms($premium) =="")
	{
		$er++;
		$epremium="Required";
	}
	
	if($er == 0)
	{
		$sql = "insert into goldpackageservice(descriptionid,trial,standard,premium) values('".ms($description)."','".ms($trial)."','".ms($standard)."','".ms($premium)."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
			$description = "";
            $trail="";
            $standard="";
            $premium="";
			
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
<div class="insertitem">
<table width="600" border="0" align="center">
  <tr>
    <td width="178"><label>Description</label></td>
    <td width="406"><select name="description" id="description"><div class="er"><?php print $edescription; ?></div>
      <option value="0">Select</option>
      <?php
     $sql = "select * from package";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($description == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[2].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[2].'</option>'; 	
		}
	 }
	 ?>
    </select></td>
  </tr>
  <tr>
    <td>Trail</td>
    <td><select name="trial" id="trail">
      <option>yes</option>
      <option>No</option>
      <option>1 month</option>
       <option>$150 p/3m</option>
    </select></td>
  </tr>
  <tr>
    <td>Standard</td>
    <td><select name="standard" id="standard">
      <option>yes</option>
      <option>No</option>
      <option>2 month</option>
       <option>$150 p/3m</option>
       <option>Buy Now</option>
    </select></td>
  </tr>
  <tr>
    <td><label>Premium</label></td>
    <td><select name="premium" id="premium">
      <option>yes</option>
      <option>No</option>
      <option>3 month</option>
       <option>$150 p/3m</option>
       <option>Buy Now</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <input type="submit" name="submit" value="Save"/>
      <input type="reset" name="reset" value="Reset"/>
      </td>
  </tr>
</table>
</div>
  </form>