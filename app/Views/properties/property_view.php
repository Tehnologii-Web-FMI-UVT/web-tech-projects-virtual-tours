<title><?= esc($property['title']);?></title>

<?= $this->include('frontwebsite/partials/header') ?>
<meta property="og:type" content="website">
  <meta property="og:url" content="https://e-tours.ro/index.php/properties/view/43">
  <meta property="og:title" content="<?= esc($property['title']); ?>">
  <meta property="og:description" content="<?= esc($property['description']); ?>">
  <meta property="og:image" content="<?php echo base_url()?>/public/images/logo_no_bg.png">
<link rel="stylesheet" href="<?php echo base_url()?>/public/css/property_view.css">
<style>
.hero-section {
  background: url('https://e-tours.ro//public/images/simple_photo_360.jpg') no-repeat center center;
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
@media (min-width: 990px) {
  .jump-inside {
    margin-top: 3%;
  }
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
<!-- Hero Section -->
<div class="hero-section">
  <div class="container jump-inside">
    <h1>Jump inside the virtual tour</h1>
    <p>Step into the future of immersive technology.</p>
    <div class="video-content hidden" id="virtual_tour">
    <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7X9h3?logo=1&info=1&fs=1&vr=0&zoom=1&initload=0&autorotate=0.08&thumbs=-1&margin=10" data-width="100%" data-height="640px"></script>       	<!-- end video-content -->
       </div>
       <a style="background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);" href="#property_description" class="btn btn-dark mt-5">View details</a>

  </div>
</div>
<section class="about-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				  <h2  id="property_description"><?= esc($agency['agencyName']);?><span> <?= esc($property['title']); ?></span></h2>
        <h5><?= esc($agency['description']);?></h5>
			</div>
            <!-- <img style="max-width:550px; max-height:550px;"src="<?php echo base_url()?>/public/images/homepage/tablet_hand_tour.jpg" alt="Image"> -->
			<!-- end col-12 -->
        <p class="p-3"><?= esc($property['description']); ?></p>



      
      <div class="col-12">
      <?php if (!empty($images)) : ?>

      <div class="gallery-container swiper-container-horizontal">

    <div class="swiper-wrapper">
            <?php foreach ($images as $image) : ?>
                <div class="swiper-slide">
                    <img style="max-height:700px !important; max-width:100% !important;" src="<?= base_url('/writable' . esc($image['image_url'])); ?>" alt="<?= esc($image['alt_text']); ?>">
                </div>
            <?php endforeach; ?>
    </div>

    <!-- Add swiper-wrapper -->
    <div class="gallery-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
    <!-- end gallery-pagination -->
</div>
<?php endif; ?>

       <!-- end gallery-container -->
        <h4>Take the life quality to an upper level</h4>
        <p>Lady am room head so lady four or eyes an. He do of consulted sometimes concluded mr. An household behaviour if pretended.Apartments simplicity or <strong>understood</strong> do it we. Song such eyes had and off. Removed winding ask explain delight out few behaved lasting. Letters old hastily ham sending not sex chamber because present. Oh is indeed twenty entire figure. Occasional diminution announcing new now literature terminated. </p><br>
       
			</div>
       <!-- end col-12 -->
       <div class="col-md-6">
        <h6>Property Specifications</h6>
        <ul class="property-features row">
  <li><i class="fas fa-home"></i> Type: <?= esc($property['type']); ?></li>
  <li><i class="fas fa-tree"></i> Garden m²: <?= esc($property['lot_mp']); ?></li>
  <li><i class="fas fa-door-open"></i> Rooms: <?= esc($property['rooms']); ?></li>
  <li><i class="fas fa-bath"></i> Bathrooms: <?= esc($property['bathrooms']); ?></li>
  <li><i class="fas fa-ruler-combined"></i> Interior m²: <?= esc($property['interior_size']); ?></li>
  <!--  -->
</ul>
       </div>
       <!-- end col-6 -->
       <div class="col-md-6">
        <h6>Property Benebfits</h6>
       	<ul>
          <li>Close to the city's heart - Complexul Studentesc.</li>
          <li>Lift.</li>
          <li>Parcare subterana.</li>
          <li>Sistem de alarma.</li>
          <li>Centrala proprie.</li>
        </ul>
       </div>
       <!-- end col-6 -->
       <div class="col-lg-9">
      
   
       
       <!-- end col-9 -->
       <div class="col-12">
       <h4>I want this <?= esc($property['type']);?>!</h4>
        <p>Get all details about this property on the <?= esc($agency['agencyName']);?> <a class="text-white" href="https://<?= esc($agency['website_url']);?>"><u>WEBSITE</u></a>  </p>
        <ul class="agency-details" style="padding-left: 70px !important;">
  <li><i class="fas fa-building"></i> Agency: <?= esc($agency['agencyName']); ?></li>
  <li><i class="fas fa-globe text-white"></i> Website: <a href="<?= esc($agency['website_url']); ?>" target="_blank"><?= esc($agency['website_url']); ?></a></li>
  <li><i class="fas fa-phone"></i> Phone: <?= esc($agency['phone_number']); ?></li>
  <li><i class="fas fa-map-marker-alt"></i> Address: <?= esc($agency['address']); ?></li>
</ul>

      </div>
      <!-- en col-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<script>
        // Select the link
        document.querySelector('a[href="#property_description"]').addEventListener('click', function(e) {
            // Prevent default anchor click behavior
            e.preventDefault();

            // Store hash
            var hash = this.hash;

            // Animate smooth scroll
            document.querySelector(hash).scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>
<script>

    </script>