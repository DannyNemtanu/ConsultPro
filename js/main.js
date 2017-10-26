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

  firebase.initializeApp(config);
  var messagesRef = firebase.database().ref();

  // Submit Form
  $('#submit-btn').click(function(e){
    e.preventDefault();
    console.log("Buttin Clicked!");
    // Get Values
    var username = $('#username').val();
    var pass = $('#pass').val();
    console.log(username);
    console.log(pass);
    // Save Message
    saveMessage(username,pass);
  });

  // save Message
  function saveMessage(username,pass){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      username:username,
      pass:pass
    });
  }
});