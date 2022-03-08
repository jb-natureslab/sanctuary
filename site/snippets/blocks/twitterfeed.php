<div class="wrapper wrapper--twitter">
	<div class="wrapper--twitter_restrict flow">
		<h2>Join the Conversation on Twitter</h2>
		<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
		<script src="//assets.juicer.io/embed-amd.js" type="text/javascript"></script>
		<link href='//assets.juicer.io/embed.css' media='all' rel='stylesheet' type='text/css' />
		<ul class="juicer-feed" data-feed-id="ukrainesanctuary"></ul>   
		<script>
			 $(window).scroll(function() {
		        if($(window).scrollTop()>'500'){
		            Juicer.initialize();
		            $.get( "/getPledges.php", function( data ) {
					 	$( ".pledges" ).html( data );
					});
		        }
		    });
		</script>
	</div>
</div>