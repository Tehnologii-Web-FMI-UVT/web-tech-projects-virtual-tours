<?= $this->include('frontwebsite/partials/header') ?>

<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="images/preloader.gif" alt="Image"></figure>
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

<div id="map"></div>

<script src="<?php echo base_url()?>/public/js/map/agency_map.js"></script>
<style>
  #map {
    height: 600px; /* The height is 400 pixels */
    width: 100%; /* The width is the width of the web page */
    padding-top: 20px !important;
    padding-bottom: 20px !important;

  }
  .navbar{
    background: #26282b;
  }
</style>

</body>
</html>