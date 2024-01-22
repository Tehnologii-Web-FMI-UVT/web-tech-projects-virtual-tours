<?= $this->include('frontwebsite/partials/header') ?>
<style>
.services_content{
    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
    min-height: 450px !important;
}
.facilities{
    color:white;
    margin-top: 15px !important;
}
.hero-section {
  background: url('https://e-tours.ro//public/images/ar_vr/virtual_tour_premium.jpg') no-repeat center center;
  background-size: cover;
  padding: 100px 0;
  color: #fff;
  text-align: center;
  position: relative; /* Needed for the pseudo-element to position correctly */
}

.hero-section::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
  z-index: 1;
}

/* Make sure the text is on top of the overlay */
.hero-section * {
  position: relative;
  z-index: 2;
}
/* Additional CSS for the Estimative Calculator Form */
#estimate-form {
  background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
  padding: 20px;
  border-radius: 8px;
  max-width: 500px; /* Adjust width as needed */
  margin: 0 auto; /* Center the form in the hero section */
}

#estimate-form label {
  font-weight: bold;
  color: #26282b; /* Dark text for readability */
  margin-top: 10px;
}

#estimate-form input[type="number"],
#estimate-form select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box; /* Include padding in the width */
}

#estimate-form button {
  width: 100%;
  padding: 10px;
  margin-top: 15px;
  background: #9f8054; /* Theme color for the button */
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 18px;
  cursor: pointer;
}

#estimate-form button:hover {
  background: #806644; /* Darker shade for hover state */
}

#estimate-result {
  margin-top: 15px;
  padding: 10px;
  background: #26282b; /* Dark background for the result */
  color: #fff; /* White text for the result */
  text-align: center;
  border-radius: 4px;
  max-width:500px !important;
  margin: 0 auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  #estimate-form {
    padding: 15px;
  }
}
.btn-get-in-touch{
    background: linear-gradient(161deg, #9f8054  0%, #26282b 49%, #9f8054 100%);
    color:white;
}

    </style>
<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="<?php echo base_url()?>public/images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="E-tours | Elements | Loading">Loading</span></p>
  </div>
  <!-- end inner --> 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<?= $this->include('frontwebsite/partials/sidenavigation') ?>

<!-- end side-navigation -->
<?= $this->include('frontwebsite/partials/navbar') ?>
<!-- Hero Section -->
<div class="hero-section">
  <div class="container mt-5" style="margin-top: 100px !important;">
  <form id="estimate-form">
  <label for="area-size">Area Size (m2):</label>
  <input required  type="number" id="area-size" name="area-size">
  <label for="area-size">Estate location:</label>
  <input required type="text" id="location" name="location">

  <label for="panoramas">Number of Panoramas (number of rooms):</label><br>
  <span style="color:darkgrey">this might depend on room size, decorations and more...</span>
  <input required type="number" id="panoramas" name="panoramas">

  <label for="features">Additional Features:</label>
  <select id="features" name="features">
    <option value="basic">Basic</option>
    <option value="interactive">Interactive Elements</option>
    <option value="multimedia">Multimedia</option>
  </select>

  <button type="button" onclick="calculateEstimate()">Get Estimate</button>
</form>

<!-- Place to Display the Estimate -->
<div id="estimate-result">

</div>
  </div>
</div>

  <!-- Estimative Calculator Form -->


<script>
function calculateEstimate() {
  var areaSize = document.getElementById('area-size').value;
  var panoramas = document.getElementById('panoramas').value;
  var features = document.getElementById('features').value;
  
  var basePrice = 120; // Your base price
  var pricePerSqFt = 0.2; // Price per square foot
  var pricePerPanorama = 2; // Price per panorama
  var featureCosts = {
    'basic': 0,
    'interactive': 25,
    'multimedia': 25
  };
  
  var estimate = basePrice +
                 (areaSize * pricePerSqFt) +
                 (panoramas * pricePerPanorama) +
                 featureCosts[features];
  
  document.getElementById('estimate-result').innerHTML = "Estimated Cost: €" + estimate.toFixed(2) + "<br>" + '<a href="/contact_sales" class="btn btn-sm btn-get-in-touch mr-2">Get in touch with an agent</a>';
}
</script>

<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>

</body>
</html>