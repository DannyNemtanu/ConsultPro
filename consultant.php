<?php include 'inc/header.php'; ?>
<?php include 'inc/consultant-nav.php'; ?>

 <!-- header -->
 <header>
   <div class="consultant-banner">
     <div class="row container">
       <div class="col-sm-4 col-sm-offset-4 cons-banner-left">
         <h1>Welcome! <br> Name Surname</h1>
         <p>Here you can see all you recent activity</p>
         <img src="img/consultant.png" alt="">
       </div>
     </div>
   </div>
 </header>
 <!-- end header -->
<!-- content -->
  <div class="consultant-content row col-xs-12">
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
            <div class="col-md-4">
              <h1>13</h1>
              <h4>Who viewed you account</h4>
            </div>
            <div class="col-md-4">
              <h1>0</h1>
              <h4>Feedbacks to your account</h4>
            </div>
            <div class="col-md-4">
              <h1>13</h1>
              <h4>Search appearance</h4>
            </div>
          </div>
        </div>
        <!-- End Dashborrd -->
        <!-- Profile Desc -->
        <div class="row expirience">
          <div class="col-xs-12 section-content">
            <div class="row pull-right edit">
              <div class="col-xs-1">
                  <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#descriptionModal" >
                    <img src="img/edit.png" alt="Edit">
                  </button>
              </div>
            </div>
            <div class="col-md-3 hidden-xs">
              <img src="img/consBuilding.png" alt="Building">
            </div>
            <div class="col-md-9 col-xs-12">
              <h1>Description</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
              </p>
            </div>
            <div class="row desc-btn">
              <div class="col-md-9 pull-right col-xs-12">
                <button type="button" name="button" class="btn btn-danger">Read More...</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Expirience -->
        <div class="row expirience">
          <div class="col-xs-12 section-content">
            <div class="row push-right edit">
              <div class="col-xs-1">
                  <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#jobModal" >
                    <img src="img/edit.png" alt="Edit">
                  </button>
              </div>
            </div>
            <div class="col-md-3 hidden-xs">
              <img src="img/consBuilding.png" alt="Building">
            </div>
            <div class="col-md-9 col-xs-12">
              <h1>Job Title</h1>
              <h4>Company Name</h4>
              <p>2016 - Present</p>
              <p>Location</p>

              <p>
                Responding to complaints applying tact, diplomacy and judgement.<br>
                Maintaining well-built relationships with staff and members.<br>
                Reconcile and balancing the transaction at the end of the shift.<br>
                Perform credit checks and check credit references.<br>
                Restock and replenish casino supplies.<br>
              </p>
            </div>
          </div>
        </div>
        <!-- End Expirience -->

        <!-- Education -->
        <div class="row education">
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="row push-right edit">
                <div class="col-xs-1">
                  <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#educationModal" >
                    <img src="img/edit.png" alt="Edit">
                  </button>
                </div>
              </div>
              <div class="col-md-3 hidden-xs">
                <img src="img/consEducation.png" alt="College Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>National College of Ireland</h1>
                <h4>Bachelor's Degree, BSc (Honours) in Accounting</h4>
                <span>2017 - 2019</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consEducation.png" alt="College Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>National College of Ireland</h1>
                <h4>Bachelor's Degree, Business Support</h4>
                <span>2015 - 2017</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Education -->

        <!-- Certificates -->
        <div class="row certificates  ">
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="row push-right edit">
                <div class="col-xs-1">
                  <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#certsModal" >
                    <img src="img/edit.png" alt="Edit">
                  </button>
                </div>
              </div>
              <div class="col-md-3 hidden-xs">
                <img src="img/consCertificate.png" alt="Certificate Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>ACCA QUALIFICATION</h1>
                <h4>PROFESSIONAL LEVEL CERTIFICATE</h4>
                <span>2017 - 2019</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consCertificate.png" alt="Certificate Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>FOUNDATIONS IN ACCOUNTANCY</h1>
                <h4>FOUNDATIONS IN AUDIT</h4>
                <span>2015 - 2017</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Certificates -->
      </div>
    </div>
    <!-- Right Side -->
    <div class="consultant-raling hidden-xs col-md-4">
      <div class="row consultant-raling-padding">
        <div class="row share">
          <div class="col-md-12">
            <div class="row">
              <h3>Share with friends!</h3>
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
            <h3>Our Suggested</h3>
            <!-- Consultants List -->
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
        <!-- End Suggestions -->
      </div>

    </div>
  </div>
  <div class="row fluid-container contact-bn">
    <div class="col-xs-8 container ">
      <h1>Is this good for you?</h1>
      <h1 id="big-text">CONTACT <span id="bold">CONSULTANT</span> NOW</h1>
    </div>
    <div class="col-xs-4">
      <button type="button" name="button" class="contact-btn btn btn-primary" data-toggle="modal" data-target="#contactModal">CONTACT NOW!</button>
    </div>
  </div>



  <!--Description Modal -->
  <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Description</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="" name="description">
                    <div class="form-group">
                        <label class="control-label">Profile Description</label>
                        <div>
                            <textarea name="description" class="form-control input-lg" placeholder="Profile Description Goes Here..." rows="8" max-cols="80"></textarea>
                        </div>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--Job Modal -->
  <div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Job Expirience</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="" name="jobForm">
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="cName" value="" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date</label>
                        <div>
                            <input type="date" class="form-control input-lg" name="cDate" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="cLocation" value="" placeholder="Location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <div>
                            <textarea class="form-control input-lg" name="description" rows="8" cols="80"></textarea>
                        </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!--Education Modal -->
  <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Education</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="" name="educationForm">
                    <div class="form-group">
                        <label class="control-label">Institute Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="iName" value="" placeholder="ex. National College of Ireland">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Degree</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="iDegree" value="" placeholder="ex. BSc in Computing">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Date Started</label>
                          <div>
                              <input type="date" class="form-control input-lg" name="iDateStart" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Date End</label>
                          <div>
                              <input type="date" class="form-control input-lg" name="iDateEnd" value="">
                          </div>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!--Certs Modal -->
  <div class="modal fade" id="certsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Certifications</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="" name="educationForm">
                    <div class="form-group">
                        <label class="control-label">Qualification</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="iName" value="" placeholder="ex. ACCA QUALIFICATION">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Course Title</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="iDegree" value="" placeholder="ex. PROFESSIONAL LEVEL CERTIFICATE">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Date Started</label>
                          <div>
                              <input type="date" class="form-control input-lg" name="qDateStart" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Date End</label>
                          <div>
                              <input type="date" class="form-control input-lg" name="qDateEnd" value="">
                          </div>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Contact Consultant</h1>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label class="control-label">E-mail:</label>
              <label class="control-label"><a href="mailto:eamil@example.com">eamil@example.com</a></label>
          </div>
          <div class="form-group">
              <label class="control-label">Cit:</label>
              <label class="control-label">Dublin, IE</label>
          </div>
          <div class="form-group">
              <label class="control-label">Contact Phone:</label>
              <label class="control-label">+353 (87) 555 - 5555</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- end content -->
<?php include 'inc/footer.php'; ?>
