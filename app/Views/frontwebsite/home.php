<?= $this->include('frontwebsite/partials/header') ?>

<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
  <figure><img src="<?php echo base_url()?>/public/images/preloader.gif" alt="Image"></figure>
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

<!-- end navbar -->
<?= $this->include('frontwebsite/homepage_elements/header') ?>

<!-- end slider -->

<!-- Start intro -->
<?= $this->include('frontwebsite/homepage_elements/intro') ?>

<!-- end intro -->
<?= $this->include('frontwebsite/homepage_elements/partners') ?>

<!-- end logos -->


<!-- end map -->

<?= $this->include('frontwebsite/homepage_elements/benefits') ?>


<!-- end benefits -->


<?= $this->include('frontwebsite/homepage_elements/tour_price_calculator') ?>


<!-- end property-calculator -->

<?= $this->include('frontwebsite/homepage_elements/hot_properties') ?>


<!-- $this->include('frontwebsite/homepage_elements/all_properties_wrapper') -->

<!-- property-hot-->
<?= $this->include('frontwebsite/homepage_elements/consultation') ?>

<!-- end get-consultation -->
<?= $this->include('frontwebsite/homepage_elements/blog') ?>

<!-- end recent-posts -->
<!-- <section class="property-customization">
  <div class="video-bg">
    <video src="<?php echo base_url()?>/public/videos/video01.mp4" loop autoplay muted></video>
  </div> -->
  <!-- end video-bg -->
  <?= $this->include('frontwebsite/homepage_elements/about_our_estates') ?>

<!-- end property-customization -->
<?= $this->include('frontwebsite/homepage_elements/our_locations') ?>

<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>

</body>
</html>