"use strict";

function initMap() {
  const CONFIGURATION = {
    "ctaTitle": "Confirm",
    "mapOptions": {"center":{"lat":37.4221,"lng":-122.0841},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":true,"zoom":13,"zoomControl":true,"maxZoom":22,"mapId":""},
    "mapsApiKey": "AIzaSyAn0nw1_XF1Ura7igjKwLuEbhghyMfKGsQ",
    "capabilities": {"addressAutocompleteControl":true,"mapDisplayControl":true,"ctaControl":true}
  };
  const componentForm = [
    'location',
    'locality',
    'administrative_area_level_1',
    'country',
    'postal_code',
  ];

  const getFormInputElement = (component) => document.getElementById(component + '-input');
  const map = new google.maps.Map(document.getElementById("gmp-map"), {
    zoom: CONFIGURATION.mapOptions.zoom,
    center: { lat: 37.4221, lng: -122.0841 },
    mapTypeControl: false,
    fullscreenControl: CONFIGURATION.mapOptions.fullscreenControl,
    zoomControl: CONFIGURATION.mapOptions.zoomControl,
    streetViewControl: CONFIGURATION.mapOptions.streetViewControl
  });
  const marker = new google.maps.Marker({map: map, draggable: false});
  const autocompleteInput = getFormInputElement('location');
  const autocomplete = new google.maps.places.Autocomplete(autocompleteInput, {
    fields: ["address_components", "geometry", "name"],
    types: ["address"],
  });
  autocomplete.addListener('place_changed', function () {
    marker.setVisible(false);
    const place = autocomplete.getPlace();
    if (!place.geometry) {
      // User entered the name of a Place that was not suggested and
      // pressed the Enter key, or the Place Details request failed.
      window.alert('No details available for input: \'' + place.name + '\'');
      return;
    }
    renderAddress(place);
    fillInAddress(place);
  });

  function fillInAddress(place) {  // optional parameter
    const addressNameFormat = {
      'street_number': 'short_name',
      'route': 'long_name',
      'locality': 'long_name',
      'administrative_area_level_1': 'short_name',
      'country': 'long_name',
      'postal_code': 'short_name',
    };
    document.getElementsByName('latitude')[0].value = place.geometry.location.lat();
document.getElementsByName('longitude')[0].value = place.geometry.location.lng();
    const getAddressComp = function (type) {
      for (const component of place.address_components) {
        if (component.types[0] === type) {
          return component[addressNameFormat[type]];
        }
      }
      return '';
    };
    getFormInputElement('location').value = getAddressComp('street_number') + ' '
              + getAddressComp('route');
    for (const component of componentForm) {
      // Location field is handled separately above as it has different logic.
      if (component !== 'location') {
        getFormInputElement(component).value = getAddressComp(component);
      }
    }
  }
  

  function renderAddress(place) {
    map.setCenter(place.geometry.location);
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
  }
  
}
function confirmAddress() {
    // Get the values from inputs
    var address = document.getElementById('location-input').value;
    var apt = document.querySelector('input[placeholder="Apt, Suite, etc (optional)"]').value;
    var city = document.getElementById('locality-input').value;
    var state = document.getElementById('administrative_area_level_1-input').value;
    var postalCode = document.getElementById('postal_code-input').value;
    var country = document.getElementById('country-input').value;

    // Compile the full address
    var fullAddress = address;
    if (apt) fullAddress += ', ' + apt;
    fullAddress += ', ' + city;
    fullAddress += ', ' + state;
    fullAddress += ' ' + postalCode;
    fullAddress += ', ' + country;

    // Set the compiled address to the hidden input
    document.getElementById('full-address').value = fullAddress;
}  var currentStep = 1;
var totalSteps = 4;

function showStep(step) {
  for (var i = 1; i <= totalSteps; i++) {
    document.getElementById('step-' + i).style.display = 'none';
  }
  document.getElementById('step-' + step).style.display = 'block';
}

function nextStep() {
  if (currentStep < totalSteps) {
    currentStep++;
    showStep(currentStep);
  } else {
    handleSubmit();
  }
}

function prevStep() {
  if (currentStep > 1) {
    currentStep--;
    showStep(currentStep);
  }
}

function handleSubmit() {
  // Validate and submit your form data to your server
  // For instance, using AJAX or a form submission
  alert('Submit your form');
}

showStep(currentStep); // Initialize the first step
