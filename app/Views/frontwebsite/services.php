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
.figure{
    background: linear-gradient(161deg, #9f8054 0%, #9f8054 49%, #26282b 100%);

}
    </style>
<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure class="figure"><img src="<?php echo base_url()?>public/images/preloader.gif" alt="Image"></figure>
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

<div class="services_content">
<section class="facilities">
  <div class="container">
    <div class="row">
    	<div class="col-lg-4 col-md-6">
    	<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/360-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>360 real estate e-tours creation</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/augmented-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Augmented Reality real estate e-tours</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/vr-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Virtual Reality real estate e-tours</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/arvr360-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>360, AR, VR tours edit</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/estatemarketing-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Real Estate Marketing</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
    		<img src="<?php echo base_url()?>public/images/ar_vr/estatemarketing-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Real Estate Detailed presentations</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 -->
    	<div class="col-lg-4 col-md-6">
    	<figure class="figure">
        <img src="<?php echo base_url()?>public/images/ar_vr/presentation-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>360, AR, VR hotels presentations</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
            <img src="<?php echo base_url()?>public/images/ar_vr/hotels-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Booking services</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 --><div class="col-lg-4 col-md-6">
    		<figure class="figure">
            <img src="<?php echo base_url()?>public/images/ar_vr/manage-removebg-preview.png" alt="Image">
    		<figcaption>
    		<h5>Easily manage your properties</h5>
    		<p>Coming soon</p>
    		</figcaption>
    		</figure>
    	</div>
    	<!-- end col-4 -->
		</div>
		<!-- end row -->
  </div>
  <!-- end container --> 
</section>
</div>

  
<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>

</body>
</html>