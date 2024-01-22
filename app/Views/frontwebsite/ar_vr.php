<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AR/VR Services</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- FontAwesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
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
  .service-box {
    background: linear-gradient(161deg, #9f8054  0%, #26282b 49%, #9f8054 100%);
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 30px;
    transition: transform 0.3s ease;
  }
  .service-box:hover {
    transform: translateY(-10px);
  }
  .service-icon {
    font-size: 40px;
    margin-bottom: 20px;
    color: #9f8054;
  }
  .services-highlights {
    padding: 50px 15px;
  }
  .pricing-plan {
    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
    text-align: center;
    padding: 30px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin: 10px;
  }
  .plan-price {
    font-size: 24px;
    color: white;
  }
  .faq-section h3 {
    cursor: pointer;
  }
  .faq-answer {
    display: none;
  }
  .contact-form-section {
    
    padding: 50px 15px;
  }
  .contact-form-section form {
    max-width: 600px;
    margin: auto;
  }
  @media (max-width: 992px) {
    .map-column-contact{
      display:none;
    }
 
}

</style>
</head>
<body >
<?= $this->include('frontwebsite/partials/header') ?>
<?= $this->include('frontwebsite/partials/sidenavigation') ?>
<?= $this->include('frontwebsite/partials/navbar') ?>

<!-- Hero Section -->
<div class="hero-section">
  <div class="container mt-5">
    <h1>Revolutionize Your Experience with AR & VR</h1>
    <p>Step into the future of immersive technology.</p>
    <button style="background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);" class="btn btn-dark">Discover More</button>
  </div>
</div>

<!-- Services Highlights -->
<div class="services-highlights container text-white">
  <div class="row">
    <!-- Service Box: Virtual Reality -->
    <div class="col-md-4">
      <div class="service-box">
        <div class="service-icon"><i class="fas fa-vr-cardboard"></i></div>
        <h4 class="service-title">Immersive Virtual Reality Tours</h4>
        <p class="service-text">Explore virtual space with our VR tours. Narrate a story that leaves a lasting impression.</p>
      </div>
    </div>
    <!-- Service Box: Augmented Reality -->
    <div class="col-md-4">
      <div class="service-box">
        <div class="service-icon"><i class="fas fa-magic"></i></div>
        <h4 class="service-title">Interactive Augmented Reality Experiences</h4>
        <p class="service-text">Augment the world with digital layers that transform the ordinary into the extraordinary.</p>
      </div>
    </div>
    <!-- Service Box: 360 Tours -->
    <div class="col-md-4">
      <div class="service-box">
        <div class="service-icon"><i class="fas fa-globe"></i></div>
        <h4 class="service-title">Comprehensive 360° Virtual Tours</h4>
        <p class="service-text">Bring any environment to life with a 360-degree perspective.</p>
      </div>
    </div>
  </div>
</div>
<section class="property-calculator" style="background:white;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.03"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.07"> <img src="<?php echo base_url()?>/public/images/homepage/phone_virtual_tour.jpg" alt="Image"></div>
          <!-- end holder --> 
        </figure>
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6 wow fadeInUp">
        <div class="content-box text-center"> <b>!</b>
          <h4>70% of the money we earn are invested into marketing.</h4>
          <span class="text-center">100% of the properties we create tours for are present on our web application</span><br>
          <span class="text-center">Giving us 200$ is basically like investing 140$ into social media and google advertisement while also getting 2 virtual tours for your estate! </span><br>
        
          <a href="/tour_price_calculator"><img src="<?php echo base_url()?>/public/images/icon-calculator.png" alt="Image">Tour price calculator</a> <br>
          <!-- <a class="mt-2" href="#pricing_plans"><img src="<?php echo base_url()?>/public/images/icon-benefits02.png" alt="Image">Discover our packages</a> </div> -->

        </div>

        <!-- end content-box --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<section class="contact" style="padding: 0 !important;">
  <div class="container">
   	
       <!-- end row -->
    <div class="row align-items-center">
        <div class="col-lg-6 map-column-contact">
        	 <div class="map">
          <div class="pattern-bg" data-stellar-ratio="1.03" style="top: -16.4149px;"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.07" style="display: block; top: 4.13612px;"> 
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2378765886474!2d-73.97644805915624!3d40.69075842971381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bb6c6fe52c7%3A0x2b3bb16e97b13c01!2sFort+Greene+Tennis+Courts!5e0!3m2!1sen!2str!4v1559831164025!5m2!1sen!2str" allowfullscreen=""></iframe>
         </div>
          <!-- end holder --> 
        </div>
        <!-- end map -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
        <h4 class="text-center">Contact us today to get a full personalized offer for your needs!</h4>

        	<div class="contact-form">	
			 <form id="contact" name="contact" method="post" novalidate="novalidate">
          <div class="form-group">
            <input type="text" name="name" id="name" autocomplete="off" required="">
             <span>Your name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="email" id="email" autocomplete="off" required="">
            <span>Your e-mail</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required="">
            <span>Subject</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <textarea name="message" id="message" autocomplete="off" required=""></textarea>
            <span>Your message</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <button id="submit" type="submit" name="submit">
				Submit
         </button>
          </div>
          <!-- end form-group -->
        </form>
        <!-- end form --> 
         <div class="form-group">
          <div id="success" class="alert alert-success wow fadeInUp animated" role="alert" style="visibility: visible; animation-name: fadeInUp;"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger wow fadeInUp animated" role="alert" style="visibility: visible; animation-name: fadeInUp;"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
        </div>
        <!-- end col-6 -->
   </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<!-- Pricing Plans -->
<div class="container text-white" id="pricing_plans">
  <div class="row">
    <!-- Pricing Plan -->
    <div class="col-md-4">
      <div class="pricing-plan">
        <h3>Single <br>Tour</h3>
        <p>One virtual tour, perfect for small businesses looking to explore AR/VR.</p><br>
        <p>If you own an AirBnb flat, this is the way to go </p>
        <!-- <span class="plan-price">$120</span><br> -->
        <button class="btn btn-sm btn-info">Choose Plan</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pricing-plan">
        <h3>Single <br>Tour</h3>
        <p>One virtual tour, perfect for small businesses looking to explore AR/VR.</p><br>
        <p>If you own an AirBnb flat, this is the way to go </p>
        <!-- <span class="plan-price">$120</span><br> -->
        <button class="btn btn-sm btn-info">Choose Plan</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pricing-plan">
        <h3>Single <br>Tour</h3>
        <p>One virtual tour, perfect for small businesses looking to explore AR/VR.</p><br>
        <p>If you own an AirBnb flat, this is the way to go </p>
        <!-- <span class="plan-price">$120</span><br> -->
        <button class="btn btn-sm btn-info">Choose Plan</button>
      </div>
    </div>
    <!-- Repeat for other plans -->
  </div>
</div>

<!-- FAQ Section -->
<div class="faq-section container text-white text-center">
  <h2>Frequently Asked Questions</h2>
  <!-- FAQ Item -->
  <div>
    <h3>What platforms do your VR experiences support?</h3>
    <p class="faq-answer">Our VR solutions are compatible with...</p>
  </div>
  <div>
    <h3>What platforms do your VR experiences support?</h3>
    <p class="faq-answer">Our VR solutions are compatible with...</p>
  </div>
  <div>
    <h3>What platforms do your VR experiences support?</h3>
    <p class="faq-answer">Our VR solutions are compatible with...</p>
  </div>

  <!-- Repeat for other FAQ items -->
</div>

</div>
<script>
  // Custom JS code can go here
  $('.faq-section h3').on('click', function() {
    $(this).next('.faq-answer').slideToggle();
  });
</script>
<?= $this->include('frontwebsite/partials/footer_bar') ?>
<?= $this->include('frontwebsite/partials/footer') ?>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
