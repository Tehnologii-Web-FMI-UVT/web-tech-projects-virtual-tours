<!-- app/Views/agency/manage_properties.php -->
<?= $this->include('frontwebsite/partials/header') ?>
<!-- Link Swiper's CSS -->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>



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
.current_properties {
    display: flex;
    flex-wrap: wrap;
    gap: 30px; /* This provides space between cards */
    justify-content: left; /* Centers the cards in the container */
    padding: 50px;
}

.property_card {
    flex-basis: calc(33% - 30px); /* Three cards per row with gap taken into account */
    background-color: white;
    border: 1px solid grey;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Soft shadow for depth */
    border-radius: 8px; /* Rounded corners */
    overflow: hidden; /* Keeps child elements inside the card */
    transition: transform 0.3s; /* Smooth transition for hover effect */
}

.property_card:hover {
    transform: translateY(-5px); /* Slight raise effect on hover */
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    background-color: #26282b;
    color: #26282b;
}

.card-title h2 {
    margin: 0;
    font-size: 1.5rem;
}

.card-toolbar a {
    text-decoration: none;
    color: white;
    margin-left: 10px; /* Space between edit and delete links */
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.card-toolbar a.edit-link {
    background-color: #4CAF50; /* Green background for edit */
}

.card-toolbar a.delete-link {
    background-color: #F44336; /* Red background for delete */
}

.card-toolbar a:hover {
    background-color: darken(#4CAF50, 10%);
}

.card-body {
    background-color: #26282b;
    color: white;
    padding: 15px;
    line-height: 1.6; /* Better readability for text */
}

/* Media query for responsive layout */
@media (max-width: 1200px) {
    .property_card {
        flex-basis: calc(50% - 30px); /* Two cards per row */
    }
}

@media (max-width: 768px) {
    .property_card {
        flex-basis: 100%; /* Full width for mobile */
    }
}
.swiper-container {
    width: 100%;
    height: 300px; /* Adjust based on your preference */
    margin-top: 15px;
  }
  
  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px; /* Adjust based on your preference */
    height: 300px; /* Adjust based on your preference */
  }
  
  .swiper-pagination-bullet {
    background: white;
    opacity: 1;
  }
  
  .swiper-pagination-bullet-active {
    background: #007bff;
  }
  .truncate{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    max-width: 80%;
    overflow: hidden;
    text-overflow: ellipsis;
    height:56px;
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

<h1>Manage Properties</h1>

<!-- This section would list the properties and provide options to edit or delete -->
<div class="current_properties row">
  <?php foreach ($properties as $property): ?>
    <div class="property_card">
      <div class="card-header">
        <div class="card-title">
          <h2 class="truncate"><?= esc($property['title']) ?></h2>
        </div>
        <div class="card-toolbar">
           
        </div>
      </div>
      <div class="card-body">
        <p class="truncate"><?= esc($property['description']) ?></p>
        <p class="truncate"><?= esc($property['details']) ?></p>
        <p><?= esc($property['price']) ?> €</p>
        <a class="text-white" href="<?= esc($property['virtual_tour_url']) ?>">view virtual tour</a>  
      </div>
      <div class="card-footer text-end">
      <p><?= esc($property['address']) ?></p>
 <!-- view property link -->
 <a href="<?= site_url('properties/view/'.$property['id']) ?>" class="btn btn-sm btn-info">View</a>

<!-- Edit link -->
<a href="<?= site_url('properties/edit/'.$property['id']) ?>" class="btn btn-sm btn-dark">Edit</a>
<!-- Delete link -->
<a href="<?= site_url('agency-main/delete_property/'.$property['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
    </div>
    </div>
  <?php endforeach; ?>
</div>

<?= $this->include('/agency/partials/map') ?>


<!-- Link to add a new property -->
<a style="margin-top:15px; margin-bottom:15px;" href="<?= base_url('/agency-main/create-property') ?>">Add New Property</a>


<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?= $this->include('frontwebsite/partials/footer') ?>
