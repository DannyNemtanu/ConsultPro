<?php include 'inc/header.php'; ?>
<?php include 'inc/customer-nav.php'; ?>

 <!-- header -->
 <!-- <header>
   <div class="consultant-banner">
     <div class="row container">
       <div class="col-sm-4 col-sm-offset-4 cons-banner-left">
         <h1>Welcome! <br> Name Surname</h1>
         <p>Here you can see all you recent activity</p>
         <img src="img/consultant.png" alt="">
       </div>
     </div>
   </div>
 </header> -->
 <!-- end header -->
<!-- content -->
  <div class="customer-content row col-xs-12">
    <!-- Left Side -->
    <div class="consultant-main col-md-8 col-xs-12">
      <div class="row">
        <div class="col-xs-12 section-content dashboard">
          <!-- Consultant Dashboard -->
          <div class="row text">
            <h1 id="bold">Your Dashboard</h1>
            <h4>Private to you !</h4>
          </div>
          <div class="row dash-info">
            <a href="likedconsultants.php">
              <div class="col-md-4">
                <h1>13</h1>
                <h4>Liked Consultants</h4>
              </div>
            </a>
              <a href="feedbackpage.php">
                <div class="col-md-4">
                  <h1>2</h1>
                  <h4>Feedback Given</h4>
                </div>
                <a href="ratedconsultants.php">
                  <div class="col-md-4">
                    <h1>13</h1>
                    <h4>Rated Consultants</h4>
                  </div>
          </div>
        </div>
        </div>
        <!-- End Dashborrd -->


      <!-- Recomended Consultants -->



      <!-- Recomended Consultants -->
    </div>
    <!-- Right Side -->
    <div class="consultant-raling hidden-xs col-md-4">
      <div class="row consultant-raling-padding">
        <div class="row share">
          <div class="col-md-12">
            <div class="row">
              <h3>Share your profile with friends!</h3>
              <div class="row">
                <div class="col-md-4">
                  <a href="#"><img src="img/facebookShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img src="img/linkedinShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img src="img/twitterShare.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Suggestions -->
        <div class="row suggestions">
          <div class="col-md-12">
            <h3>Recommended Consultants</h3>
            <!-- Conntected Consultants List -->
            <div class="row consultant-suugested">
              <div class="row">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
              <div class="row no-border">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary suggested-btn" name="button">See More</button>
            </div>
          </div>
        </div>
        <!-- Connected Customers -->
      </div>
    </div>
  </div>

<!-- end content -->

<?php include 'inc/footer.php'; ?>
