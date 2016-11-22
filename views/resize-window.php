<?php do_action( 'wp_enqueue_scripts', ['resize-windows.css'] ) ?>

<div class="resize">
	<input type="number" name="window-width" placeholder="Width - Min. 100">
	<input type="number" name="window-height" placeholder="Height - Min. 100">
	<a href="#resize" id="window-resize"><p>RESIZE</p></a>
</div>

<?php do_action( 'wp_enqueue_scripts', ['resize-windows.js'], 'jquery', true ) ?>