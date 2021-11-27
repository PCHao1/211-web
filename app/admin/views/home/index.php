<?php 
	include(__DIR__ .'/../header.php');
?> 
		<div class="col-sm-8 mx-auto my-2 p-3 h-100 border rounded-3" id='content'>
		<!-- CONTENT -->
			Hllo
			<?php
			$to = "haovts123@gmail.com";
			$subject = "My subject";
			$txt = "Hello world!";$headers = "From: sender\'s email";

			mail($to,$subject,$txt,$headers);
			?>
		<!-- End content -->
		</div>
	</div>
</div>
</body>
<script>
</script>
</html>