function initMap() {
    // Create a new map
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: { lat: 45.760696, lng: 21.226788 }, // Update with your default coordinates
    });
  
    // Fetch the properties from your server
    fetch('/properties/agency-map-data')
      .then(response => response.json())
      .then(properties => {
        if (properties.length === 0) {
          // No properties found
          console.log('No properties to display.');
        } else {
          // Loop through the properties and add them as markers
          properties.forEach(property => {
            const marker = new google.maps.Marker({
              position: { lat: parseFloat(property.latitude), lng: parseFloat(property.longitude) },
              map: map,
              title: property.title
            });
  
            // Add an info window for each marker
            // Add an info window for each marker
            const infowindow = new google.maps.InfoWindow({
                content: 
                `<h3>${property.title}</h3>
                <p>${property.description}</p>
                <p>Price: ${property.price}</p>
                <a href="${baseUrl}${property.id}" class="btn btn-sm btn-info">View</a>
                `
              });
  
            // Add click event listener for each marker
            marker.addListener('click', () => {
              infowindow.open(map, marker);
            });
          });
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  
  // The rest of your script for loading the Google Maps script remains the same.
  

// Load the Google Maps script
const script = document.createElement('script');
script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyAn0nw1_XF1Ura7igjKwLuEbhghyMfKGsQ&callback=initMap`;
script.async = true;

document.head.appendChild(script);
