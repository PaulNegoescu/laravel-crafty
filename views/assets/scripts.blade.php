<script>
	$('form h2')
		/**
		 * Handles clicks on the heading
		 * @param  {[type]} e The event object
		 */
		.on('click', function(e) {
			$(this)
				.toggleClass('active')
				.next()
				.slideToggle();
		})
		/**
		 * We fetch the first sibbling div and hide it initially
		 */
		.next()
			.hide()
			.end()
		/**
		 * We jump back to the heading and select only the first one and make it visible
		 */
		.first()
			.toggleClass('active')
			.next()
				.show()

</script>