<?php
$email= "";
$password = "";


if(isset($_POST['btnlogin']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$sql = "select * from user where email = '".ms($email)."' and password = '".ms($password)."'";
	
	$r = mysql_query($sql);
	if(mysql_num_rows($r) > 0)
	{
		//print '<span class="sc">Login Successfull</span>';
		while($s = mysql_fetch_row($r))
		{
			$_SESSION['id'] = $s[0];
			$_SESSION['name'] = $s[1];
			$_SESSION['email'] = $s[2];
			$_SESSION['status']=$s[7];
			$_SESSION['type'] = $s[8];
			
		}
	}
}

if(isset($_GET['c']))
{
	if($_GET['c'] == "logout")
	{
		unset($_SESSION['id']);
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['status']);
		unset($_SESSION['type']);	
		
	}
}


?>




<?php

	print '<div id="cssmenu">
<ul>
   <li class="active"><a href="?c=home"><span>Home</span></a></li>
   
   <li class="has-sub"><a href="#"><span>Education</span></a>
      <ul>
         <li class="#"><a href="?c=what_is_forex_trading"><span>What is Forex Trading</span></a></li>
		 <li class="#"><a href="?c=why_forex_trading"><span>Why Forex Trading</span></a></li>
		 <li class="#"><a href="?c=how_forex_works"><span>How  Forex Works</span></a></li>
		 <li class="#"><a href="?c=why_loss_in_forex_trading"><span>Why Loss in Forex Trading</span></a></li>
		 <li class="#"><a href="?c=become_forex_trader"><span>Become a Successful Forex Trader</span></a></li>
         <li class="last"><a href="?c=sample_of_forex_trading"><span>Sample of Forex Trading</span></a></li>
      </ul>
   </li>
   
      <li class="has-sub"><a href="#"><span>Signal</span></a>
      <ul>
         <li class="#"><a href="?c=what_is_forex_signal"><span>What is Forex Signal</span></a></li>
		 <li class="#"><a href="?c=why_forex_signal"><span>Why Forex Signal</span></a></li>
		 <li class="#"><a href="?c=benefit_of_forex_signal"><span>Benefit of Forex Signal</span></a></li>
         <li class="last"><a href="?c=orderform"><span>Subscribe Now</span></a></li>
      </ul>
   </li>
   
      <li class="has-sub"><a href="#"><span>Services</span></a>
      <ul>
         <li class="#"><a href="?c=currency_signal"><span>Currency Signal</span></a></li>
		 <li class="#"><a href="?c=comodity_plus_signal"><span>Commodity Plus Signal (Pending)</span></a></li>
         <li class="#"><a href="?c=our_services"><span>Our Services</span></a></li>';
if(isset($_SESSION['type']))
{
 print '<li class="active"><a href="?c=signal_packages"><span>Signal Packages</span></a></li>';
}
		 print '<li class="last"><a href="?c=terms_and_conditions"><span>Terms & Conditions</span></a></li>
      </ul>
   </li>
   

   
   <li class="has-sub"><a href="#"><span>Performance</span></a>
      <ul>
         <li class="has-sub"><a href="#"><span>Major Currency</span></a>
            <ul>
               <li><a href="?c=day_performance"><span>Day View</span></a></li>
               <li class="last"><a href="?c=month_performance"><span>Month View</span></a></li>
            </ul>
         </li>
         <li class="has-sub"><a href="#"><span>Commodity Plus</span></a>
            <ul>
               <li><a href="#"><span>Day View</span></a></li>
               <li class="last"><a href="#"><span>Month View</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   
         <li class="has-sub"><a href="#"><span>Payment</span></a>
      <ul>
         <li class="#"><a href="?c="><span>Paypal</span></a></li>
		 <li class="#"><a href="?c="><span>Moneybooker</span></a></li>
		 <li class="#"><a href="?c="><span>Perfect Money</span></a></li>
		 <li class="#"><a href="?c="><span>Webmoney</span></a></li>
		 <li class="#"><a href="?c="><span>Neteller</span></a></li>
		 <li class="#"><a href="?c="><span>Payza</span></a></li>
		 <li class="#"><a href="?c="><span>Master Card</span></a></li>
		 <li class="#"><a href="?c="><span>Visa Card</span></a></li>
         <li class="last"><a href="?c="><span>American Express</span></a></li>
      </ul>
   </li>
   
   
      <li class="has-sub"><a href="#"><span>Tools</span></a>
      <ul>
         <li class="#"><a href="?c=economic_callender"><span>Economic Callander</span></a></li>
         <li class="#"><a href="?c=fundamental_and_technical_analysis"><span>Fundamental and Technical Analysis</span></a></li>
		 <li class="#"><a href="?c=forex_indicators"><span>Forex Indicators</span></a></li>
		 <li class="last"><a href="?c=money_management"><span>Money Management</span></a></li>
      </ul>
   </li>
   
   <li class="has-sub"><a href="#"><span>Company</span></a>
      <ul>
         <li class="#"><a href="?c=about_us"><span>About Us</span></a></li>
         <li class="last"><a href="?c=contact_us"><span>Contact Us</span></a></li>
      </ul>
   </li>
   
   <li class="active"><a href="?c=faq"><span>FAQ</span></a></li>

</ul>
</div>';
?>