<!DOCTYPE html>
<!-- app/Views/agency/manage_properties.php -->
<?= $this->include('frontwebsite/partials/header') ?>
<link rel="stylesheet" href="<?php echo base_url()?>/public/css/create_property.css">

<body
style="    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
    color: #fff; /* Adjust color for legibility */
    font-size: 16px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;"
>
<script src="<?php echo base_url()?>/public/js/create_property.js"></script> 


<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
  <figure><img src="<?php echo base_url()?>/public/images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Loading</span></p>
  </div>
  <!-- end inner --> 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<?= $this->include('agency/partials/sidenavigation') ?>

<!-- end side-navigation -->
<?= $this->include('agency/partials/navbar') ?>

<html>
  <head>
    <title>Address Selection</title>

   

  </head>
  <body>

    <div class="container_add_form card">
        <h4>Add a new property</h4>
        <form id="propertyForm" method="post" action="/agency/add_property" enctype="multipart/form-data">
      <!-- Step 1: Address Selection -->
      <div class="step" id="step-1" style="display: block;">
      <h4>1/5 Property address</h4>
      <div class="card-container">
      <div class="panel">
        <div>
          <img class="sb-title-icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/location_pin/v5/24px.svg" alt="">
          <span class="sb-title">Address Selection</span>
        </div>
        <input type="text" placeholder="Address" id="location-input"/>
        <input type="text" placeholder="Apt, Suite, etc (optional)"/>
        <input type="text" placeholder="City" id="locality-input"/>
        <div class="half-input-container">
          <input type="text" class="half-input" placeholder="State/Province" id="administrative_area_level_1-input"/>
          <input type="text" class="half-input" placeholder="Zip/Postal code" id="postal_code-input"/>
        </div>
        <input type="text" placeholder="Country" id="country-input"/>
        <button type="button" class="button-cta" onclick="confirmAddress()">Confirm</button>
        <input type="hidden" id="full-address" name="fullAddress" value="">

      </div>
      <div class="map" id="gmp-map"></div>
    </div>
      </div>

      <!-- Step 2: Property Details -->
      <div class="step" id="step-2">
        <h4>2/5 Property Details</h4>
        <select name="type" id="type" required>
  <option value="">Select Property Type</option>
  <option value="apartment">Apartment</option>
  <option value="house">House</option>
</select>
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="details" placeholder="Details" required>
        <input type="number" name="price" placeholder="Price €" required>
        <input type="number" name="interior_size" placeholder="Interior m2" required>
        <input type="number" name="construction_year" placeholder="Year of construction" required>

    

      </div>
      <div class="step" id="step-3">
        <h4>3/5 A few more details</h4>
        <input type="number" name="lot_mp" placeholder="Lot m2(leave empty if not a house)" required>
        <input type="number" name="rooms" placeholder="Number of rooms" required>
        <input type="number" name="bathrooms" placeholder="Number of bathrooms" required>
        <input type="number" name="garages" placeholder="Number of garages" required>
</div>

      <!-- Step 3: Property Location -->
      <div class="step" id="step-4">
      <h4>4/5 Property Images</h4>
        <div class="file-upload-wrapper">
            <input type="file" id="image-upload" name="images[]" multiple="multiple" required hidden/>
            <label for="image-upload" class="file-upload-label">Choose Images</label>
            <div class="image-preview-container" id="imagePreviewContainer"></div>
            <div class="file-names-container" id="fileNamesContainer"></div>

        </div>

        <input hidden type="text" name="latitude" placeholder="Latitude" required>
        <input hidden type="text" name="longitude" placeholder="Longitude" required>
      </div>

      <!-- Step 4: Confirmation -->
      <div class="step" id="step-5">
        <h4>5/5 Review and Submit</h4>
        <!-- Review details here -->

        <p>Confirm and submit your property details.</p>
        <button type="submit" class="button-cta">Confirm</button>
      </div>

      <div class="stepper-controls">
        <button type="button" onclick="prevStep()" id="prevBtn">Previous</button>
        <button type="button" onclick="nextStep()" id="nextBtn">Next</button>
      </div>
    </form>
  </div>
  </div>

  <!-- Your footer includes -->
  <script>
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
    }
</script>
  <script>
    var currentStep = 1;
    var totalSteps = 5;

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
  </script>
<script>
document.getElementById('image-upload').addEventListener('change', function(event) {
  var imagePreviewContainer = document.getElementById('imagePreviewContainer');
  var fileNamesContainer = document.getElementById('fileNamesContainer'); // A container for file names
  imagePreviewContainer.innerHTML = ''; // Clear existing previews
  fileNamesContainer.innerHTML = ''; // Clear existing file names

  var files = event.target.files;
  var fileNamesList = document.createElement('ul'); // Create a list to hold the file names

  for(var i = 0; i < files.length; i++) {
    var file = files[i];
    var reader = new FileReader();
    
    reader.onload = (function(file) { // Immediately-Invoked Function Expression (IIFE) to capture the current file
      return function(e) {
        var imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imgElement.alt = 'Preview of ' + file.name; // Set alt text to the file name
        imagePreviewContainer.appendChild(imgElement);

        var fileNameItem = document.createElement('li'); // Create a list item for each file name
        fileNameItem.textContent = file.name; // Set the text content to the file name
        fileNamesList.appendChild(fileNameItem); // Append the file name to the list
      };
    })(file);
    
    reader.readAsDataURL(file);
  }
  
  fileNamesContainer.appendChild(fileNamesList); // Append the list of file names to the fileNamesContainer
});
    </script>
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAn0nw1_XF1Ura7igjKwLuEbhghyMfKGsQ&libraries=places&callback=initMap&solution_channel=GMP_QB_addressselection_v1_cABC" async defer></script>
  </body>
</html>

<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>
