<div class="wrapper wrapper--pledges course">
	<div class="wrapper--pledges_restrict flow">
		<h3>Sign-Ups So Far</h3>
		<?php
			echo "<div class='signups'></div>";
		?>
		<script>
			$(window).ready(function(){
			    $.get( "/getCourse.php", function( data ) {
				 	$( ".signups" ).html( data );
				});
		    })
		</script>
	</div>
</div>