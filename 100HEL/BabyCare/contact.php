<?php
include("db.php");
include("header.php");
?>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 22.7270182, lng: 75.8777671},
          zoom: 14
        });
      }
    </script>
		<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Contact Us</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 border">
					<a href="#" onclick="demo()">One</a>
					<a href="#" onclick="demo1()">Two</a>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div id="map" class="col-md-10 offset-md-1 border" style="height: 400px;">
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuUHTjsgyBWPSa8kChNS-j0n3axuRU5aE&callback=initMap" async defer></script>
<?php
include("footer.php");
?>