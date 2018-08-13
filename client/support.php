<div class="client_content">
<center>

  <h1 align="center">Contact to Global Forex Signal</h1>
  <form action="" method="post" enctype="multipart/form-data" name="form1" class="signupform">
<table width="600" border="0" class="" align="center">
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
       <td><p>Subject</p></td>
       <td><input name="subject" type="subject" id="subject" placeholder="Subject Should Be Filled" />
         <span class="error"><?php print $esubject; ?></span></td>
     </tr>
     <tr>
        <td><p>Message</p></td>
       <td><textarea name="message" cols="50" rows="5"></textarea></td><span class="error"><?php print $eaccept; ?></span><br /><br/>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="submit" id="submit" value="Submit" />
         </label>
         <input type="reset" name="reset" id="reset" value="Reset" /></td>
     </tr>
 </table>
   
</form>
</center>
<br/><br/>
</div>