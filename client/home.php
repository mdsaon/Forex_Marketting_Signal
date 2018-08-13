<div class="top">
<div class="box1">
<div class="box1h"><h1>Offered Packages</h1></div>
<div id="box1a">
<?php
$sql="select id,Date,EURUSD from performance order by EURUSD desc limit 1";
$r=mysql_query($sql);
print '<h2 align="center">EUR/USD</h2>';
print "<br/>";
while($s=mysql_fetch_row($r))
{
	print '<div class="performance">';
	print "<br/>";
	print "Date:"."&nbsp;".$s[1]."</br>";
	print "Last Business"."<br/>";
	print "Day Profit:"."<br/>"."+".$s[2]."</br>";
	print "<h3>Signal Status:</h3>"."</br></br>";
	print"<h4>Open</h4>";
	print '</div>';	
}
?>

</div>
<div id="box1b">
<?php
$sql="select id,Date,USDJPY from performance order by USDJPY desc limit 1";
print '<h2>USD/JPY</h2></br>';

$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
	print '<div class="performance">';
	print "<br/>";
	print "Date:"."&nbsp;".$s[1]."</br>";
	print "Last Business"."<br/>";
	print "Day Profit:"."<br/>"."+".$s[2]."</br>";
	print "<h3>Signal Status:</h3>"."</br></br>";
	print"<h4>Open</h4>";
	print '</div>';
}
?>
</div>
<div id="box1c">
<?php
$sql="select id,Date,GBPUSD from performance order by GBPUSD desc limit 1";
$r=mysql_query($sql);
print '<h2>GBP/USD</h2></br>';
while($s=mysql_fetch_row($r))
{
	print '<div class="performance">';
	print "<br/>";
	print "Date:"."&nbsp;".$s[1]."</br>";
	print "Last Business"."<br/>";
	print "Day Profit:"."<br/>"."+".$s[2]."</br>";
	print "<h3>Signal Status:</h3>"."</br></br>";
	print"<h4>Open</h4>";
	print '</div>';
	
}
?>
</div>

<div id="box1d">
<?php
$sql="select id,Date,USDCHF from performance order by USDCHF desc limit 1";
$r=mysql_query($sql);
print '<h2 align="left">USD/CHF</h2></br>';
while($s=mysql_fetch_row($r))
{
	print '<div class="performance">';
	print "<br/>";
	print "Date:"."&nbsp;".$s[1]."</br>";
	print "Last Business"."<br/>";
	print "Day Profit:"."<br/>"."+".$s[2]."</br>";
	print "<h3>Signal Status:</h3>"."</br></br>";
	print"<h4>Open</h4>";
	print '</div>';
}
?>
</div>

</div>

<div class="box1slide">
<div id="page-wrap">
											
	<div class="slider-wrap">
		<div id="main-photo-slider" class="csw">
			<div class="panelContainer">

				<div class="panel" title="Panel 1">
					<div class="wrapper">
						<img src="images/copy.png" alt="temp" />
						<div class="photo-meta-data">
							Photo Credit: <a href="http://flickr.com/photos/astrolondon/2396265240/">Kaustav Bhattacharya</a><br />
							<span>"Free Tibet" Protest at the Olympic Torch Rally</span>
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 2">
					<div class="wrapper">
						<img src="images/copy1.png" alt="temp" />
						<div class="photo-meta-data">
							Chicago Bears at Seattle Seahawks<br />
							<span>Fifth field goal, overtime win for the Seahawks</span>
						</div>
					</div>
				</div>		
				<div class="panel" title="Panel 3">
					<div class="wrapper">
						<img src="images/copy1.png" alt="temp" />
						<div class="photo-meta-data">
							Chicago Bears at Seattle Seahawks<br />
							<span>Fifth field goal, overtime win for the Seahawks</span>
						</div>
					</div>
				</div>	
				<div class="panel" title="Panel 4">
					<div class="wrapper">
						<img src="images/copy1.png" alt="temp" />
						<div class="photo-meta-data">
							A Poem by Shel Silverstein<br />
							<span>Falling Up</span>
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 5">
					<div class="wrapper">
						<img src="images/copy.png" alt="temp" />
						<div class="photo-meta-data">
							New Video on CSS-Tricks<br />
							<span>Using Wufoo for Web Forms</span>
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 6">
					<div class="wrapper">
						<img src="images/copy.png" alt="temp" />
						<div class="photo-meta-data">
							New Video on CSS-Tricks<br />
							<span>Using Wufoo for Web Forms</span>
						</div>
					</div>
				</div>

			</div>
		</div>

		<a href="#1" class="cross-link active-thumb"><img src="images/new.png" class="nav-thumb" alt="temp-thumb" /></a>
		<div id="movers-row">
			<div><a href="#2" class="cross-link"><img src="images/new2.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			<div><a href="#3" class="cross-link"><img src="images/new.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			<div><a href="#4" class="cross-link"><img src="images/new2.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			<div><a href="#5" class="cross-link"><img src="images/new.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			<div><a href="#6" class="cross-link"><img src="images/new2.png" class="nav-thumb" alt="temp-thumb" /></a></div>
		</div>

	</div>
	
	</div>

