<div class="wrapper wrapper--pledges">
	<div class="wrapper--pledges_restrict flow">
		<h3>Pledges So Far</h2>
		<?php
			echo "<p class='pledges'></p>";
		?>
		<script>
			$(window).ready(function(){
			    $.get( "/getPledges.php", function( data ) {
				 	$( ".pledges" ).text( data );
				});
		    })
		</script>
	</div>
</div>