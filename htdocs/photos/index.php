<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/init.php');
$template->set('title',   'Photo Gallery, Birth Photos — Sandy Tufts');
$template->set('section', 'photos');
$template->place('header');
?>



<div role="main">

	<h1>Photo Gallery</h1>
	<p>
		Some special moments I've been privileged to capture! I include 
		photography services of the birth and provide you with an album. 
		See my <a href="/doula_services/">doula services</a> for more info.
	</p>
	
	<ul class="gallery">
		<li><img src="/img/gallery/17_eva.jpg" alt="" /></li>
		<li><img src="/img/gallery/18_eva.jpg" alt="" /></li>
		<li><img src="/img/gallery/19_eva.jpg" alt="" /></li>
		<li><img src="/img/gallery/20_eva.jpg" alt="" /></li>
		<li><img src="/img/gallery/16_upton_sandy.jpg" alt="" /></li>
		<li><img src="/img/gallery/15_upton_family.jpg" alt="" /></li>
		<li><img src="/img/gallery/14_upton_parents_labor.jpg" alt="" /></li>
		<li><img src="/img/gallery/13_jiuliana_birth.jpg" alt="" /></li>
		<li><img src="/img/gallery/12_toms_sandy.jpg" alt="" /></li>
		<li><img src="/img/gallery/11_keough_family.jpg" alt="" /></li>
		<li><img src="/img/gallery/10_rounds_family.jpg" alt="" /></li>
		<li><img src="/img/gallery/9_sawka_family.jpg" alt="" /></li>
		<li><img src="/img/gallery/8_gretchen.jpg" alt="" /></li>
		<li><img src="/img/gallery/7_stultz_birth.jpg" alt="" /></li>
		<li><img src="/img/gallery/6_stultz_bed.jpg" alt="" /></li>
		<li><img src="/img/gallery/5_geneve.jpg" alt="" /></li>
		<li><img src="/img/gallery/4_fosters_sandy.jpg" alt="" /></li>
		<li><img src="/img/gallery/3_fosters_bed.jpg" alt="" /></li>
		<li><img src="/img/gallery/2_april_baby.jpg" alt="" /></li>
		<li><img src="/img/gallery/1_april_labor.jpg" alt="" /></li>
	</ul>

</div>




<?php $template->place('footer') ?>