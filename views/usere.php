<?php
$$name = "";
$email = "";
$password = "";
$country= "";
$Phone = "";
$status= "";
$type="";

$ename = "";
$eemail = "";
$epassword = "";
$ecountry= "";
$ePhone = "";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$Phone= $_POST['Phone'];
	$country = $_POST['country'];
	$status=$_POST['status'];
	$type=$_POST['type'];

	

	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "This is valid email address";
	}
	else
	{
		echo "This is not valid email address";
	}
	$err = 0;
	
	if($name == "")
	{
		$err++;
		$ename = "Required";
	}
	if($email == "")
	{
		$err++;
		$eemail = "Required";
	}
	
		if($Phone == "")
	{
		$err++;
		$ePhone = "Required";
	}

	if($err == 0)
	{
		$sql = "update user set name = '".ms($name)."', email= '".ms($email)."', phone='".ms($Phone)."',countryid='".ms($country)."', status='".$status."', type='".$type."' where id = ".$_GET['id'];
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
	$sql = "select * from user where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
		$name = $s[1];
		$email= $s[2];
		$country= $s[4];
		$Phone= $s[5];
		$status=$s[7];
		$type=$s[8];
	}
}

?>
<form action="" method="post"  name="form1">
  <p><label>Name</label>
    <input type="text" name="name" id="name" value="<?php print $name; ?>" ><span class="error"><?php print $ename; ?></span>
  </label></p>
   <p>
  <label>Email</label>
    <input type="text" name="email" id="email" value="<?php print $email; ?>"><span class="error"><?php print $eemail; ?></span>
    </p>
    <p>

    <p>
    <p><label>
    Country</label>
    <select name="country" id="country">
      <option value="0">Select</option>
     <?php
     $sql = "select * from country";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($country == $s[0])
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
   <label> Phone Number</label>
    <input type="text" name="Phone" id="Phone" value="<?php print $Phone; ?>"><span class="error"><?php print $ePhone; ?></span></p>
    <br/>
    <p><label>
    Status</label>
    <select name="status" id="status">
    <option>pending</option>
      <option>active</option>
    </select></p>
    
     <label>Type</label>
    <input type="text" name="type" id="type" value="<?php print $type; ?>"><span class="error"><?php print $etype; ?></span></p>
    <br/>
    <input type="submit" name="submit" id="submit" value="Submit">
  </label>
    <input type="reset" name="reset" id="reset" value="Reset">
  </label>
</form>
</div>
</div>
</div>