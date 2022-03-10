<div class="wrapper wrapper--pledges">
	<div class="wrapper--pledges_restrict flow">
		<h3>Pledges So Far</h3>
		<?php
			echo "<div class='pledges'></div>";
		?>
		<script>
			$(window).ready(function(){
			    $.get( "/getPledgeTotal.php", function( data ) {
				 	$( ".pledges" ).html( data );
				});
		    })
		</script>
	</div>
</div>