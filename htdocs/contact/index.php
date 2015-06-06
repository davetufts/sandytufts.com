<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/init.php');
$template->set('title',   'Contact — Sandy Tufts');
$template->set('section', 'contact');
$template->place('header');
?>



<div role="main" class="group">

	<h1>Contact</h1>
		
	<div class="contact_info">
		<dl>
			<dt>
				Email
			</dt>
			<dd>
				<a href="mailto:sandytufts@gmail.com">sandytufts@gmail.com</a>
			</dd>
			
			<dt>
				Phone
			</dt>
			<dd>
				(207) 475-5963
			</dd>
		</dt>
	</div>

	<blockquote>
		<p>
			I’d love to hear from you if you have any questions or would like 
			to schedule an interview.
		</p>	
		<p>
			<em>Thanks so much,</em><br />
			<em>Sandy Tufts</em>
		</p>
		
		<p class="facebook">
			<a href="http://www.facebook.com/SandyTuftsBirthDoula"><img src="/img/icons/f_logo.png" alt="Find me on Facebook" /></a>
		</p>
		
	</blockquote>
	
</div>

<aside>
	<h2>Scheduling</h2>
	<p>
		Doulas tend to book clients several months in advance. If possible, 
		begin your doula search by the 5th or 6th month of pregnancy.
	</p>
	<ul class="captioned">
		<li><img src="/img/inline/charlotte_chloe.jpg" alt="My two girls" /></li>
		<li>My daughters, Chloe and Charlotte, meeting each other for the first time in 2005.</li>
	</ul>
</aside>



<?php $template->place('footer') ?>