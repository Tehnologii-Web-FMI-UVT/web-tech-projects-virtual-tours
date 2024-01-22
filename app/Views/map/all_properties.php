<?= $this->include('frontwebsite/partials/header') ?>
<title>E-tours | locatii</title>

<meta property="og:type" content="website">
  <meta property="og:url" content="https://e-tours.ro/index.php/properties/view/43">
  <meta property="og:title" content="Descopera locatiile noastre">
  <meta property="og:description" content="Vezi toate apartamentele aflate la vanzare/ inchiriere ">
  <meta property="og:image" content="<?php echo base_url()?>/public/images/logo_no_bg.png">
<style>
#floating-action-button {
  position: fixed;
  bottom: 20px; /* Adjust as needed */
  right: 20px; /* Adjust as needed */
  z-index: 10;
  background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);  color: white;
  border: none;
  border-radius: 50%;
  width: 56px; /* Standard FAB size */
  height: 56px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.26);
  font-size: 24px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

#filter-panel {
  position: fixed;
  right: -350px; /* Start off-screen. Adjust this value based on the width of your filter panel */
  width: 300px; /* Width of the filter panel. Adjust as needed */
  transition: transform 0.5s ease-in-out; /* Smooth transition for the sliding effect */
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

#filter-panel.active {
  top: 15px;
}


/* Style adjustments for FAB */
#floating-action-button {
  z-index: 11; /* Make sure FAB is above the filter panel */
}

.hidden {
  display: none;
}

@media (min-width: 768px) {
  /* Styles for larger screens */
  #floating-action-button {
    bottom: 50px; /* Adjust as needed */
    right: 50px; /* Adjust as needed */
    transition: all 0.3s; /* Smooth transition for button press */

  }
  #filter-panel {
    border-radius: 0; /* Full width on small screens */
  }
  #filter-panel {
    position: absolute;
    top: 10px;
    right: -90px;
    transform: translateX(-50%) translateY(-100%);
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  
  #filter-panel.active {
    transform: translateX(-50%) translateY(0);
    z-index: 1000;
  }
}
@media (max-width: 768px) {
  /* Styles for larger screens */
  #floating-action-button {
    bottom: 50px; /* Adjust as needed */
    right: 10px; /* Adjust as needed */
    transition: all 0.35; /* Smooth transition for button press */

  }
  #filter-panel {
    border-radius: 0; /* Full width on small screens */
  }
  #filter-panel {
    position: absolute;
    top: 10px;
    right: 20px;
    transform: translateX(-50%) translateY(-100%);
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  
  #filter-panel.active {
    transform: translateX(-15%) translateY(0);
    z-index: 1000;
  }
}
/* Styles for inputs and labels */
#property-filters label {
  display: block;
  margin-bottom: 5px;
  color: #333; /* Softer color for text */
}

#property-filters input[type="number"],
#property-filters select {
  width: 100%; /* Full width */
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd; /* Softer border */
  border-radius: 5px; /* Rounded borders */
}

/* Style for sliders */
.slider {
  -webkit-appearance: none; /* Override default appearance */
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #efefef;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s; /* Transition for slider handle */
  transition: opacity .2s;
}

/* Style for toggle switches */
.toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.toggle-switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.adress_truncate{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    max-width: 80%;
    overflow: hidden;
    text-overflow: ellipsis;
    height:56px;
}
  </style>
<body>

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
<?= $this->include('frontwebsite/partials/sidenavigation') ?>

<!-- end side-navigation -->
<?= $this->include('frontwebsite/partials/navbar') ?>
<script>
    // This should be in your PHP file before including map.js
    var baseUrl = "<?= site_url('/properties/view/'); ?>";
</script>


<div id="map"></div>
<button id="floating-action-button">☰</button>
<div id="filter-panel">
<form id="property-filters">
        <!-- Price Range -->
        <label for="price-range">Price Range:</label>
        <input type="number" id="price-min" name="price-min" placeholder="Min Price" />
        <input type="number" id="price-max" name="price-max" placeholder="Max Price" />

        <!-- Property Type -->
        <label for="property-type">Property Type:</label>
        <select id="property-type" name="property-type">
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <option value="commercial">Commercial</option>
        </select>

        <!-- Sale or Rent -->
        <label for="sale-rent">Sale/Rent:</label>
        <select id="sale-rent" name="sale-rent">
            <option value="sale">For Sale</option>
            <option value="rent">For Rent</option>
        </select>

        <!-- Bedrooms -->
        <label for="bedrooms">Bedrooms:</label>
        <input type="number" id="bedrooms" name="bedrooms" placeholder="Bedrooms" />

        <!-- Bathrooms -->
        <label for="bathrooms">Bathrooms:</label>
        <input type="number" id="bathrooms" name="bathrooms" placeholder="Bathrooms" />

        <!-- Square Footage -->
        <label for="square-footage">Square Footage:</label>
        <input type="number" id="square-footage" name="square-footage" placeholder="Square Footage" />

        <!-- Lot Size -->
        <label for="lot-size">Lot Size:</label>
        <input type="number" id="lot-size" name="lot-size" placeholder="Lot Size" />

        <!-- Submit Button -->
        <button class="btn btn-sm btn-info mb-2" type="submit">Apply Filters</button>

    </form>
</div>
<script src="<?php echo base_url()?>/public/js/map/map.js"></script>
<style>
  #map {
    position: relative; /* This makes the children's absolute positioning relative to the map */

    height: 600px; /* The height is 400 pixels */
    width: 100%; /* The width is the width of the web page */
    padding-top: 20px !important;
    margin-top:10%;
    /* padding-bottom: 20px !important; */

  }

  .navbar{
    background: #26282b;
  }
</style>
<script>
// Toggle Filter Panel
// Toggle Filter Panel
document.addEventListener('DOMContentLoaded', function() {
  // Toggle Filter Panel
  document.getElementById('floating-action-button').addEventListener('click', function() {
    var panel = document.getElementById('filter-panel');
    panel.classList.toggle('active');
  });
  document.getElementById('close').addEventListener('click', function() {
    var panel = document.getElementById('filter-panel');
    panel.classList.toggle('active');
  });
});



  </script>
</body>
</html>
<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>
