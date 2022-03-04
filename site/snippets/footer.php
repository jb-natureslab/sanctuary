	<footer class="footer">
		<div class="footer_restrict flow">
			<p>&copy; <?= date('Y') ?> Sanctuary Foundation &bull; Built by <a href="https://jackbarber.co.uk">Jack</a></p>
		</div>
	</footer>

	<!-- Matomo -->
	<script>
	  var _paq = window._paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['disableCookies']);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="https://analytics.natureslaboratory.co.uk/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '15']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->

</body>
</html>