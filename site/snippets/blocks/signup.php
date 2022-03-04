<div class="wrapper wrapper--form">
	<div class="wrapper--form_restrict flow">
		<form
		  action="https://buttondown.email/api/emails/embed-subscribe/sanctuaryfoundation"
		  method="post"
		  target="popupwindow"
		  onsubmit="window.open('https://buttondown.email/sanctuaryfoundation', 'popupwindow')"
		  class="embeddable-buttondown-form"
		>
	      <h2 id="signup">Register Your Interest</h2>
		  <label for="first-name">First name</label>
		  <input id="first-name" type="text" name="metadata__first-name" required placeholder="John" />
		  <label for="organisation">Type of Organisation</label>
		  <select id="organisation" name="metadata__organisation" required>
			  <option value="individual">Individual</option>
			  <option value="church">Church</option>
			  <option value="community-group">Community Group</option>
			  <option value="business">Business</option>
		  </select>
		  <label for="bd-email">Enter your email</label>
		  <input type="email" name="email" id="bd-email" required placeholder="john@example.com" />
		  <input type="submit" value="Keep Me Informed" class="button" />
		</form>
	</div>
</div>