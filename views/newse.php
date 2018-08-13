<?php
$heading= "";
$description="";
$date="";
$time="";


$eheading= "";
$edescription="";
$edate="";
$etime="";


if(isset($_POST['submit']))
{
	
	$heading=$_POST['heading'];
    $description=$_POST['description'];;
    $date=$_POST['date'];
    $time=$_POST['time'];
	
	$er = 0;
	
	if(ms($heading) == "")
	{
		$er++;
		$eheading = "Required";		
	}
	if(ms($description) == "")
	{
		$er++;
		$edescription= "Required";		
	}
	
   if(ms($date) == "")
	{
		$er++;
		$edate = "Required";		
	}
	if(ms($time) == "")
	{
		$er++;
		$etime = "Required";		
	}
	
	if($er == 0)
	{
		$sql = "update news set heading='".$heading."', description='".$description."', date='".$date."', time='".$time."' where id = ".$_GET['id'];
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
	$sql = "select * from news where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
        $heading= $s[1];
        $description=$s[2];
        $date=$s[3];
        $time=$s[4];

	}
}

?>
<form name="form1" method="post" action="">
 <label><br/>Heading<br/>
 <textarea name="heading" cols="45" rows="5" ><?php print $heading;?></textarea><div class="er"><?php print $eheading; ?></div>
 </label>
 
 <br />
 <label><br/>Description<br/>
 <textarea name="description" cols="45" rows="5" ><?php print $description;?></textarea><div class="er"><?php print $edescription; ?></div></label>
 
 <br />
 <label>Date </label>
  <input name="date" type="text" id="date" value="<?php print $date; ?>"><div class="er"><?php print $edate; ?></div>

 <br />
  <label>Time</label>
  <input name="time" type="text" id="time" value="<?php print $time; ?>"><div class="er"><?php print $etime; ?></div>
 
 <br />
 <input name="submit" type="submit" id="submit" value="Submit">
  
</form>
