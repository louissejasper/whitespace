		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>FOOTER</h1>
					</div>	
				</div>
			</div>
		</footer>
		<?php 
		/**
		**
		* Comment view('resize-window'); if your website is already responsive, 
		* because of internal style can cause of an error in W3 Validator
		**
		**/
		view('resize-window'); 

		wp_footer(); ?>
	</body>
</html>