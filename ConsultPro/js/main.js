
$(document).ready(function(){
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDlmanYSdMK6lhKBfB2k8MMTld-Flj93NY",
    authDomain: "testing-252d2.firebaseapp.com",
    databaseURL: "https://testing-252d2.firebaseio.com",
    projectId: "testing-252d2",
    storageBucket: "testing-252d2.appspot.com",
    messagingSenderId: "373394527981"
  };
  if (firebase.initializeApp(config)) {
    console.log("App is Initialized! & Connected To Database!");
  };

  //create firebase references
  var Auth = firebase.auth();
  var dbRef = firebase.database();
  var contactsRef = dbRef.ref("customer");
  var auth = null;

  //Register
  $('#signup-form').on('submit', function (e) {
    e.preventDefault();
    var data = {
      email: $('#registerEmail').val(), //get the email from Form
    };
    var passwords = {
      password : $('#registerPass').val(), //get the pass from Form
      cPassword : $('#registerCPass').val(), //get the confirmPass from Form
    }
    if( data.email != '' && passwords.password != ''  && passwords.cPassword != '' ){
      if( passwords.password == passwords.cPassword  && passwords.password.length >  6){
        //create the user
        firebase.auth().createUserWithEmailAndPassword(data.email, passwords.password).then(function(user){
            //now user is needed to be logged in to save data
            $('.signup-modal').modal('toggle');
            console.log("Authenticated successfully:", user);
            auth = user;
            console.log("Signed In successfully!", user);

            //Check what type of sign up
            if ($("#customer-signup").click) {
              var usersRef = dbRef.ref('customer');
              alert("Customer Sign Up");
              //now saving the profile data
              usersRef
                .child(user.uid)
                .set(data)
                .then(function(){
                  console.log("User Information Saved:", user.uid);
                });
                var url = "http://proconsult:1111/customer.php";
                $(location).attr("href", url);
            }
            if ($("#consultant-signup").click) {
              alert("Consutltant Sign Up");
              var usersRef = dbRef.ref('customer');
              $(location).attr("href", url);
              //now saving the profile data
              usersRef
                .child(user.uid)
                .set(data)q
                .then(function(){
                  console.log("User Information Saved:", user.uid);
                });
                var url = "http://proconsult:1111/consultant.php";
            }
          }).catch(error => {$("#signup-error").text(error.message)});
    }else {
      //password and confirm password didn't match
      $("#signup-error").text("Passwords doesn't match!");
    }}
    else{
      $("#signup-error").text("Please fill all the fields!");
    }
});


// login
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
      var url = "http://proconsult:1111/customer.php";
      $(location).attr("href", url);
    }).catch(error => {alert(error.message)});
  }
  else{
    console.log("Please Fill The Blanks!");
  }
});

//Log out
$("#user-logout").on("click",function(e){
  e.preventDefault();
  firebase.auth().signOut().then(function(user) {
  // Sign-out successful.
  var url = "http://proconsult:1111/";
  $(location).attr("href", url);
}, function(error) {
  console.log("An error happened! : "+error);
});
});

//Checking if the user is logged in
//Getting the user informations
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    var displayName = user.displayName;
    var email = user.email;
    var emailVerified = user.emailVerified;
    var photoURL = user.photoURL;
    var isAnonymous = user.isAnonymous;
    var uid = user.uid;
    var providerData = user.providerData;
    console.log(email);
    $("#user-welcome").text("Welcome! " + email);
  } else {
    if (window.location != 'http://proconsult:1111/index.php') {
      window.location = 'http://proconsult:1111/index.php';
      alert("Please Login First!");
    }
  }
});
});
