
$(document).ready(function(){

// Initialize Firebase
var config = {
    apiKey: "AIzaSyBicl8axN3bA_jxCCpoVNgaN7sPsj4cgto",
    authDomain: "econsult-web.firebaseapp.com",
    databaseURL: "https://econsult-web.firebaseio.com",
    projectId: "econsult-web",
    storageBucket: "econsult-web.appspot.com",
    messagingSenderId: "399861223853"
  };

if (firebase.initializeApp(config)) {
  console.log("App is Initialized! & Connected To Database!");
};

//create firebase references
var auth = firebase.auth();
var dbRef = firebase.database();


//Register Customer
$('#signup-customer').on('submit', function (e) {
  e.preventDefault();
  var usersRef = dbRef.ref('customer');
  $('#signup-customer').modal('hide');
  var data = {
    email: $('#registerCustomerEmail').val(), //get the email from Form
    type: 'customer',
  };
  var passwords = {
    password : $('#registerCustomerPass').val(), //get the pass from Form
    cPassword : $('#registerCustomerCPass').val(), //get the confirmPass from Form
  }
  if( data.email != '' && passwords.password != ''  && passwords.cPassword != '' ){
    if( passwords.password == passwords.cPassword ){
      //create the user
        firebase.auth().createUserWithEmailAndPassword(data.email, passwords.password).then(function(user){
            //now user is needed to be logged in to save data
            console.log("Authenticated successfully new customer:", user);
            auth = user;
            //now saving the profile data
            usersRef.child(user.uid).set(data).then(function(){
                console.log("User Information Saved:", user.uid);
            //redirecting
            var url = "/consultantPro/customer.php";
            $(location).attr("href", url);
              });
            });
        }else {
          //password and confirm password didn't match
          alert("Passwords didn't match!");
        }
      }else{
        alert("Please Fill al Fields!");
      }
  });

//Register Consultant
$('#signup-consultant').on('submit', function (e) {
    e.preventDefault();
    var usersRef = dbRef.ref('consultant');
    $('#signup-consultant').modal('hide');
    var data = {
      email: $('#registerConsultantEmail').val(), //get the email from Form
      type:"consultant"
    };
    var passwords = {
      password : $('#registerConsultantPass').val(), //get the pass from Form
      cPassword : $('#registerConsultantCPass').val(), //get the confirmPass from Form
    }
    if( data.email != '' && passwords.password != ''  && passwords.cPassword != '' ){
      if( passwords.password == passwords.cPassword ){
        //create the user
          firebase.auth().createUserWithEmailAndPassword(data.email, passwords.password).then(function(user){
              //now user is needed to be logged in to save data
              console.log("Authenticated successfully with payload:", user);
              auth = user;
              //now saving the profile data
              usersRef.child(user.uid).set(data).then(function(){
                  console.log("User Information Saved:", user.uid);
                  //redirecting
                  var url = "/consultantPro/consultant.php";
                  $(location).attr("href", url);
                });
              });
          }else {
            //password and confirm password didn't match
            alert("Passwords didn't match!");
          }
        }else{
          alert("Please Fill al Fields!");
        }
      });

// Login
$("#header-login-form").on('submit',function(e){
  e.preventDefault();
  var data ={
    email: $("#loginEmail").val() //Login Email
  };
  var password = {
   password : $("#loginPass").val() //login password
 };
  if (data.email != '' && password.password != '') {
    firebase.auth().signInWithEmailAndPassword(data.email, password.password).then(function(user) {
      console.log("Signed In successfully!", user);
      var typeRef = dbRef.ref('/customer/'+user.uid);
      typeRef.on("value", function(snapshot) {
          var type = snapshot.val();
          if (type == null) {
            var url = "/consultantPro/consultant.php?uid="+user.uid;
            $(location).attr("href", url);
          }else{
            var url = "/consultantPro/customer.php?uid="+user.uid;
            $(location).attr("href", url);
            console.log(type);
          }
        }, function (errorObject) {
          console.log("The read failed: " + errorObject.code);
          });
    }).catch(error => {alert(error.message)});
  }
  else{
    console.log("Please Fill The Blanks!");
  }
});

//Logout User
$("#user-logout").on("click",function(e){
  e.preventDefault();
  firebase.auth().signOut().then(function(user) {
  // Sign-out successful.
  var url = "/consultantPro/index.php";
  $(location).attr("href", url);
  }, function(error) {
    console.log("An error happened! : "+error);
  });
});


// Consultnatns Page Functionality
//Toggle Description
$(".expandDesc").on('click',function(){
  if ($("#postedDesc").hasClass("no")) {
  $("#postedDesc").css({"height": "auto","display":"block","transition":"all 0.3s linear 0s"});
  $("#postedDesc").removeClass("no");
  }
  else{
  $("#postedDesc").css({"height": "100px","display":"block","transition":"all 0.3s linear 0s"});
  $("#postedDesc").addClass("no");
  }
});

for (var i = 1; i < 3; i++) {
  var singleConsultant ='<div class="row id'+i+'"> <div class="col-md-4 img"><img src="img/consultant.png" alt=""></div><div class="col-md-8"><h4>Name Surname</h4><h5>Accounting | Business | Qualified</h5><h6>Rating: <br> 5+ Star</h6></div></div>';
  $(".consultant-suugested").append(singleConsultant);
}
//Adding Suggested registerConsultant
$(".suggested-btn").on('click',function(){
  if($(".suggested-btn").hasClass("no")){
    var i = 3;
    while(i<6){
      var singleConsultant ='<div class="row id'+i+'"> <div class="col-md-4 img"><img src="img/consultant.png" alt=""></div><div class="col-md-8"><h4>Name Surname</h4><h5>Accounting | Business | Qualified</h5><h6>Rating: <br> 5+ Star</h6></div></div>';
      $(".consultant-suugested").append(singleConsultant);
      i++;
    }
    $(".suggested-btn").removeClass("no");
  }else{
    var i = 6;
    while (i>2) {
      $(".consultant-suugested .id"+i).addClass("hidden");
      i--;
    }
    $(".suggested-btn").addClass("no");
  }
});


// -------------------------------------
// Consultant Information Submitting
// -------------------------------------
$(".descriptionSubmit").on('click',function(e){
  e.preventDefault();
    if ($("#description").val() != '' && $("#description").val().length > 50) {
      if (user) {
      var data = {
        description: $("#description").val()
      };

      var desc = dbRef.ref('consultant/'+user.uid);
        desc.update(data).then(function(){
          console.log("User description successfully saved!");
        });
        $("#descriptionModal").hide();
        $("#desctiptionForm").submit();
      }else{
        alert("Please login first...");
      }
    }else{
      alert("Please fill the description area!\n There should be at least 50 charachters!");
    }
});

// -------------------------------------
// Consultant Job Info
// -------------------------------------
$(".jobSubmit").on('click',function(){
      var data = {
        CompanyName: $("#jobName").val(),
        JobDate: $("#jobDate").val(),
        Location: $("#jobLocation").val(),
        Description: $("#jobDescription").val(),
      };
      var user = firebase.auth().currentUser;
      var job = dbRef.ref('consultant/'+user.uid);
        job.child('job').update(data).then(function(){
          console.log("User description successfully saved!");
        });
        $("#jobModal").hide();
        $("#jobForm").submit();
});

// -------------------------------------
// Consultant Education Info
// -------------------------------------
$(".educationSubmit").on('click',function(){
      var data = {
        InstituteName: $("#educationForm #eCollegeName").val(),
        Degree: $("#educationForm #eDegree").val(),
        StartDate: $("#educationForm #eDateStart").val(),
        EndDate: $("#educationForm #eDateEnd").val()
      };
      console.log(data);
      var user = firebase.auth().currentUser;
      var job = dbRef.ref('consultant/'+user.uid);
        job.child('education').update(data).then(function(){
          console.log("User education successfully saved!");
        });
        $("#educationModal").hide();
        $("#educationForm").submit();
});

// -------------------------------------
// Consultant Certificates Info
// -------------------------------------
$(".certSubmit").on('click',function(){
      var data = {
        Name: $("#certQualification").val(),
        Level: $("#certTitle").val(),
        StartDate: $("#certStartDate").val(),
        EndDate: $("#certEndDate").val()
      };
      console.log(data);
      var user = firebase.auth().currentUser;
      var job = dbRef.ref('consultant/'+user.uid);
        job.child('certificates').update(data).then(function(){
          console.log("User certificates successfully saved!");
        });
        $("#certsModal").hide();
        $("#certsForm").submit();
});

//Checking if the user is logged in
//Getting the user informations
firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      var uid = user.uid;
      console.log("State Changed:"+user.uid);
      var ref = dbRef.ref("consultant/"+user.uid);
      ref.on("value", function(snapshot) {
        var consultant = snapshot.val();
        console.log("Loged In As: "+ user.email);
        $("#postedDesc").html(consultant.description);
        $("#jCompany").html(consultant.job.CompanyName);
        $("#jDuration").html(consultant.job.JobDate);
        $("#jLocation").html(consultant.job.Location);
        $("#jDuties").html(consultant.job.Description);
        $("#eCollege").html(consultant.education.InstituteName);
        $("#eDegree").html(consultant.education.Degree);
        $("#eDuration").html(consultant.education.StartDate + " / " +consultant.education.EndDate);
        $("#cName").html(consultant.certificates.Name);
        $("#cLevel").html(consultant.certificates.Level);
        $("#cDuration").html(consultant.certificates.StartDate + " / " +consultant.certificates.EndDate);
      }, function (errorObject) {
        console.log("The read failed: " + errorObject.code);
      });
    }
    else{
      if (window.location.pathname != "/consultantPro/index.php") {
        window.location.href = "/consultantPro/index.php";
      }
    }
  });
});
