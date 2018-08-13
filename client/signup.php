<div class="cilent_content">
<h1 align="center">Create Account Here</h1>
<?php
$name = "";
$email = "";
$password = "";
$cpassword="";
$country= "";
$Phone = "";
$accept="";



$ename = "";
$eemail = "";
$epassword = "";
$ecountry= "";
$ePhone = "";
$eaccept="";



if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword=$_POST['cpassword'];
	$Phone= $_POST['Phone'];
	$country = $_POST['country'];
	$accept=$_POST['accept'];
	
	
	$err = 0;
	
	if($name == "")
	{
		$err++;
		$ename = '<span class="eroor">Name Is Required</span>';
	}
	if($email == "")
	{
		$err++;
		$eemail = "Required";
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$err++;
		$eemail = "This is not valid email address";
	}
	if($password == "")
	{
		$err++;
		$epassword = '<span class="eroor">Password Is Required</span>';
	}
	elseif($password!=$cpassword)
	{
		$err++;
		$epassword = '<span class="eroor">Password Do Not Match</span>';
	}
	elseif($password==$cpassword)
	{
		$err++;
		$epassword = '<span class="eroor">Password Match</span>';
	}
	
		if($Phone == "")
	{
		$err++;
		$ePhone = '<span class="eroor">Phone Number Is Required</span>';
	}
	if($accept!=1)
	{
		$err++;
		$eaccept="Please Accept The Terms And Condition";
	}
	
	
	if($err == 0)
	{
		$sql = "select * from user where email = '".$email."' or name = '".$name."'";
		$r = mysql_query($sql);
		if(mysql_num_rows($r) > 0)
		{
			print "Email and / or Name Already Exist";
		}
	
		else
		{
			$sql = "insert into user(name,email,password,countryId,phone,date) values('".$name."','".$email."',
			'".$password."','".$country."','".$Phone."','".date("Y-m-d")."')";
			if(mysql_query($sql))
			{
		      print "Data Saved Successfully";
		
				$name = "";
                $email = "";
                $password = "";
				$country="";
                $Phone = "";
                
			}
			else
			{
				print mysql_error();	
			}
		}
	}
	
}



?>
<form action="" method="post" enctype="multipart/form-data" name="form1" class="signupform">
<table width="600" border="0" class="">
  <tr>
       <td class=""><p>Name</p></td>
       <td class=""><input type="text" name="name" id="name" placeholder="Name Should Be Filled"  value="<?php print $name; ?>" />
         <span class="error"><?php print $ename; ?></span>
         </label></td>
     </tr>
     <tr>
       <td><p>Email</p></td>
       <td><input type="text" name="email" id="email" placeholder="Email Should Be Filled" value="<?php print $email; ?>" />
         <span class="error"><?php print $eemail; ?></span></td>
     </tr>
     <tr>
       <td><p>Password</p></td>
       <td><input name="password" type="password" id="password" placeholder="Password Should Be Filled" />
         <span class="error"><?php print $epassword; ?></span></td>
     </tr>
     <tr>
       <td><p>ConfirmPassword</p></td>
       <td><input name="cpassword" type="password" id="cpassword" placeholder="Password Again For Match"/></td>
     </tr>
     <tr>
       <td><p>Country</p></td>
       <td><select name="country" id="country">
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
       </select></td>
     </tr>
     <tr>
       <td><p>Phone Number</p></td>
       <td><input type="text" name="Phone" id="Phone" placeholder="Phone Number Should Be Filled" value="<?php print $Phone; ?>" />
         <span class="error"><?php print $ePhone; ?></span>
         </p>
         </p>
         <input type="hidden" name="date" id="date" value="<?php print $date; ?>" />
         <span class="error"><?php print $edate; ?></span></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><input name="accept" type="checkbox" value="1"id="checkbox" />
         <h5>I agree To The Terms And Condition</h5></td><span class="error"><?php print $eaccept; ?></span><br /><br/>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="submit" id="submit" value="Submit" />
         </label>
         <input type="reset" name="reset" id="reset" value="Reset" /></td>
     </tr>
 </table>
   
</form>

</div>