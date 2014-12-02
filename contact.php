<?php 
	require('header_inner.php')
?>
	
	<div id="content" class="bodyinner resize">
	
		<div id="main" class="interior">
		
		<section>
			<form id="contact-form" name="contactform" method="post" action="email_confirmation.php">
				<h3>Get in touch</h3>
				<h5 class="contacth5">Want to tell us what's on your mind? Send us a note and we'll get back to you.</h5>
				<div>
					<label>
						<h6>Name: (required)</h6>
						<input name="name" placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
					</label>
				</div><br>
				<div>
					<label>
						<h6>Email: (required)</h6>
						<input name="email" placeholder="Please enter your email address" type="email" tabindex="2" required>
					</label>
				</div><br>
				<div>
					<label>
						<h6>Telephone:</h6>
						<input name="telephone" placeholder="Please enter your phone number" type="tel" tabindex="3">
					</label>
				</div><br>
				<div>
					<label>
						<h6>Website:</h6>
						<input name="website" placeholder="Begin with http://" type="url" tabindex="4" >
					</label>
				</div><br>
				<div>
					<label>
						<h6>Message: (required)</h6>
						<textarea name="comments" placeholder="Include all the details you can." tabindex="5" required></textarea>
					</label>
				</div><br>
				<div>
					<label>
						<h6>What is 3+4? (required)</h6>
						<input name="human" placeholder="Let us know you're human." type="text" required>
					</label>
				</div><br>
				<div>
					<button name="submit" type="submit" id="contact-submit">Send Email</button>
				</div>
			</form>
		</section>
			
		</div>
	</div>
	
<?php
	require('footer_inner.php')
?>
