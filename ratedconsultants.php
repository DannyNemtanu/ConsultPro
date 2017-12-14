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
            <a href="customer.php">
              <div class="col-md-4">
                <h2>Profile</h2>
              </div>
            <a href="likedconsultants.php">
              <div class="col-md-4">
                <h1>3</h1>
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

            <style>
            html {
              box-sizing: border-box;
            }

            *, *:before, *:after {
              box-sizing: inherit;
            }

            .column {
              float: left;
              width: 33.3%;
              margin-bottom: 16px;
              padding: 0 8px;
            }

            @media (max-width: 650px) {
              .column {
                width: 100%;
                display: block;
              }
            }

            .card {
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .container {
              padding: 0 16px;
            }

            .container::after, .row::after {
              content: "";
              clear: both;
              display: table;
            }

            .title {
              color: grey;
            }

            .button {
              border: none;
              outline: 0;
              display: inline-block;
              padding: 8px;
              color: white;
              background-color: #000;
              text-align: center;
              cursor: pointer;
              width: 100%;
            }

            .button:hover {
              background-color: #555;
            }
            </style>

            <div class="row">
              <div class="column">
                <div class="card">
                  <img src="/img/team1.jpg" style="width:100%">
                  <div class="container">
                    <h2>Jane Doe</h2>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <img src="/img/team2.jpg" style="width:100%">
                  <div class="container">
                    <h2>Mike Ross</h2>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <img src="/img/team3.jpg" style="width:100%">
                  <div class="container">
                    <h2>John Doe</h2>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                  </div>
                </div>
              </div>
            </div>

  <!-- first star -->

<div class="col-md-4">
<div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
</div>


  <!-- second star -->

<div class="col-md-4">
<div class="stars">
  <form action="">
    <input class="star star-5" id="star-10" type="radio" name="star"/>
    <label class="star star-5" for="star-10"></label>
    <input class="star star-4" id="star-9" type="radio" name="star"/>
    <label class="star star-4" for="star-9"></label>
    <input class="star star-3" id="star-8" type="radio" name="star"/>
    <label class="star star-3" for="star-8"></label>
    <input class="star star-2" id="star-7" type="radio" name="star"/>
    <label class="star star-2" for="star-7"></label>
    <input class="star star-1" id="star-6" type="radio" name="star"/>
    <label class="star star-1" for="star-6"></label>
  </form>
</div>
</div>

<!-- third star -->

<div class="col-md-4">
<div class="stars">
  <form action="">
    <input class="star star-5" id="star-15" type="radio" name="star"/>
    <label class="star star-5" for="star-15"></label>
    <input class="star star-4" id="star-14" type="radio" name="star"/>
    <label class="star star-4" for="star-14"></label>
    <input class="star star-3" id="star-13" type="radio" name="star"/>
    <label class="star star-3" for="star-13"></label>
    <input class="star star-2" id="star-12" type="radio" name="star"/>
    <label class="star star-2" for="star-12"></label>
    <input class="star star-1" id="star-11" type="radio" name="star"/>
    <label class="star star-1" for="star-11"></label>
  </form>
</div>
</div>

<!-- first star -->

<style>
div.stars{
width: 270px;
display: inline-block;

}

input.star { display: none; }

label.star {
float: right;
padding: 8px;
font-size: 36px;
color: #444;
transition: all .2s;
}

input.star:checked ~ label.star:before {
content: '\f005';
color: #FD4;
transition: all .25s;

}

input.star-2:checked ~ label.star:before {
color: #FE7;
text-shadow: 0 0 20px #952;
}

input.star-3:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
content: '\f006';
font-family: FontAwesome;
}
</style>



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
                  <a href="https://www.facebook.com/sharer/sharer.php?u="><img src="img/facebookShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source="><img src="img/linkedinShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="https://twitter.com/home?status="><img src="img/twitterShare.png" alt=""></a>
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
        </div>
        <!-- Connected Customers -->
      </div>
    </div>
  </div>


<!-- end content -->

<?php include 'inc/footer.php'; ?>
