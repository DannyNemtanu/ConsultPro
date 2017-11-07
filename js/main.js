// $(document).ready(function(){
//
// // Initialize Firebase
//   var config = {
//     apiKey: "AIzaSyDlmanYSdMK6lhKBfB2k8MMTld-Flj93NY",
//     authDomain: "testing-252d2.firebaseapp.com",
//     databaseURL: "https://testing-252d2.firebaseio.com",
//     projectId: "testing-252d2",
//     storageBucket: "testing-252d2.appspot.com",
//     messagingSenderId: "373394527981"
//   };
//   firebase.initializeApp(config);
//
//
//   var user = firebase.database().ref('users/');
//   var ref = firebase.database().ref('users/')
//
//   // Submit Form
//   $('#submit-btn').click(function(e){
//     e.preventDefault();
//     console.log("Buttin Clicked!");
//     // Get Values
//     var username = $('#username').val();
//     var pass = $('#pass').val();
//     // Save Message
//     saveMessage(username,pass);
//   });
//
//   // save Message
//   function saveMessage(username,pass){
//     var newUser = user.push();
//     newUser.set({
//       username:username,
//       pass:pass
//     });
//   }
//
//   ref.on('value',getData,errData);
//
//   function getData(data){
//     console.log(data.val());
//     var name = data.val();
//     var key = Object.keys(name);
//     console.log(key);
//     for(var i = 0; i<key.length; i++){
//       var k = key[i];
//       var name = name[i].username;
//     }
//   }
//   function errData(err){
//     console.log('Error');
//     console.log(err);
//   }
//
//   // testing edit action
//   $('.edit img').click(function(){
//     var alert = $(this.class().val())
//     alert('Hello World!');
//   });
//
// });
