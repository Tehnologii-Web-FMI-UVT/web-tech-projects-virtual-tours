<!-- View file: setup_agency.php -->
<?= $this->include('frontwebsite/partials/header') ?>
<?= $this->include('agency/partials/sidenavigation') ?>

<!-- Assuming the ending of the side-navigation part -->
<!-- end side-navigation -->

<!-- The form starts here -->
<form method="post" action="<?= site_url('/setup-agency/submit') ?>" enctype="multipart/form-data" class="agency-form ">
<div class="form-row">
<div class="form-column">

  <div class="form-group">
    <label for="agencyName">Agency Name:</label>
    <input type="text" id="agencyName" name="agencyName" required maxlength="50">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" maxlength="50">
  </div>
  </div>

  <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="tel" id="phone_number" name="phone_number" maxlength="11">
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" maxlength="55">
  </div>

  <div class="form-group">
    <label for="website_url">Website URL:</label>
    <input type="text" id="website_url" name="website_url" maxlength="50">
  </div>
  <div class="form-column">

  <!-- <div class="form-group">
    <label for="active_properties_listed">Active Properties Listed:</label>
    <input type="number" id="active_properties_listed" name="active_properties_listed">
  </div> -->

  <div class="form-group">
    <label for="total_properties_listed">Total Properties Listed:</label>
    <input type="number" id="total_properties_listed" name="total_properties_listed">
  </div>

  <div class="form-group">
    <label for="total_properties_sold">Total Properties Sold:</label>
    <input type="number" id="total_properties_sold" name="total_properties_sold">
  </div>

  <div class="form-group">
    <label for="number_of_agents">Number of Agents:</label>
    <input type="number" id="number_of_agents" name="number_of_agents">
  </div>

  <div class="form-group">
    <label for="virtual_tours_created">Virtual Tours Created:</label>
    <input type="number" id="virtual_tours_created" name="virtual_tours_created">
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required maxlength="255">
  </div>

  <div class="form-group">
    <label for="total_properties_available">Total Properties Available:</label>
    <input type="number" id="total_properties_available" name="total_properties_available">
  </div>

  <!-- <div class="form-group">
    <label for="logo">Logo URL:</label>
    <input type="file" id="logo" name="logo">
  </div> -->

  <div class="form-group">
    <button type="submit" class="submit-button">Submit</button>
  </div>
  </div>
  </div>

</form>

<!-- Add this section at the head of your HTML or in a separate CSS file -->
<style>
  .agency-form {
    max-width: 1000px;
    margin: 0 auto;
    padding: 1em;
    background: #f9f9f9;
    border-radius: 1em;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2em;
  }

  .form-row {
    display: contents;
  }

  .form-column {
    display: flex;
    flex-direction: column;
  }

  .form-group {
    margin-bottom: 1em;
  }

  label {
    display: block;
    margin-bottom: .5em;
    color: #333333;
  }

  input[type="text"],
  input[type="tel"],
  input[type="email"],
  input[type="url"],
  input[type="number"] {
    width: 100%;
    padding: .5em;
    border: 1px solid #ddd;
    border-radius: .25em;
  }

  .submit-button {
    width: 100%;
    padding: .8em;
    border: none;
    border-radius: .25em;
    background: #0056b3;
    color: white;
    font-size: 1em;
    cursor: pointer;
  }

  .submit-button:hover {
    background: #003d82;
  }

  @media (max-width: 768px) {
    .agency-form {
      grid-template-columns: 1fr;
    }
  }
</style>



<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>
