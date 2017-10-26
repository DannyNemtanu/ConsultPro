<!-- Include Header -->
<?php include 'inc/header.php'; ?>
<!-- Including Navigation -->
<?php  include 'inc/navigation.php'; ?>
  <!-- Body Starts -->
  <!-- Heder -->
  <div class="jumbotron header-banner">
    <div class="container-fluid">
      <div class="row header-info">
           <h1>FIND CONSULTANTS <br> IN MINUTES</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
           <button type="button" class="btn btn-primary header-inf-btn">EXPLORE NOW</button>
      </div>
      <div class="row header-form">
        <form class="home-form" action="index.html" method="post">
          <label for="username">Username</label><br>
          <input type="text" name="username" id="username" placeholder="Username"><br>
          <label for="username">Password</label><br>
          <input type="password" name="pass"  id="pass" placeholder="Password">
          <div class="form-footer">
            <button type="submit" id="submit-btn" class="btn btn-primary header-inf-btn">LOG IN</button><br>
            <span>Don't have an account yet?</span><br>
            <span><a id="color-red" href="#">SIGN UP</a></span><br>
<?php include 'inc/navigation.php'; ?>

<style>
<?php include '../css/style.css';?>
</style>
<!-- Body Starts Here -->
  <!-- Header -->
    <header>
      <div class="container jumbotron banner">
        <div class="info">
          <h1>ProCons</h1>
        </div>

        <div class="left">
          <div class="login-form">
              <span>Don't have an account yet?<h3>Login Now</h3></span>
              <form class="login-home-form" action="index.html" method="post">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="email@example.com" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!-- Content -->
    <div class="content">
      <div class="row">
        <div class="col-sm-12 title">
          <h1>PROFFESIONALS <span id="bold">IN</span></h1>
        </div>
      </div>
      <div class="row container explanation">
        <div class="col-md-4">
          <img src="img/businessicon.png" alt="Business Icon">
          <h3>BUSINESS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="col-md-4">
          <img src="img/managementIcon.png" alt="Managment Icon">
          <h3>MANAGEMENT</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="col-md-4">
          <img src="img/accountingIcon.png" alt="Accounting Icon">
          <h3>ACCOUNTING</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
      </div>
      <div class="row container explanation">
        <div class="col-md-4">
          <img src="img/marketingIcon.png" alt="Business Icon">
          <h3>MARKETING</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="col-md-4">
          <img src="img/tutorialIcon.png" alt="Business Icon">
          <h3>TUTORIALS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="col-md-4">
          <img src="img/eventIcon.png" alt="Business Icon">
          <h3>EVENTS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
      </div>
    </div>

    <!-- Testimonials -->
    <div class="row testimonials">
      <div class="col-xs-offset-3 col-xs-6">
        <h2><span id="bold" >OUR</span> TESTIMONIALS</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </p>
        <h4>by <span id="bold">Jonathan Lynch</span></h4>
      </div>
    </div>
    <pre id="object"></pre>
    <!-- Body Ends -->


  <!-- Include Footer -->
  <?php include 'inc/footer.php'; ?>
