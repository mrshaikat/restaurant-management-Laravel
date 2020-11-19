(function($){

	$(document).ready(function(){


		$("button#about-photo").click(function(){

			var about_photo = wp.media({

				title			: 'Select a Photo',
				button			: {

					text 	: 'Insert a Button'

				}

			});


			about_photo.open();

			about_photo.on('select', function(){

				var imgurl = about_photo.state().get('selection').first().toJSON(); 

				$("input#about-photo").val(imgurl.url);
				$("img#about-photo").attr('src', imgurl.url);


			});

			return false;
		});








		$("button#client-photo").click(function(){

			var client_photo = wp.media({

				title			: 'Select a Photo',
				button			: {

					text 	: 'Insert a Button'

				}

			});


			client_photo.open();

			client_photo.on('select', function(){

				var imgurl = client_photo.state().get('selection').first().toJSON(); 

				$("input#client-photo").val(imgurl.url);
				$("img#client-photo").attr('src', imgurl.url);


			});

			return false;
		});




	});

})(jQuery)