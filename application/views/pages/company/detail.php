<style>
       /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
       #map {
         height: 70%;
         
       }
       /* Optional: Makes the sample page fill the window. */
       html, body {
         height: 100%;
         margin: 0;
         padding: 0;
       }
 </style>

<div class="container">
	<a href="<?php echo base_url();?>Welcome_IF/company">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<br>
	<br>
	<div class="row bg-white">
		<div class="col-md-6" id="col-md-6">
			<br>
			<?php foreach ($company as $company):?>
				
			<h3 class="text-center"><?php echo $company['name']; ?></h3>
			<div class="card-body">
				<form class="form" role="form" autocomplete="off">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Company name</label>
						<div class="col-lg-9">
							<p><?php echo $company['name']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Description</label>
						<div class="col-lg-9">
							<p><?php echo $company['itemdescription']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Postal Address</label>
						<div class="col-lg-9">
							<p><?php echo $company['postaladdress']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Phone</label>
						<div class="col-lg-9">
							<p><?php echo $company['phone']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Website</label>
						<div class="col-lg-9">
							<p><?php echo $company['url']; ?></p>
						</div>
					</div>
				</form>
			</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<br>
			<h3 class="text-center">Maps</h3>
			<br>
			<div id="map"></div>

			<?php 
			$lat = $company['lat'];
			$lng = $company['lng'];

			?>
		</div>
	</div>
</div>

<script>
	function initMap() {
		var uluru = {lat: parseFloat('<?php echo $lat;?>'), lng: parseFloat('<?php echo $lng;?>')};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnlS292TgK3GF5LIV7RIJxFx7-7-jvnyw&callback=initMap"
async defer></script>
