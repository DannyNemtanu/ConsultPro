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
//Storage ref
var storageRef = firebase.storage();
var index = dbRef.ref('/');
var consultantRef = dbRef.ref("consultant");
//getting Url Parameter
var urlParams = new URLSearchParams(window.location.search);
var id = urlParams.get('uid');


//Loading Consultants
consultantRef.on("child_added", function(snapshot) {
  var parrent = snapshot.key;
  var cInfo = snapshot.val();
  var userImg = storageRef.ref('profileImages/'+parrent+'-profileImage.png');
  userImg.getDownloadURL().then(function(url) {
  var singleConsultant ='<a href="consultant.php?uid='+parrent+'"><div class="row" id="'+parrent+'"> <div class="col-md-4 img"><img  src="'+url+'" alt=""></div><div class="col-md-8"><h4>'+cInfo.FirstName +" "+cInfo.LastName+'</h4><h5>Accounting | Business | Qualified</h5><h6>Rating: <br> 5+ Star</h6></div></div></a>';
  var customerPageConsultants = '<a href="consultant.php?uid='+parrent+'"><div class="column"><div class="card"><img src="'+url+'" style="width:100%"><h2>'+cInfo.FirstName +" "+cInfo.LastName+'</h2><p style="padding:5px; max-height:85px;overflow:hidden;">'+cInfo.Description+'</p></div></div></a>';
  var exploreConsultants = '<div class="col-md-3"><a href="consultant.php?uid='+parrent+'"><div class="card"><img src="'+url+'" style="width:100%"><h2 style="margin:0;">'+cInfo.FirstName +" "+cInfo.LastName+'</h2><p style="max-height: 60px;overflow: hidden;}">'+cInfo.Description+'</p></div></a></div>';
  $(".consultant-suugested").append(singleConsultant);
  $(".consultants-list").append(customerPageConsultants);
  $(".exploreAllConsultants").append(exploreConsultants);
  });
});

//Checking if the user is logged in
//Getting the user informations
firebase.auth().onAuthStateChanged(function(user) {
  var user = firebase.auth().currentUser;
  var uid = user.uid;
  console.log("UID:"+uid+"\nID:"+id);
    if (user) {
      //Geting the Current Consultant
      $(".consutlant-nav").append('<a class="navbar-brand" href="consultant.php?uid='+user.uid+'">eKonsult</a>');
      var userImg = storageRef.ref('profileImages/'+id+'-profileImage.png');
      userImg.getDownloadURL().then(function(url) {
        $(".profileBanner").append('<img  id="profileImg" src="'+url+'" alt="">');
      });
      var ref = dbRef.ref("consultant/"+id);
      ref.on("value", function(snapshot) {
        var consultant = snapshot.val();
        if (consultant.description != null) {
          $("#postedDesc").html(consultant.description);
        }
        if (consultant.job != null) {
          $("#jCompany").html(consultant.job.CompanyName);
          $("#jDuration").html(consultant.job.JobDate);
          $("#jLocation").html(consultant.job.Location);
          $("#jDuties").html(consultant.job.Description);
        }
        if (consultant.education != null) {
          $("#eCollege").html(consultant.education.InstituteName);
          $("#eDegree").html(consultant.education.Degree);
          $("#eDuration").html(consultant.education.StartDate + " / " +consultant.education.EndDate);
        }
        if (consultant.certificates != null) {
          $("#cName").html(consultant.certificates.Name);
          $("#cLevel").html(consultant.certificates.Level);
          $("#cDuration").html(consultant.certificates.StartDate + " / " +consultant.certificates.EndDate);
        }
        if (uid == id) {
          if (consultant.FirstName !=null) {
            $("#fullName").html("Welcome! <br>"+consultant.FirstName +" " +consultant.LastName);
          }
        }else{
          $("#fullName").html("Consultant! <br>"+consultant.FirstName +" " +consultant.LastName);
        }
      }, function (errorObject) {
        console.log("The read failed: " + errorObject.code);
      });
    }
    //Redirect to Home if not logged in
    else{
      if (window.location.pathname != "/consultantPro/index.php") {
        window.location.href = "/consultantPro/index.php";
      }
    }
  });



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
            var url = "/consultantPro/customer.php?uid="+user.uid;
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
                  var url = "/consultantPro/consultant.php?uid="+user.uid;
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


// -------------------------------------
// Consultant Information Submitting
// -------------------------------------
$(".descriptionSubmit").on('click',function(){
      var data = {
        description: $("#description").val()
      };
      var user = firebase.auth().currentUser;
      var desc = dbRef.ref('consultant/'+user.uid);
        desc.update(data).then(function(){
          console.log("User description successfully saved!");
        });
        $("#descriptionModal").hide();
        $("#desctiptionForm").submit();
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

// -------------------------------------
// Consultant Complete Profile
// -------------------------------------
//Image Uploding
$("#fileButton").on('change',function(e){
  var user = firebase.auth().currentUser;
   //Get file
   var file = e.target.files[0];
   var filename =user.uid+"-profileImage.png";
   //Storage ref
   var storageRef = firebase.storage().ref('profileImages/'+filename);

   //upload file
   var task = storageRef.put(file);

   task.on('state_changed', function(snapshot){
     // Observe state change events such as progress, pause, and resume
     // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
     var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
     console.log('Upload is ' + progress + '% done');
     switch (snapshot.state) {
       case firebase.storage.TaskState.PAUSED: // or 'paused'
         console.log('Upload is paused');
         break;
       case firebase.storage.TaskState.RUNNING: // or 'running'
         console.log('Upload is running');
         break;
     }
   }, function(error) {
     // Handle unsuccessful uploads
   }, function() {
     // Handle successful uploads on complete
     // For instance, get the download URL: https://firebasestorage.googleapis.com/...
     var downloadURL = task.snapshot.downloadURL;
   });
 });
//Info Updating
$(".profileSubmit").on('click',function(){
      var user = firebase.auth().currentUser;
      var data = {
        FirstName: $("#fname").val(),
        LastName: $("#lname").val(),
        Country: $("#country").val(),
        City: $("#city").val(),
        Street: $("#street").val(),
        ContactPhone: $("#contactNumber").val()
      }
      console.log("Profile Data Uploaded: "+data);
      var info = dbRef.ref('consultant/'+user.uid);
        info.update(data).then(function(){
          console.log("User profile successfully saved!");
        });
        $("#profileForm").submit();
        $("#completeProfileModal").hide();

});

});
