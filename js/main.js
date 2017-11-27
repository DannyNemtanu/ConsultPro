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
  var usersRef = dbRef.ref('users');
  var auth = null;

  //Register
  $('#signup-form').on('submit', function (e) {
    e.preventDefault();
    $('#signup-form').modal('hide');
    var data = {
      username: $('registerUsername').val(), //get username from Form
      email: $('#registerEmail').val(), //get the email from Form
    };
    var passwords = {
      password : $('#registerPass').val(), //get the pass from Form
      cPassword : $('#registerCPass').val(), //get the confirmPass from Form
    }
    if( data.email != '' && passwords.password != ''  && passwords.cPassword != '' ){
      if( passwords.password == passwords.cPassword ){
        //create the user

        firebase.auth().createUserWithEmailAndPassword(data.email, passwords.password).then(function(user){
            //now user is needed to be logged in to save data
            console.log("Authenticated successfully with payload:", user);
            auth = user;
            //now saving the profile data
            usersRef
              .child(user.uid)
              .set(data)
              .then(function(){
                console.log("User Information Saved:", user.uid);
              });
            });
          }else {
            //password and confirm password didn't match
            alert("Passwords didn't match!");
          }
        }
      });




});
