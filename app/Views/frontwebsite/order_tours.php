<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact sales</title>
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
  </div>
</div>


<!-- end page-header -->
<section class="contact">
  <div class="container">
    <div class="row align-items-center">
   	<div class="col-lg-6 wow fadeInUp"> <b>07</b>
        <h4><span>E-tours</span> partnernship contact</h4>
        <small>Contact our sales office </small> </div>
        <!-- end col-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>1.Complete the form below</strong>
        	<p>Complete the following form with accurate data </p>
        </address>
	   </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>2.We will get in touch soon</strong>
        	<p>We will reach back to you to discuss more about this opportunity</p>
        </address>
	   </div>
        <!-- end col-3 -->
	  </div>
       <!-- end row -->
   <div class="row align-items-center">
     
        <!-- end col-6 -->
       
		<div class="col-lg-4">
		<div class="container">
    <h2>Reasons Why Agencies Should Try Virtual Tours</h2>
    <ul>
      <li><strong>Immersive Experience:</strong> Provide clients with an immersive and realistic experience of properties, enhancing their engagement.</li>
      <li><strong>24/7 Accessibility:</strong> Virtual tours enable prospective buyers to explore properties at any time, overcoming scheduling limitations.</li>
      <li><strong>Global Reach:</strong> Reach a global audience without the need for physical visits, expanding your market reach and potential clientele.</li>
      <li><strong>Time and Cost Savings:</strong> Save time and resources by pre-qualifying clients who have a genuine interest after touring virtually.</li>
      <li><strong>Competitive Edge:</strong> Stand out in a crowded market by embracing innovative technology, showcasing a forward-thinking approach.</li>
      <li><strong>Remote Collaboration:</strong> Facilitate collaboration between clients and agents, even if they are geographically distant, through virtual walkthroughs.</li>
      <li><strong>Enhanced Marketing:</strong> Utilize virtual tours as powerful marketing tools, attracting attention and differentiating your agency from competitors.</li>
      <li><strong>Increased Engagement:</strong> Capture and maintain potential buyers' interest with interactive and visually appealing virtual experiences.</li>
      <li><strong>Reduced Foot Traffic:</strong> Minimize physical property visits, especially in the initial stages, reducing the inconvenience for both clients and agents.</li>
      <li><strong>Data and Analytics:</strong> Gain insights into user behavior and preferences, helping refine marketing strategies and property presentations.</li>
    </ul>
  </div>
		</div>
		<div class="col-lg-8">
        	<div class="contact-form">	
			 <form id="contact" name="contact" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" autocomplete="off" required>
             <span>Your name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <input type="text" name="agencyName" id="agencyName" autocomplete="off" required>
             <span>Agency name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="email" id="email" autocomplete="off" required>
            <span>Your e-mail/ Agency email</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required>
            <span>Location/City</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required>
            <span>Number of virtual tours you want to create</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required>
            <span>Total properties available</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <textarea name="message" id="message" autocomplete="off" required></textarea>
            <span>Any further details we should know?</span>
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
          <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
        </div>
        <!-- end col-6 -->
    <!-- end row --> 
  </div>
  </div>
  <!-- end container --> 
</section>
<!-- end contact -->
<?= $this->include('frontwebsite/partials/faq') ?>

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
