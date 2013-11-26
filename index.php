<!DOCTYPE html>
<!-- Comment
/* @author: Rama Thodusu
* @filename:index page
* @websitename: MyPortfolio
* @description: This MyPortfolio website is Mobile specific consits of logo navigation bar,includes five pages
* home, aboutme, contact me, projects and services pages with different themes
*/-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!-- title of the home page-->
		<title>My Portfolio Project</title>

		<link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">

		<!-- Extra Codiqa features -->
		<link rel="stylesheet" href="codiqa.ext.css">
		<!-- styling for the slider-->
		<link rel="stylesheet" href="slider.css">
		<link rel="stylesheet" href="style.css">

		<!-- jQuery and jQuery Mobile -->
		<script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
		<script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

		<!-- Extra Codiqa features -->
		<script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
		<!-- responsive image slider jquery and javascript -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="responsiveslides.min.js"></script>
		<script src="responsiveslides.js"></script>
		<script>
			$(function() {
				$(".rslides").responsiveSlides();
			});
		</script>
	</head>
	<body>
		<!-- Home page consists of logo, two navigation bars with buttons, image slider,listview to view full page and footer -->
		<div id="home" data-role="page">
			<div data-role="header" data-theme="b">
				<h3> My Portfolio </h3>
				<!--logo image and its styling-->
				<div style="text-align: center;" id="logo">
					<img style="width: 143px; height: 126px;" id="logo" src="images/achlogo.png">
				</div>
				<!-- Navigation bar for home page -->
				<div id="homenav" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<!-- when the home page is opened the button will be active with the blue theme and as home icon-->
							<a class="ui-btn-active ui-state-persist" href="#home" data-theme="b"
							data-icon="home" data-transition="flip"> Home </a>
						</li>
						<li>
							<a href="#aboutme" data-theme="e" data-icon="info" data-transition="flip"> About Me </a>
						</li>
						<li>
							<a href="#contactme" data-theme="b" data-icon="grid" data-transition="flip"> Contact Me </a>
						</li>
						<li>
							<a href="signup.php" data-theme="b"> User Login </a>
						</li>
					</ul>
				</div>
				<!-- Navigation bar for only home page with two additional buttons with respective themes-->
				<div id="projserv" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#project" data-theme="c" data-icon="" data-transition="fade"> Projects </a>
						</li>
						<li>
							<a href="#service" data-theme="c" data-icon="" data-transition="fade"> Services </a>
						</li>
					</ul>
				</div>
			</div>
			<!-- content of the page -->
			<div data-role="content">
				<!-- image slider with the images linked to project page-->
				<ul class="rslides">
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/Movie/"><img src="images/Movie.jpg" alt=""></a>
					</li>
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/Movie/"><img src="images/Movie2.jpg" alt=""></a>
					</li>
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/Radio/"><img src="images/radio.jpg" alt=""></a>
					</li>
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/Radio/"><img src="images/radio2.jpg" alt=""></a>
					</li>
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/weather/home.html"><img src="images/weather.jpg" alt=""></a>
					</li>
					<li>
						<a href="http://webdesign4.georgianc.on.ca/~200235316/weather/home.html"><img src="images/weather1.jpg" alt=""></a>
					</li>
				</ul>
			</div>
			<!-- footer of the page-->
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<h3 id="footer"> Copyright @ 2013 </h3>
			</div>

			<div>
				<ul data-role="listview" data-inset="true">
					<li>
						<a href="index.html">Full Site</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Project work page consists of logo, navigation bar, back button link to home page, images of the work done on click will open the
		project page and a footer-->
		<div id="project" data-role="page">
			<div data-role="header" data-theme="b">
				<h3> My Skills</h3>
				<div style="text-align: center;" id="logo">
					<img style="width: 143px; height: 126px;" id="logo" src="images/achlogo.png">
				</div>
				<div id="projserv" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#home" data-theme="b" data-icon="home" data-transition="flip"> Home </a>
						</li>
						<li>
							<a href="#aboutme" data-theme="e" data-icon="info" data-transition="flip"> About Me </a>
						</li>
						<li>
							<a href="#contactme" data-theme="b" data-icon="grid" data-transition="flip"> Contact Me </a>
						</li>
					<li>
							<a href="signup.php" data-theme="b" data-icon="grid" data-transition="flip"> User Login </a>
						</li>
					</ul>
				</div>
			</div>
			<!--back button link to home page-->
			<div>
				<section>
					<a class="btn" href="index.html">Back </a>
				</section>
			</div>
			<div data-role="content">
				<section>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/Movie/"><img style="width: 100%; height: 100%;" src="images/Movie.jpg" /></a></br>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/weather/home.html"><img style="width: 100%; height: 100%;" src="images/weather.jpg" /></a></br>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/Radio/"><img style="width: 100%; height: 100%;" src="images/radio.jpg" /></a></br>
				</section>
			</div>
			<!-- footer of the page-->
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<h3 id="footer"> Copyright @ 2013 </h3>
			</div>
		</div>
		<!--Services page consists of navigation bar, back link to home page, collapsible set with content for different sections images linked to the project web page
		and footer-->
		<div id="service" data-role="page">
			<div data-role="header" data-theme="b">
				<h3> My Skills</h3>
				<div style="text-align: center;" id="logo">
					<img style="width: 143px; height: 126px;" id="logo" src="images/achlogo.png">
				</div>
				<div id="projserv" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#home" data-theme="b" data-icon="home" data-transition="flip"> Home </a>
						</li>
						<li>
							<a href="#aboutme" data-theme="e" data-icon="info" data-transition="flip"> About Me </a>
						</li>
						<li>
							<a href="#contactme" data-theme="b" data-icon="grid" data-transition="flip"> Contact Me </a>
						</li>
						<li>
							<a href="signup.php" data-theme="b" data-icon="grid" data-transition="flip"> User Login </a>
						</li>
					</ul>
				</div>
			</div>
			<div>
				<!--back button link to home page-->
				<section>
					<a class="btn" href="index.html">Back </a>
				</section>
			</div>
			<div data-role="content">
				<!-- collapsible set with content divided in to four parts about the services offered-->
				<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
					<div data-role="collapsible">
						<h3> Web Development </h3>
						<p>
							You can get the high quality website for your company
							<br/>
							Provide me the business function of your company like baby products or restaurant or Mens product or Ladies Dresses</br>
							I will make a website of your choice and interest
						</p>
					</div>
					<div data-role="collapsible">
						<h3> Web Design </h3>
						<p>
							Designs for Greeting cards and your Visiting cards are also made
						</p>
					</div>
					<div data-role="collapsible">
						<h3> Programming </h3>
						<p>
							I will be using PHP programming language, Jquery, JavaScript and Sequel Server for back end
							<br/>
							HTML5 and CSS3 are latest in market for your web site front end
						</p>
					</div>
					<div data-role="collapsible">
						<h3> Summary </h3>
						<p>
							->From designing to web programming, whatever your need would be, I can come up with solutions that you want for your projects.
							<br/>
							->I am all about high quality work and happy clients.so just ring me for the expert help you are looking.
							<br/>
							->I am constantly honing my craft, learning new methods and trends.visit my project work page to know more.
							<br/>
							->Please click on the links or images below will direct you to the webpage. </br>
							->Please feel free to contact me whenever you like to discuss your requirements
						</p>
					</div>
				</div>
				<section>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/Movie/"><img style="width: 100%; height: 100%;" src="images/Movie.jpg"/></a>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/weather/home.html"><img style="width: 100%; height: 100%;" src="images/weather.jpg"/></a></br>
					<a href="http://webdesign4.georgianc.on.ca/~200235316/Radio/"><img style="width: 100%; height: 100%"; src="images/radio.jpg"/></a>
					<a href="http://webdesign4.georgianc.on.ca/~200235016/finalproject10/"><img style="width: 100%; height: 100%;" src="images/member.jpg"/></a>
				</section>
			</div>
			<!-- footer of the page-->
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<h3 id="footer"> Copyright @ 2013 </h3>
			</div>
		</div>

		<!-- About Me page has the logo, navigation bar, tagline, mission statement, photo, resume and footer-->
		<div id="aboutme" data-role="page">
			<div data-role="header" data-theme="b">
				<h3> My Bio-Data </h3>
				<div style="text-align: center;" id="logo">
					<img style="width: 143px; height: 126px;" id="logo" src="images/achlogo.png">
				</div>
				<div id="homenav" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#home" data-theme="e"
							data-icon="home" data-transition="flip"> Home </a>
						</li>
						<li>
							<a class="ui-btn-active ui-state-persist" href="#aboutme" data-theme="d" data-icon="info" data-transition="flip"> About Me </a>
						</li>
						<li>
							<a href="#contactme" data-theme="e" data-icon="grid" data-transition="flip"> Contact Me </a>
						</li>
						<li>
							<a href="signup.php" data-theme="b" data-icon="grid" data-transition="flip"> User Login </a>
						</li>
					</ul>
				</div>
			</div>
			<div data-role="content">
				<header>
					<!-- header with welcome statement and tagline-->
					<h1 style="color: purple;">A Warm "WELCOME" Viewer!!!</h1>
					<h3>Dare to be Programmer and Care to Acheive</h3>
				</header>
				<div>
					<section>
						<p>
							<strong>My Dream is to become a good programmer </strong></br>
							I am an all round developer who knows front end, backend and middle tier programming
							<br/>
							I can design the websites, greeting cards, visiting cards
							I put my efforts to fullfill your requirements. </br>
							Nice journey so far.
						</p>
					</section>
					<section>
						<!--profile picture and resume-->
						<p ><img src="images/me.jpg" width="150" height="150"></br>

							<strong style="color:blue;">Career Objective</strong></br>
							To excel and innovate in an organisation by working in a well experienced team with all the passion and learn constantly with never ending improvement aligning all my resources towards the multi-faceted growth of the organization, adding value to the organization as well as myself
							____________________________________________________________________
							<strong style="color:blue;">Professional Profile</strong></br>
							•	21 months of significant experience in Microsoft .Net Technologies, SQL server in the field of software development with good knowledge of the development process</br>
							•	Developing .Net based applications using C#, Asp.net 2.0, ASP, HTML5, CSS3, XML, JAVASCRIPT, SQL server 2008</br>
							•	Tools and utilities used are Visual Studio 2008/2010, VI Tool, SVN, GENDB, Version-one, one note</br>
							•	Domain experience in Mortgage. Familiar with waterfall and agile methodologies</br>
							____________________________________________________________________
							<strong style="color:blue;">Education</strong></br>
							Computer Programmer Graduate Diploma Program, Barrie, Ontario                              2012 - 2014</br>
							Bachelor of Engineering (E.I.E), JNT University, India.                                                                     2007</br>
							____________________________________________________________________
							<strong style="color:blue;">Technical work experience</strong></br>
							Systems Analyst, Ministry of Government Services, Toronto                                                      2013</br>
							Programmer Analyst, Cognizant Technology Solutions, India                                            2010 - 2012</br>

							<strong style="color:blue;">Non-technical work experience</strong></br>
							Georgian College</br>
							•	Worked as an Airport Greeter at International Centre Georgian College for Summer Semester 2013</br>
							•	I did volunteering for several events like Leadership Conference and Open House at Georgian College</br>
							•	Fund Raiser for Easter Seals</br>
							____________________________________________________________________
							<strong style="color:blue;">Achievements</strong></br>
							•	Added in Dean’s list with 90.6 and 92.1 G.P.A  in first semester and second semesters respectively</br>
							•	Received Bruce Hill International Award 2013</br>
							•	Completed work smart campus certificate with overall score of 87%</br>
							•	Obtained 100% in web programming using HTML5 and CSS</br>
							•	Awarded first prize for technical quiz at VIGYANA DARSHAN - A national level technical symposium</br>
							•	Exhibited a project on ELECTRONIC QUIZ TABLE at VIGYANA PRADARSHAN - A state level technical project exhibition</br>
							•	Secured 82% marks in NATIONAL ENVIRONMENT AWARENESS TEST</br>
							•	Presented project on SURVEY OF SEWAGE in DISTRICT LEVEL NATIONAL CHILDREN SCIENCE CONGRESS -2000</br>
						</p>
					</section>
				</div>
			</div>
			<!-- footer of the page-->
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<h3 id="footer"> Copyright @ 2013 </h3>
			</div>
		</div>

		<!-- Contact Me page has the logo, navigation bar, grid to give contact details, keep connected section for social networks and footer -->
		<div id="contactme" data-role="page">
			<div data-role="header" data-theme="b">
				<h3> Reach me at </h3>
				<div style="text-align: center;" id="logo">
					<img style="width: 143px; height: 126px;" id="logo" src="images/achlogo.png">
				</div>
				<div id="homenav" data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="#home" data-theme="c" data-icon="home" data-transition="flip"> Home </a>
						</li>
						<li>
							<a href="#aboutme" data-theme="e" data-icon="info" data-transition="flip"> About Me </a>
						</li>
						<li>
							<a  class="ui-btn-active ui-state-persist" href="#contactme" data-theme="c" data-icon="grid" data-transition="flip"> Contact Me </a>
						</li>
						<li>
							<a href="signup.php" data-theme="b" data-icon="grid" data-transition="flip"> User Login </a>
						</li>
					</ul>
				</div>
			</div>
			<div data-role="content">
				<section>
					<strong style="color:purple;">Contact Details:</strong>
				</section>
				<!-- displaying my contact details in the grid view-->
				<div style="color:#3366FF;" id="table" class="ui-grid-a">

					<div class="ui-block-a">
						Full Name
					</div>
					<div class="ui-block-b">
						Rama Thodusu
					</div>
					<div class="ui-block-a">
						Location
					</div>
					<div class="ui-block-b">
						Barrie
					</div>
					<div class="ui-block-a">
						Street
					</div>
					<div class="ui-block-b">
						xxx, AmblerBay
					</div>
					<div class="ui-block-a">
						Province
					</div>
					<div class="ui-block-b">
						Ontario
					</div>
					<div class="ui-block-a">
						Email Id
					</div>
					<div class="ui-block-b">
						xxx@gmail.com
					</div>
					<div class="ui-block-a">
						Contact Number
					</div>
					<div class="ui-block-b">
						705-700-0000
					</div>
				</div>
				<!-- keep connected section with the social networking sites-->
				<div>
					<section>
						<strong style="color:purple;">Keep Connected</strong>
					</section>
					<div>
						<a href="https://www.facebook.com/" data-transition="fade"> Facebook </a>
					</div>
					<div>
						<a href="http://www.linkedin.com/profile/view?id=170837997&amp;trk=nav_responsive_tab_profile"
						data-transition="fade"> LinkedIn </a>
					</div>
				</div>
			</div>
			<!-- footer of the page-->
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<h3 id="footer"> Copyright @ 2013 </h3>
			</div>
		</div>
	</body>
</html>
