<?= $this->include('frontwebsite/partials/header') ?>
<script>
    // This should be in your PHP file before including map.js
    var baseUrl = "<?= site_url('/properties/view/'); ?>";
</script>


<script src="<?php echo base_url()?>/public/js/map/map.js"></script>
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
