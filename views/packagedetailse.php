<?php
$package= "";
$duration="";
$price="";
$packagetype="";



$epackage="";
$eduration="";
$eprice="";
$epackagetype="";

if(isset($_POST['submit']))
{

	$package=$_POST['package'];
    $duration=$_POST['duration'];
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
		$sql = "update packagedetails set packageid='".$package."', duration='".$duration."', price='".$price."', packagetypeid='".$packagetype."' where id = ".$_GET['id'];
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
	$sql = "select * from packagedetails where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
        $package= $s[1];
        $duration=$s[2];
        $price=$s[3];
        $packagetype=$s[4];

	}
}

?>
<form name="form1" method="post" action="">
 <label>Package
  <input name="package" type="text" id="package" value="<?php print $package; ?>"><div class="er"><?php print $epackage; ?></div>
 </label>
 <br />
 <label>Duration
  <input name="duration" type="text" id="duration" value="<?php print $duration; ?>"><div class="er"><?php print $eduration; ?></div>
 </label>
 <br />
 <label>Price
  <input name="price" type="text" id="price" value="<?php print $price; ?>"><div class="er"><?php print $eprice; ?></div>
 </label>
 <br />
 <label>Package Type
  <input name="packagetype" type="text" id="packagetype" value="<?php print $packagetype; ?>"><div class="er"><?php print $epackagetype; ?></div>
 </label>
 <br />
 <input name="submit" type="submit" id="submit" value="Submit">
  
</form>