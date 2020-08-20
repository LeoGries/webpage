<?php
require('navigation.inc.php');
?>
		<button onclick="topFunction()" id="myBtn" title="Go to top">
		<svg width="1.0em" height="1.0em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
		</svg></button> 
		
		
		<div class="container"> 
			<div class ="navbar">
				<a href="contact.html">Kontakt</a>
				<a href="published.html">Veröffentlichung</a>
				<a href="vita.html">Vita</a>
				 <div class="dropdown">
					<button class="dropbtn-active">Leistungsangebote
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="beratung.html">Beratung</a>
					  <a class="active" href="coaching.html">Coaching</a>
					  <a href="fortbildung.html">Forbildung</a>
					  <a href="vorträge.html">Vorträge</a>
					</div>
				</div>
				<a href="index.html">Home</a>	
			</div>
			</div>
		
		<div class="stage">
		<img id="stage" src="coachingBild.jpg" alt="development">	
		<span> Coaching </span>
			
		</div>
<?php
require('footer.php');
?>
