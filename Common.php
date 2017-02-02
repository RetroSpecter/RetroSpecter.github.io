<?php
	
	function top(){
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Jose Pacio</title>
				<link href="portfolio.css" type="text/css" rel="stylesheet" />
			</head>
			<body>
				<div id="header">
					<h1>
						Jose Pacio
					</h1>
					<h2>
						"I make stuff"
					</h2>
				</div>
				<div id="buttons">
					<a href="frontPage.php" class="button"> About </a>
					<a href="frontPage.php" class="button"> Portfolio</a>
					<a href="Resume.php" class="button"> Resume</a>
					<a href="frontPage.php" class="button"> Blog</a>
					<a href="Contact.php" class="button"> Contacts</a>
				</div>
				<div id="content">
					<br /> <?-- ugly code fix this later --?>
					<br />
					<br />
					<h2> Resume </h2>
					Download PDF | DOCX
					<br />
					<br />
					<br />
					<hr />		
					<div id="contactInfo">
						<h1>Jose Pacio</h1>
						Programmer
						<br />
						josepacio@comcast.net | this website link | 253-227-8337
					</div>
					
					<div class="subsection">
						<h2>Technology Summary</h2>			
						<span class="subtitle">Game Development:</span> Unity 3D, Unity 2D
						<br />
						<span class="subtitle">Programming Languages:</span> C#,Java, Familiar with: Python, Actionscript 2.0, Actionscript 3.0 
						<br />
						<span class="subtitle">Web Development:</span> HTML5, CSS, Javascript, PHP, SQL
						<br />
						<span class="subtitle">Video Production:</span> Adobe Premiere, Adobe After Effects, Adobe Flash
						<br />
						<span class="subtitle">Organization:</span> Microsoft Word, Powerpoint, Google Docs
					</div>
			<?php
	}
?>
