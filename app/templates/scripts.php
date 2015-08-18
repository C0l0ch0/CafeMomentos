	<script src="<?=WEBROOT.DS;?>js/jquery-1.11.1.min.js"></script>

	<script type="text/javascript">
			var home = document.getElementById('home');
			home.innerHTML ="";
			var about = document.getElementById('about');
			about.innerHTML ="";
			var events = document.getElementById('events');
			events.innerHTML ="";
			var galery = document.getElementById('galery');
			galery.innerHTML ="";
			var videos = document.getElementById('videos');
			videos.innerHTML ="";
			var recipes = document.getElementById('recipes');
			recipes.innerHTML ="";
			var contact = document.getElementById('contact');
			contact.innerHTML ="";

			$.get("home/GetHomeDiv",function(data){
				resultado = data;
				home.innerHTML = data;
			});
			$.get("home/GetAboutDiv",function(data){
				resultado = data;
				about.innerHTML = data;
			});
			$.get("home/GetEventsDiv",function(data){
				resultado = data;
				events.innerHTML = data;
			});
			$.get("home/GetGaleryDiv",function(data){
				resultado = data;
				galery.innerHTML = data;
			});
			$.get("home/GetVideosDiv",function(data){
				resultado = data;
				videos.innerHTML = data;
			});
			$.get("home/GetRecipesDiv",function(data){
				resultado = data;
				recipes.innerHTML = data;
			});
			$.get("home/GetContactDiv",function(data){
				resultado = data;
				contact.innerHTML = data;
			});
	</script>

	<script src="<?=WEBROOT.DS;?>bootstrap/js/bootstrap.min.js"></script>

	<!-- Use for slideshow background -->
	<script src="<?=WEBROOT.DS;?>js/jquery.backstretch.min.js"></script>

	<!-- Use for video background -->
	<script src="<?=WEBROOT.DS;?>js/video.js"></script>
	<script src="<?=WEBROOT.DS;?>js/bigvideo.js"></script>

	<!-- Date and time picker -->
	<script src="<?=WEBROOT.DS;?>js/bootstrap-datepicker.js"></script>
	<script src="<?=WEBROOT.DS;?>js/jquery.datepair.min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/jquery.timepicker.min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/jqBootstrapValidation.js"></script>

	<!-- Google Maps -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?=WEBROOT.DS;?>js/gmaps.js"></script>

	<!-- Other -->
	<script src="<?=WEBROOT.DS;?>js/jquery.matchHeight-min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/twitterFetcher_min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/owl.carousel.min.js"></script>
	<script src="<?=WEBROOT.DS;?>js/jquery.fitvids.js"></script>
	<script src="<?=WEBROOT.DS;?>js/smoothscroll.js"></script>
	<script src="<?=WEBROOT.DS;?>js/wow.min.js"></script>

	<!-- Custom scripts -->
	<script src="<?=WEBROOT.DS;?>js/custom.js"></script>