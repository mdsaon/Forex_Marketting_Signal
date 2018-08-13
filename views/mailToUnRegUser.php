<h2>Mail To All UnRegistered User</h2>
<?php
$subject="";
$message="";

if(isset($_POST['submit']))
{
	$to='someone@example.com';
	$email='saon11@yahho.com';


$subject=$_POST['subject'];
$message=$_POST['message'];
$headers='From: saon11@yahoo.com';
mail($to,$subject,$message,$headers);

if(!mail)
{
	echo" error";
}
	
}

?>
<form name="form1" method="post" action="">
  <table width="1000" border="0" align="center" class="data">
    <tr>
      <td class="default">SUBJECT</td>
      <td colspan="3">
        <label for="textarea"></label>
      <label for="textfield11">
        <textarea name="subject" id="subject" cols="100" rows="2"></textarea>
      </label></td>
    </tr>
    <tr>
      <td class="default">MESSAGES</td>
      <td colspan="3">
      <label for="textfield11">
        <textarea name="message" id="message" cols="100" rows="10"></textarea>
        <br>
        <br>
        <br>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" name="submit" id="submit" value="Send Mail To All Registered User"></td>
    </tr>
  </table>
</form>
