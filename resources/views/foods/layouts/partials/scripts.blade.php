<!-- js -->
<script src="foods/js/classie.js"></script>
	<script src="foods/js/demo.js"></script>

	<script src="foods/js/jquery-1.11.3.min.js"></script>
	<script src="foods/js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>