<?php get_header(); ?>
<?php $locator = CFS()->get('mapa_experiencia'); ?>

		<script src="https://maps.googleapis.com/maps/api/js"></script>
	    <script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        
	        var myLatlng = new google.maps.LatLng(<?php echo $locator; ?>);
	        
	        var mapOptions = {
	          center: myLatlng,
	          zoom: 8,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	        
	        var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map
			});

	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
	</script>
			
		<div id="map-canvas"></div>
			
	</div>

<?php get_footer(); ?>