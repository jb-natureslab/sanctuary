	<footer class="footer">
		<div class="footer_restrict flow">
			<p>&copy; <?= date('Y') ?> Sanctuary Foundation &bull; Built by <a href="https://jackbarber.co.uk">Jack</a></p>
		</div>
	</footer>
	
	<script src="https://kit.fontawesome.com/8a8f25e454.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script>
		Fancybox.bind("[data-fancybox]", {
		  // Your options go here
		});
		$('nav button.bars').click(function(){
			$('header nav ul').toggleClass('show');
			$('nav button.bars i').toggleClass('fa-bars').toggleClass('fa-times');
		})
	</script>
</body>
</html>