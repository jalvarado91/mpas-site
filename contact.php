<?php
$bodyClass = "contact";
include('./includes/head.php'); ?>
  
  <div class="content mb-lg">
    <div class="container">
      <h1>Contact</h1>


      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <h2 class="mb-lg">Miami Performing Arts Studio Information</h2>

          <div class="address">
            <h4 class="mb-none">Address</h4>
            <p class="mt-sm">
              15904 SW 92 Ave. <br>
              Palmetto Bay, FL 33157
            </p>
          </div>

          <div class="email">
            <h4 class="mb-none">Email</h4>
            <p class="mt-sm">
              <a href="mailto:Info@performingartsmiami.com">
                Info@performingartsmiami.com
              </a>
            </p>
          </div>

          <div class="email">
            <h4 class="mb-none">Phone</h4>
            <p class="mt-sm">
              <a href="tel:7868086033">
                786-808-6033
              </a>
            </p>
          </div>
          <!-- Online

          Facebook
          Twitter -->
        </div>
        <div class="col-xs-12 col-sm-8">
          <h2 class="mb-lg">Contact MPAS</h2>
          <form>
            <div class="form-group">
              <label for="name">Name <sup>*</sup></label>
              <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <label for="email">Email <sup>*</sup></label>
              <input type="email" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <label for="subject">Subject <sup>*</sup></label>
              <input type="text" class="form-control" id="subject" placeholder="Your Email">
            </div>
            <div class="form-group">
              <label for="message">Message <sup>*</sup></label>
              <textarea name="message" class="form-control" id="message" rows="3">
              </textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <iframe width="100%" height="380" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJydGEwSHE2YgRmJoDXSBhmOA&key=AIzaSyDa8l9ZfSZPg000M4hcrI9oP_epIiuSXW4" allowfullscreen></iframe>

<?php include('./includes/footer.php'); ?>
