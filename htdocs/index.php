<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/init.php');

$template->set('title',  'Sandy Tufts – Certified Birth Doula in Maine');
$template->set('section', 'home');
$template->set('description', 'Sandy Tufts is a DONA certified birth doula serving Southern Maine, Seacoast New Hampshire, and North Shore Massachusetts.');
$template->place('header');
?>

<script type="text/javascript">
	$(document).ready(function() {
		$(".highlight").click(function() {
			window.location=$(this).find("a").attr("href");return false;
		});
	});
</script>



<div class="stage">
	<div class="group">
		<div class="visual">
			<img src="/img/home/sandy_silo.jpg" alt="" />
		</div>
		<div class="message">
			<h1>
				<a href="/about/">
					Professional <em>&amp;</em> Nurturing Support for Seacoast Families in the Childbearing Year
				</a>
			</h1>
			<p>
				<a href="/about/">
					In my doula practice, I strive to create authentic connections with my clients, 
					along with an atmosphere of safety and acceptance. Where women can gain strength, 
					discover their confidence and flourish in their new role. Every mother experiences 
					birth differently! I am there to help you find YOUR way.
					
				</a>
			</p>
		</div>
	</div>
</div>

<div class="main group">
	<div role="main">
		
		<section class="intro group">
			<h3>Serving Southern Maine, Seacoast New Hampshire, &amp; North Shore Massachusetts</h3>
			<p>
				MSW, certified birth doula, certified lactation counselor and placenta encapsulation 
				specialist serving southern Maine, Seacoast NH and North Shore, Massachusetts.
			</p>
		</section>
		
		
		<section class="highlights group">
			
			<div class="highlight">
				<h2>Doula Services</h2>
				<img src="/img/home/doula_3.jpg" style="" />
				<p>
					The wisdom and emotional support of experienced women at birth is an ancient tradition. 
					Doulas in modern society today, are carrying on this tradition.
				</p>
				<p>
					<a href="/doula_services/">Learn More</a>
				</p>
			</div>

			<div class="highlight">
				<h2>Placenta Encapsulation</h2>
				<img src="/img/home/placenta_encapsulation.jpg" style="" />
				<p>
					Although a relatively new idea to our Western culture, increasing numbers of 
					women are taking advantage of the benefits their placenta can offer.
				</p>
				<p>
					<a href="/placenta_encapsulation/">Learn More</a>
				</p>
			</div>

			<div class="highlight">
				<h2>Breastfeeding Support</h2>
				<img src="/img/home/breastfeeding.jpg" style="" />
				<p>
					Early support is essential to establishing a successful and positive 
					nursing relationship from the start.
				</p>
				<p>
					<a href="/breastfeeding/">Learn More</a>
				</p>
			</div>
			
		</section>
		
		
		<section class="videos group">
			
			<div class="video">
				<h3>The Essential Ingredient: Doula</h3>
				<div class="player">
					<iframe class="youtube-player" type="text/html" src="http://www.youtube.com/embed/u792CxDT7cE" frameborder="0"></iframe>
				</div>
				<p>
					DONA International is extremely pleased to present their new documentary 
					about birth and postpartum doulas.
				</p>
			</div>
			
			<div class="video">
				<h3>Do You Doula</h3>
				<div class="player">
					<iframe class="youtube-player" type="text/html" src="http://www.youtube.com/embed/jvmB96cRnaU" frameborder="0"></iframe>
				</div>
				<p>
					Another short film explaining the benefits of a doula.
				</p>
			</div>
					
		</section>
		
		<p class="attr">
			Belly photo by <a href="https://www.flickr.com/photos/meaganjean/3804884039">Meagan Jean</a>
		</p>
	</div>

</div>

<?php $template->place('footer') ?>