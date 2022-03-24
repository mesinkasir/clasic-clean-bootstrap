<?php 
$load['plugin'] = true;
include('inc/common.php');
login_cookie_check();

get_template('header', cl($SITENAME).' &raquo; '.i18n_r('SUPPORT') ); 

?>
	
<?php include('template/include-nav.php'); ?>

<div class="container">
	
	<div id="maincontent row">
		<div class="main col-12 col-md-12 p-3">
	
			<h3>Update Display Themes template</h3>
			<div class="row">
		<div class="main col-12 col-md-8 p-3 p-md-5">
			<p class="lead">
			Select menu and update your website themes now
			</p>
<p>
<a href="theme-edit.php?f=navbar.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Navbar</a><hr/>
Section 1 Area <br/>
<a href="theme-edit.php?f=widget%2Fsection1%2Fwelcometitle.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Welcome Title</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fwelcomepost.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Welcome Post</a><br/><br/>
Slider Image Area Just insert url image here <br/>
<a href="theme-edit.php?f=widget%2Fsection1%2Fslider1.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Slider 1</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fslider2.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Slider 2</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fslider3.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Slider 3</a>
<hr/>
Footer Area here <br/>
<a href="theme-edit.php?f=widget%2Fsection2%2Ffooter1title.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Title 1</a>
<a href="theme-edit.php?f=widget%2Fsection2%2Ffooter2title.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Title 2</a>
<a href="theme-edit.php?f=widget%2Fsection2%2Ffooter1post.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Post 1</a>
<a href="theme-edit.php?f=widget%2Fsection2%2Ffooter2post.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Post 2</a>
<a href="theme-edit.php?f=widget%2Fsection2%2Ffootercover.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Cover</a>
<hr/>
Google Area <br/>
<a href="theme-edit.php?f=widget%2Fseohtml.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google HTML</a>
<a href="theme-edit.php?f=widget%2Fseoanalystic.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google Analystic</a>
<a href="theme-edit.php?f=widget%2Fseoads.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google Ads</a>
</p>
</div>
		<div class="main col-12 col-md-4 p-3 p-md-5">
<p>
If you need to make donation , you can send money using moneygram or western union on we local bank account 
<br/>
BANK CENTRAL ASIA<br/>
ACCOUNT NO : 0181884109<br/>
ACCOUNT NAME : SUCI CHANIFAH<br/>
IBAN/SWIFT CODE : CENAIDJA<br/>
<br/>your donation can be help we team to develope many open source project.
<a href="https://app.midtrans.com/payment-links/1647457988722" class="btn btn-dark">Donation Now</a> or <a href="https://www.fiverr.com/creativitas/create-your-website-with-cms" class="btn btn-outline-dark">hire me</a>
<!--Axcora have any open source code project ?? of course we have many open source project like CMS , POS point of sale and e-learn for school too. You can donwload it on we sourceforge or github repo pages.-->
</p>
<p>And thank you for using get axcora cms, and hapy codding !!</p>
</div></div>

		</div>
	</div>
	
</div>
<?php get_template('footer'); ?>
