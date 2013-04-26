<script>
	var LC = {};

	LC.headings = $('form h2');		
	LC.toggledHeadings = sessionStorage.getItem("laravel.crafty.toggledHeadings");

	if (LC.toggledHeadings) {
		LC.toggledHeadings = LC.toggledHeadings.split(";");
	} else {
		LC.toggledHeadings = [0];
	}
	console.log(LC.toggledHeadings);

	//when clicking on headings
	LC.headings
		.on('click', function(e) {
			var currentIndex = LC.headings.index(this),
				i,
				$this = $(this);

			if ($.inArray(""+currentIndex, LC.toggledHeadings) == -1) {
				console.log("It's new but will we add it?", ""+currentIndex);
				//if the current index is not in the array we make sure to add it
				LC.toggledHeadings.push(currentIndex);
			} else {
				//if the current index already exists in the array we remove it
				console.log("We have it already: ", ""+currentIndex);
				LC.toggledHeadings.splice(LC.toggledHeadings.indexOf(""+currentIndex), 1);
				console.warn(LC.toggledHeadings, currentIndex, LC.toggledHeadings.indexOf(""+currentIndex));
			}

			//we save the new state to the session
			sessionStorage.setItem("laravel.crafty.toggledHeadings", LC.toggledHeadings.join(";"))
			console.log("Saved to the session: ", sessionStorage.getItem("laravel.crafty.toggledHeadings"));

			$this
				.toggleClass('active')
				.next()
					.slideToggle();
		});

	/**
	 * We fetch the first sibbling div and hide it initially
	 */
	LC.headings.next().hide();
	
	for(var i = 0; i < LC.toggledHeadings.length; i++) {
		LC.headings.eq(LC.toggledHeadings[i])
			.toggleClass('active')
			.next()
				.show();
	}
	
</script>