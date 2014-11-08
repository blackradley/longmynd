<section>
	<h1><a class="secret" href="<?php echo  $blogger_page->sourceUrl ?>"><?php echo  $blogger_page->title ?></a></h1>
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
	var map;
	
	function initialize() {
		var myLatlng = new google.maps.LatLng(<?php echo  $graph->location->latitude ?>,<?php echo  $graph->location->longitude ?>);
		var mapOptions = {
				zoom: 12,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
				};
		var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	
		var contentString = '<h3><?php echo  $graph->name ?></h3>' + 
			'<p><?php echo  $graph->location->address ?></br></p>';
	
	    var infowindow = new google.maps.InfoWindow({
	        content: contentString,
	        maxWidth: 400
	    });
	
	    var marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,
	        title: '<?php echo  $graph->name ?>'
	    });
	    
	    google.maps.event.addListener(marker, 'click', function() {
	      infowindow.open(map, marker);
	    });
	    infowindow.open(map, marker);
	
	    // Pan the map a bit so the info window is nicely positioned
	    google.maps.event.addListener(infowindow, 'domready', function() {
	        map.panBy(0, -75)
	    });
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<div id="map_canvas" style="width: 100%; height: 475px;"></div>
	<br>
	<p><?php echo  $blogger_page->content ?></p>
</section>
