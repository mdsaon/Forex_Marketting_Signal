<div class="sociallink">
<a href="https://facebook.com/" target="_blank"><img src="images/fb.png" height="30px" width="30px" title="facebook"/></a>
<a href="https://twitter.com/" target="_blank"><img src="images/tt.png" height="30px" width="30px" title="twitter"/></a>
<a href="https://plus.google.com/" target="_blank"><img src="images/gp.png" height="30px" width="30px" title="google plus"/></a>
<a href="https://www.linkedin.com/" target="_blank"><img src="images/in.png" height="30px" width="30px" title="linkedin"/></a>
<a href="https://myspace.com/" target="_blank"><img src="images/ms.png" height="30px" width="30px" title="myspace"/></a>
</div>
<div class="support"><a href="?c=support"><p>Live Support</p></a></div>
<div class="logo">
	
	<script>



// ********** MAKE YOUR CHANGES HERE

var text="<h4>Global Forex Signal</h4>" // YOUR TEXT
var speed=60 // SPEED OF FADE

// ********** LEAVE THE NEXT BIT ALONE!


if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
</div>
<div class="welcome">
<?php
if(isset($_SESSION['type']))
{
print ' <p>Wellcome to <a href="?c=profile">'.$_SESSION['name'].'</a></p>';
	
}
?>
</div>


<div class="headerlink">
<?php
if(isset($_SESSION['type']))
{
print'<a href="?c=logout">LogOut</a>';print'&nbsp;';print'&nbsp;';
/*$sql="select status from orderdetails where userid=".$_SESSION['id'];
$r=mysql_query($sql) or  mysql_error();
while($s=mysql_fetch_row($r))
{
	$k=$s[0];
	if($k==expire)
	{
		print'<a href="?c=renew">RenewPackages</a>';
		print $k;
	}
}*/
$sql="select id, status from orderdetails where userid='".$_SESSION['id']."'";
$r=mysql_query($sql) or  mysql_error();
while($s=mysql_fetch_row($r))
{
	if($s[1]==expire)
	{
		print'<a href="?c=renew">RenewPackages</a>';
	
	}
}
}
else if(!isset($_SESSION['type']))
{
print'<a href="?c=login">LOGIN</a>';print'&nbsp;';print'&nbsp;';print'&nbsp;';
print'<a href="?c=signup">SIGN UP</a>';
}
?>
</div>