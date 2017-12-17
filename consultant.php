<?php include 'inc/header.php'; ?>
<?php include 'inc/consultant-nav.php'; ?>

 <!-- header -->
 <header>
   <div class="consultant-banner">
     <div class="row container">
       <div class="col-sm-4 col-sm-offset-4 cons-banner-left profileBanner">
         <h1 id="fullName">Please Complete Profile First</h1>
         <p >Here you can see all you recent activity</p>
         
       </div>
     </div>
     <div class="row" style="margin-top:20px">
       <div class="col-md-offset-5 col-md-2" style="text-align:center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeProfileModal" style="text-decoration:underline; background:none;border:1px solid #efefef;padding:10px;">Complete Profile</button>
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
        <div class="row desc">
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
              <p id="postedDesc" class="no" style="height: 100px;overflow: hidden;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
              </p>
            </div>
            <div class="row desc-btn">
              <div class="col-md-9 pull-right col-xs-12">
                <button type="button" name="button" class="expandDesc btn btn-danger">Read More...</button>
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
              <h1 id="jTitle">Job Expirience</h1>
              <h4 id="jCompany">Company Name</h4>
              <p id="jDuration">2016 - Present </p>
              <p id="jLocation">Location</p>

              <p id="jDuties">
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
                <h1 id="eCollege">National College of Ireland</h1>
                <h4 id="eDegree">Bachelor's Degree, BSc (Honours) in Accounting</h4>
                <span id="eDuration">2017 - 2019</span>
              </div>
            </div>
          </div>
          <!-- <div class="row">
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
          </div> -->
        </div>
        <!-- End Education -->

        <!-- Certificates -->
        <div class="row certificates">
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
                <h1 id="cName">ACCA QUALIFICATION</h1>
                <h4 id="cLevel">PROFESSIONAL LEVEL CERTIFICATE</h4>
                <span id="cDuration">2017 - 2019</span>
              </div>
            </div>
          </div>
          <!-- <div class="row">
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
          </div> -->
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
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary suggested-btn no" name="button">See More</button>
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
          <form role="form" method="POST" action="#" id="desctiptionForm" name="description">
              <div class="form-group">
                  <label class="control-label">Profile Description</label>
                  <div>
                      <textarea id="description" name="description" class="form-control input-lg" placeholder="Profile Description Goes Here..." rows="8" max-cols="80"></textarea>
                  </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="descriptionSubmit btn btn-primary">Save changes</button>
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
          <form id="jobForm" role="form" method="POST" action="" name="jobForm">
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <div>
                            <input id="jobName" type="text" class="form-control input-lg" name="jName" value="" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date</label>
                        <div>
                            <input id="jobDate" type="date" class="form-control input-lg" name="jDate" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <div>
                            <input id="jobLocation" type="text" class="form-control input-lg" name="cLocation" value="" placeholder="Location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <div>
                            <textarea id="jobDescription" class="form-control input-lg" name="description" rows="8" cols="80"></textarea>
                        </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="jobSubmit btn btn-primary">Save changes</button>
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
          <form id="educationForm" role="form" method="POST" action="" name="educationForm">
                    <div class="form-group">
                        <label class="control-label">Institute Name</label>
                        <div>
                            <input id="eCollegeName" type="text" class="form-control input-lg" name="iName" value="" placeholder="ex. National College of Ireland">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Degree</label>
                        <div>
                            <input id="eDegree" type="text" class="form-control input-lg" name="iDegree" value="" placeholder="ex. BSc in Computing">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Date Started</label>
                          <div>
                              <input id="eDateStart" type="date" class="form-control input-lg" name="iDateStart" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Date End</label>
                          <div>
                              <input id="eDateEnd" type="date" class="form-control input-lg" name="iDateEnd" value="">
                          </div>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="educationSubmit btn btn-primary">Save changes</button>
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
          <form id="certsForm" role="form" method="POST" action="" name="educationForm">
                    <div class="form-group">
                        <label class="control-label">Qualification</label>
                        <div>
                            <input id="certQualification" type="text" class="form-control input-lg" name="iName" value="" placeholder="ex. ACCA QUALIFICATION">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Course Title</label>
                        <div>
                            <input id="certTitle" type="text" class="form-control input-lg" name="iDegree" value="" placeholder="ex. PROFESSIONAL LEVEL CERTIFICATE">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Date Started</label>
                          <div>
                              <input id="certStartDate" type="date" class="form-control input-lg" name="qDateStart" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Date End</label>
                          <div>
                              <input id="certEndDate" type="date" class="form-control input-lg" name="qDateEnd" value="">
                          </div>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="certSubmit btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!--Complete Modal -->
  <div class="modal fade" id="completeProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Complete Profile</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="profileForm" enctype="multipart/form-data" role="form" method="POST" action="" name="educationForm">
                    <div class="form-group">
                        <label class="control-label">Upload Profile Image</label>
                        <div>
                          <input id="fileButton" type="file" name="pimage[]" value="upload">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">First Name</label>
                          <div>
                              <input id="fname" type="text" class="form-control input-lg" name="iDegree" value="" placeholder="John">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Last Name</label>
                          <div>
                              <input id="lname" type="text" class="form-control input-lg" name="lname" value="" placeholder="Joe">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Country</label>
                          <div>
                              <input id="country" type="text" class="form-control input-lg" name="country" value="" placeholder="Country">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">City</label>
                          <div>
                              <input id="city" type="text" class="form-control input-lg" name="city" value="" placeholder="City">
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                      <label class="control-label">Steet</label>
                      <input id="street" type="text" class="form-control input-lg" name="street" value="" placeholder="Sreet">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Contact Number</label>
                      <input id="contactNumber" type="text" class="form-control input-lg" name="contactNumber" value="" placeholder="Contact Number">
                    </div>
                  </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="profileSubmit btn btn-primary">Save changes</button>
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
