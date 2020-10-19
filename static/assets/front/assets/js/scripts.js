"use strict";

var options = true, // Enable / Disable user settings

	preloader = {

		/* -------------------------------------------------------------------------------------- //
	
			Here you can enable or disable the preloader.
			Set the value : "true" to enable it.
	
		// -------------------------------------------------------------------------------------- */

		enabled: false // 

	},

	scrollToElement = {

		/* -------------------------------------------------------------------------------------- //
	
			With this duration option you can change the scrolling speed to the item. Duration are
			given in milliseconds. Higher values indicate slower animations, not faster ones.
	
		// -------------------------------------------------------------------------------------- */

		scrollSpeed: 700  // Milliseconds

	},

	GoogleMapAPI = {

		/* -------------------------------------------------------------------------------------- //
	
			To use the Maps JavaScript API, you must register your app project on the Google
			Cloud Platform Console and get a Google API key which you can add to your app.
	
		// -------------------------------------------------------------------------------------- */

		key: '', // YOUR_API_KEY

		/* -------------------------------------------------------------------------------------- //
	
			By default the API will attempt to load the most appropriate language based on the
			users location or browser settings. Some APIs allow you to explicitly set a language
			when you make a request
	
		// -------------------------------------------------------------------------------------- */

		language: '', // auto by default

		/* -------------------------------------------------------------------------------------- //
	
			If you set the language of the map, it's important to consider setting the region too.
			This helps ensure that your application complies with local laws.
	
		// -------------------------------------------------------------------------------------- */

		region: '', // auto by default

		/* -------------------------------------------------------------------------------------- //
	
			You may wish to turn off the API's default UI settings entirely. To do so, set the
			map's disableDefaultUI property to true. This property disables any automatic UI
			behavior from the Maps JavaScript API.
	
		// -------------------------------------------------------------------------------------- */

		disableDefaultUI: false,

		/* -------------------------------------------------------------------------------------- //
	
			The icon can simply indicate an image to use instead of the default Google Maps
			pushpin icon. To specify such an icon, set the marker's icon property to the URL of
			an image. The Maps JavaScript API will size the icon automatically.
	
		// -------------------------------------------------------------------------------------- */

		markerIcon: '',

		/* -------------------------------------------------------------------------------------- //
	
			You can use the custom style for the map. Copy and paste your style below.
			To switch, use data-map-style="custom" in your HTML code.
	
		// -------------------------------------------------------------------------------------- */

		customMapStyle:
			[
				{
					"featureType": "all",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#ffffff"
						}
					]
				},
				{
					"featureType": "all",
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"color": "#000000"
						},
						{
							"lightness": 13
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000000"
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#144b53"
						},
						{
							"lightness": 14
						},
						{
							"weight": 1.4
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "all",
					"stylers": [
						{
							"color": "#08304b"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#0c4152"
						},
						{
							"lightness": 5
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000000"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#0b434f"
						},
						{
							"lightness": 25
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000000"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#0b3d51"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#000000"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "all",
					"stylers": [
						{
							"color": "#146474"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers": [
						{
							"color": "#021019"
						}
					]
				}
			]

	},

	slider = {

		/* -------------------------------------------------------------------------------------- //
	
			The amount of time to delay between automatically cycling an item. If false,
			carousel will not automatically cycle.
	
		// -------------------------------------------------------------------------------------- */

		interval: 5000, // Milliseconds

	},

	scrollbar = {
		zindex: 12
	};

var NioApp = (function (jQ, win, doc) {
	"use strict";
	var NioApp = { AppInfo: { name: "Robo One", package: "1.6.0", version: "1.0.2", author: "Robo One" } },
		components = { docReady: [], docReadyDefer: [], winLoad: [], winLoadDefer: [] };

	jQ(doc).ready(docReady);
	jQ(win).on("load", winLoad);

	function docReady(stmt) {
		stmt = (typeof stmt === typeof undefined) ? jQ : stmt;
		components.docReady.concat(components.docReadyDefer).forEach(function (component) { component(stmt); });
	}

	function winLoad(stmt) {
		stmt = (typeof stmt === "object") ? jQ : stmt;
		components.winLoad.concat(components.winLoadDefer).forEach(function (component) { component(stmt); });
	}

	NioApp.components = components;
	NioApp.docReady = docReady;
	NioApp.winLoad = winLoad;

	return NioApp;
}(jQuery, window, document));

NioApp = function (NioApp, $, window, document) {
	"use strict";
	// is exists @v1.0
	$.fn.exists = function () {
		return this.length > 0;
	};

	NioApp.Util = {};
	// scrollAnimation !Util @v1.0
	NioApp.Util.scrollAnimation = function () {
		var $animated = $('.animated');

		if ($().waypoint && $animated.exists()) {
			$animated.each(function () {
				var aniWay = $(this), typ = aniWay.data("animate"), dur = aniWay.data("duration"), dly = aniWay.data("delay");
				aniWay.waypoint(function () {
					aniWay.addClass("animated " + typ).css("visibility", "visible");
					if (dur) {
						aniWay.css('animation-duration', dur + 's');
					}
					if (dly) {
						aniWay.css('animation-delay', dly + 's');
					}
				}, { offset: '95%' });
			});
		}
	};
	NioApp.components.winLoad.push(NioApp.Util.scrollAnimation);

	NioApp.Plugins = {};

	return NioApp;
}(NioApp, jQuery, window, document);

function sendContactForm(event) {
	event.preventDefault();
	const name = document.getElementById("contactName").value;
	const email = document.getElementById("contactEmail").value;
	const subject = document.getElementById("contactSubject").value;
	const message = document.getElementById("contactMessage").value;
	const data = {
		name,
		email,
		subject,
		message
	}

	document.getElementById("contactForm").innerHTML = '<div class="text-center"><img src="/static/assets/front/assets/img/preloader.svg" /></div>'

	fetch("https://hy4fbpvyb7.execute-api.us-east-1.amazonaws.com/prod/contact", {
		method: 'POST',
		body: JSON.stringify(data),
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		}
	})
		.then(function (response) {
			return response.json();
		})
		.then(function (res) {
			document.getElementById("contactForm").innerHTML = '<p>Tu mensaje ha sido enviado</p>';
		})

}