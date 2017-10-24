<!-- Header -->
<?php include 'inc/header.php'; ?>
<!-- Including Navigation -->
<?php include 'inc/navigation.php'; ?>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script>
      $(document).ready(function(){
        $("clientBtn").click(function(e){
            $("#clientForm").show();

            e.preventDefault();
          });
        });
  </script>
</head>

<!-- Body Starts Here -->
<body>
<button = "clientBtn">Register Me As A Client!</button>

  <form class="clientForm" name= "clientForm" method="post" style="display:none">
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


</body>


<!-- Attaching Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Body Ends -->
