(function() {
	"use strict";
	var map = null;
	// Set our address to geocode
	var searchButton = document.getElementById("button");
	// Set our map options
	var mapOptions = {
		// Set the zoom level
		zoom: 19,
		// This sets the center of the map at our location
		center: {
			lat:  29.426791,
			lng: -98.489602
		}
	};
	// Init geocoder object
	var gGrill = { lat: 29.443529, lng: -98.654692 };

	// Add the marker to our existing map
	var marker = new google.maps.Marker({
	position: gGrill,
	map: map
	});

	

	

	function search(){
		address = prompt("what location would you like to search for?");
		var geocoder = new google.maps.Geocoder();

		// Geocode our address
		geocoder.geocode({ "address": address }, function(results, status) {

			// Check for a successful result
			if (status == google.maps.GeocoderStatus.OK) {

		   // Recenter the map over the address
			map.setCenter(results[0].geometry.location);
			console.log(results, status)
			} else {

		   // Show an error message with the status if our request fails
		   alert("Geocoding was not successful - STATUS: " + status);
			}
		});
	};
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	searchButton.addEventListener("click", search);

})();