</div>


<div class="box1Time">
<h1>Time Zone</h1>
</div>
<div class="box2">
<h1 align="center">Forex Performance</h1><br/></br><br/>
	<div id="chart_div" style="width: 1000px; height: 600px;">
    
    </div>
</div>

<div class="middle">
<div class="box3">
<div class="box3h">
<h1>Special Package</h1>
</div>
<div class="box3b">
Gold/Oil<br/><br/>
<a href="?c=orderform">Subscribe Now</a></br><br/>
<a href="?c=login">Login</a>
</div>
</div>

<div class="box4">
<div class="box4h">
<h1>Market Quotes Instantly</h1>

</div>
<div class="box4b">
Content
</div>
</div>

<div class="box5">
<div class="box5h">
<h1>News Feed</h1>
</div>
<div class="box5b">
Content
</div>
</div>

<div class="box6">
<div class="box6h">
<h1>Forex Quotes</h1>
</div>
<div class="box6b">
Content
</div>
</div>
</div>

<div class="bottom">

<div class="box7">
<h1>Economic Callender</h1>
</div>
<div class="box8">
<div class="box8a">
<img src="images/paymentMethodImg.png" height="200px" width="350px"/>
</div>
<div class="box8b">
<table border="0" height="200px" width="650px">
<tr>
<td align="center" style="font-size:14px"><a href="?c=what_is_forex_trading">What is Forex Trading</a></td>
<td align="center" style="font-size:14px"><a href="?c=what_is_forex_signal">What is Forex Signal</a></td>
<td align="center" style="font-size:14px"><a href="?c=why_forex_signal">Why Forex Signal</a></td>
</tr>
<tr>
<td align="center" style="font-size:14px"><a href="?c=benefit_of_forex_signal">Benefit of Forex Signal</a></td>
<td align="center" style="font-size:14px"><a href="?c=whatisforextrading">Signal Packages</a></td>
<td align="center" style="font-size:14px"><a href="?c=orderform">Subscribe Now</a></td>
</tr>
<tr>
<td align="center" style="font-size:14px"><a href="?c=economic_callender">Economic Callender</a></td>
<td align="center" style="font-size:14px"><a href="?c=forex_indicators">Forex Indicators</a></td>
<td align="center" style="font-size:14px"><a href="?c=terms_and_conditions">Terms & Conditions</a></td>
</tr>
<tr>
<td align="center" style="font-size:14px"><a href="?c=about_us">About Us</a></td>
<td align="center" style="font-size:14px"><a href="?c=contact_us">Contact Us</a></td>
<td align="center" style="font-size:14px"><a href="?c=faq">FAQ</a></td>
</tr>
</table>
</div>
</div>
</div>