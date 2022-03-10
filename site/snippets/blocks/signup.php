<div class="wrapper wrapper--form" id="pledge">
	<div class="wrapper--form_restrict flow">
		<form
		  action="https://buttondown.email/api/emails/embed-subscribe/sanctuaryfoundation"
		  method="post"
		  target="popupwindow"
		  onsubmit="window.open('https://buttondown.email/sanctuaryfoundation', 'popupwindow')"
		  class="embeddable-buttondown-form"
		>
	      <h2 id="signup">Pledge Your Support</h2>
		  <label for="name">Name</label>
		  <input id="name" type="text" name="metadata__name" required placeholder="John" />
		  
		  <label for="bd-email">Email</label>
		  <input type="email" name="email" id="bd-email" required placeholder="john@example.com" />
		  
		  <label for="phone">Phone</label>
		  <input id="phone" type="text" name="metadata__phone" />
		  
		  <label for="organisation">Type of Organisation</label>
		  <select id="organisation" name="tag" required>
			  <option value="Individual">Individual</option>
			  <option value="Church">Church</option>
			  <option value="School">School</option>
			  <option value="Community Group">Community Group</option>
			  <option value="Business">Business</option>
		  </select>
		  
		  <p>Please read our <a href="/privacy">privacy statement</a> before submitting this form. By pledging your support you are not committing to any specific form of help at this point, as the details of the scheme are yet to be published.</p>
		  
		  <input type="submit" value="I Pledge My Support" class="button" />
		</form>
	</div>
</div>