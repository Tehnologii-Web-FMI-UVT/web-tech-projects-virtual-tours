<div class="side-navigation">

  <div class="menu">
  <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">Locations</a>
          <ul>
            <li><a href="/all_properties">For sale</a></li>
            <li><a href="/all_properties">For rent</a></li>
          </ul>
        </li>
   
        <li><a href="#">Apartments</a>
          <ul>
            <li><a href="/all_properties">1 Room 47m²</a></li>
            <li><a href="/all_properties">2 Rooms 65m²</a></li>
            <li><a href="/all_properties">3 Rooms 90m²</a></li>
          </ul>
        </li>
        <li><a href="#">Services</a>
        <ul>
            <li><a href="/services">AR/VR</a></li>
            <li><a href="/services">For Agencies</a></li>
            <li><a href="/services">For Hotels</a></li>
            <li><a href="/services">For Airbnb</a></li>
        </ul>
        </li>
        <li><a href="/">News</a></li>
        <li><a href="#">PAGES</a>
          <ul>
            <li><a href="">Sales Offices</a></li>
            <li><a href="">Press Relases</a></li>
            <li><a href="">Photo Gallery</a></li>
            <li><a href="">Intro Video</a></li>
            <li><a href="">Certificates</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Sales Team</a></li>
            <li><a href="">404 Error</a></li>
          </ul>
        </li>
        <li><a href="">CONTACT</a></li>
        <li><a href="/login"><i class="fa fa-user" style="font-size:2 rem !important; color:white;"></i></a></li>

      </ul>
  </div>
  <!-- end menu -->
  <?php 
  if(isset($_SESSION) && !empty($_SESSION['agency'])){ ?>
    <div class="side-content">
    <figure> <img src="<?php echo base_url()?>/public/images/logo_no_bg.png" alt="Image"> </figure>
    <h4>Welcome</h4>
    <p>Easily access important links from this sidebar.</p>
    <ul >
      <li><a class="text-white" href="/agency-main">Dashboard</a></li>
    </ul>
    <address>
    Together we'll make sure your real estate presented in the most real way
    </address>
    <h6>+40730870717</h6>
    <p><a href="#">office@e-tours.ro</a></p>
    <a class="text-white" href="/logout"><h4>LOGOUT</h4></a>
 
    <small>© 2019 Homepark | Real Estate & Luxury Homes</small> </div>
  <!-- end side-content --> 
</div>
<?php }else{ ?>
    <div class="side-content">
    <figure> <img src="<?php echo base_url()?>/public/images/logo_no_bg.png" alt="Image"> </figure>
    <h4>Join us</h4>
    <p>If you own properties and want us to present them on our application, follow the next steps.</p>
    <ul class="gallery">
      <li><a href="<?php echo base_url()?>/public/images/gallery-thumb01.jpg" data-fancybox><img src="<?php echo base_url()?>public/images/helpers_icons/createaccount.png" alt="Image"></a></li>
      <li><a href="<?php echo base_url()?>/public/images/gallery-thumb02.jpg" data-fancybox><img src="<?php echo base_url()?>/public/images/helpers_icons/setupagency.png" alt="Image"></a></li>
      <li><a href="<?php echo base_url()?>/public/images/gallery-thumb03.jpg" data-fancybox><img src="<?php echo base_url()?>/public/images/helpers_icons/results.png" alt="Image"></a></li>
    </ul>
    <address>
    Together we'll make sure your real estate presented in the most real way
    </address>
    <h6>+40730870717</h6>
    <p><a href="#">office@e-tours.ro</a></p>
    <ul class="social-media">
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>

    </ul>
    <small>© 2019 Homepark | Real Estate & Luxury Homes</small> </div>
  <!-- end side-content --> 
</div>
<?php } ?>