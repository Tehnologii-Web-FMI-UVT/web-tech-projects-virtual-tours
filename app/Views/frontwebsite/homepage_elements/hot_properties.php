<section class="property-plans">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow fadeInUp">
      <h4><span>Hot</span> Properties now</h4>
        <h3>Decorated Flats in Timisoara</h3>
        <p>We are waiting for you in our sales office for having all these opportunities with affordable prices and appropriate payment opportunities..</p>
        <div id="property_details">

</div>
      </div>
     
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.05s">
        <!-- Dynamic Tabs for Property Sizes -->
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <!-- Tabs will be inserted here by JavaScript -->
        </ul>
        <!-- Dynamic Tab Content for Property Images and Details -->
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab panes will be inserted here by JavaScript -->
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Fetch properties data using AJAX
    $.ajax({
        url: '/fetchHotProperties', // Replace with your server URL
        type: 'GET',
        dataType: 'json',
        success: function(properties) {
            createPropertyTabs(properties); // Create tabs for each property
            updatePropertyDetails(properties[0]); // Show details of the first property by default
        },
        error: function() {
            console.error("Error fetching properties");
        }
    });
});

function createPropertyTabs(properties) {
    let pillsTab = $('#pills-tab');
    let pillsContent = $('#pills-tabContent');
    console.log(properties);

    // Clear existing tabs and content
    pillsTab.empty();
    pillsContent.empty();

    properties.forEach((property, index) => {
        // Active class for the first tab
        let isActive = index === 0 ? 'active' : '';
        let isShowActive = index === 0 ? 'show active' : '';

        // Append tab list item
        pillsTab.append(`
            <li class="nav-item">
                <a class="nav-link ${isActive}" id="property-tab-${index}" data-toggle="pill" href="#property-${index}" role="tab">
                    ${property.title}
                </a>
            </li>
        `);

        // Append tab content item with the image
       // Append tab content item with the image and a "View Property" button
        pillsContent.append(`
            <div class="tab-pane fade ${isShowActive}" id="property-${index}" role="tabpanel" aria-labelledby="property-tab-${index}">
                <div class="property-image-container">
                    <img src="/writable/${property.image_url}" alt="${property.alt_text}" class="img-fluid">
                    <a target="_blank" href="/properties/view/${property.id}" class="view-property-btn">View Property</a>
                </div>
            </div>
        `);


        // Bind click event to each tab to update the property details on the left side
        $(`#property-tab-${index}`).on('click', function() {
            updatePropertyDetails(property);
        });

        // If it's the first property, set the tab content as active
        if (index === 0) {
            $(`#property-${index}`).addClass('show active');
        }
    });
}

function updatePropertyDetails(property) {
    // Construct the HTML for the property details
    let propertyDetailsHtml = `
        <p><strong>Interior Size:</strong> ${property.interior_size}m²</p>
        <p><strong>Address:</strong> ${property.address}</p>
        <p><strong>Garages:</strong> ${property.garages}</p>
        <p><strong>Number of Rooms:</strong> ${property.rooms}</p>
        <p><strong>Seen by:</strong> ${property.view_count}</p><a class="btn btn-sm btn-dark" target="_blank" href="/properties/view/${property.id}">View property details</a>
    `;

    // Update the property details on the left side
    $('#property_details').html(propertyDetailsHtml);
}
</script>

<style>
.property-image-container {
    position: relative;
    overflow: hidden;
}

.property-image-container img {
    display: block;
    width: 100%;
    transition: transform 0.3s ease;
}

.property-image-container:hover img {
    transform: scale(1.1); /* Slightly zoom the image */
}

.view-property-btn {
    position: absolute;
    bottom: 50%; /* Position at the bottom of the image */
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 200px; /* Set the width of the button */
    padding: 10px;
    background-color: #ffffff; /* Button background color */
    color: #000000; /* Button text color */
    text-decoration: none;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}
.view-property-btn:hover {
    color:brown;
}


.property-image-container:hover .view-property-btn {
    opacity: 1;
    visibility: visible;
}


    </style>

