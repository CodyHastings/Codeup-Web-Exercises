(function() {
	"use strict";
	// Set our map options
	var geocoder = new google.maps.Geocoder();
	var mapOptions = {
		// Set the zoom level
		zoom: 19,
		// This sets the center of the map at our location
		center: {
			lat:  29.426791,
			lng: -98.489602
		}
	};
	// Render the map
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var button = document.getElementById("button");
	// Include code from previous example

// Set our address to geocode
	function search(){
		swal({
			title: "Hello!",
			text: "What would you like to search for?",
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			animation: "slide-from-top",
			inputPlaceholder: "Write something"
		},
		function(inputValue){

			if (inputValue === false){
				return false;
			}

			if (inputValue === "") {
				swal.showInputError("You need to write something!");
				return false
			}

			// Geocode our address
			geocoder.geocode({ "address": inputValue }, function(results, status) {

			   // Check for a successful result
			   if (status == google.maps.GeocoderStatus.OK) {

				   // Recenter the map over the address
				   map.setCenter(results[0].geometry.location);
				   console.log(results, status)
				} else {

				   // Show an error message with the status if our request fails
				   alert("Geocoding was not successful - STATUS: " + status);
				}

				// Add the marker to our existing map
				var marker = new google.maps.Marker({
					position: (results[0].geometry.location),
					map: map
				});
				var infowindow = new google.maps.InfoWindow({
				   content: "Changing the world, one programmer at a time."
				});
				   infowindow.open(map, marker);


				swal("Nice!", "Searching for " + inputValue, "success");
			});
		});
	}

	// Open the window using our map and marker
	// infowindow.open(map, marker);
	button.addEventListener("click", search)
})();