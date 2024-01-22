<?= $this->include('frontwebsite/partials/header') ?>
<body>
<style>
  .navbar {
    background: #26282b;
    z-index: 10; /* Make sure the navbar has a z-index less than the content if it should go under */
  }
  
  /* Add top padding to the main content equal to the height of the navbar */
  .agency-main-content {
    padding-top: 70px; /* Adjust this value based on your navbar's height */
  }

  /* Fix for the preloader potentially causing layout issues */
  .preloader {
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 100%;
    background: #fff;
  }
  
  /* Hide menu if overlapping */
/* Hide menu for screens wider than 766px */
@media (min-width: 990px) {
  .menu {
    display: none !important;
  }
}

</style>

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

<!-- agency-main dashboard -->
<div class="agency-main-content">

<?= $this->include('agency/agency_main_elements/dashboard.php') ?>

<?= $this->include('/map/all_properties') ?>

</div>

<?= $this->include('agency/partials/footer') ?>
