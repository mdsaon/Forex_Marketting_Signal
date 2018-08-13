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
		$sql = "update packageservice set descriptionid='".$description."', trial='".$trial."', standard='".$standard."', premium='".$premium."' where id = ".$_GET['id'];
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
	$sql = "select * from packageservice where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
        $description= $s[2];
        $trial=$s[3];
        $standard=$s[4];
        $premium=$s[5];

	}
}

?>
<form action="" method="post">
<p><label>
    Description</label>
    <select name="description" id="description"><div class="er"><?php print $edescription; ?></div>
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
    </select></p>
    </br></br>
    <p><label>
    Trail</label>
    <select name="trial" id="trail">
    <option>yes</option>
  <option>No</option>
  <option>1 month</option>
   <option>$150 p/3m</option>
    </select></p>
    </br></br>
    <p><label>
    Standard</label>
    <select name="standard" id="standard">
   <option>yes</option>
  <option>No</option>
  <option>2 month</option>
   <option>$150 p/3m</option>
     </select>
    </br></br>
    <p><label>
    Premium</label>
    <select name="premium" id="premium">
  <option>yes</option>
  <option>No</option>
  <option>3 month</option>
  <option>$150 p/3m</option>
    </select>
    <br/><br/>
    <input type="submit" name="submit" value="Save"/>
    <input type="reset" name="reset" value="Reset"/>
</form>