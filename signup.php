<?php include 'inc/header.php'; ?>


<style media="screen">
  footer{
    display: none;
  }
  .modal{
    background-color: #3787BF;
    display: inherit !important;
    color: #fff;
  }
  .modal .signup-modal-header h1{
    font-weight: bold;
    letter-spacing: 1px;
  }

  .modal .signup-modal-header p{
    font-weight: 100;
    letter-spacing: 1px;
  }

  .modal input{
    width: 100%;
    border: none;
    background-color: #29658D;
    border-radius: 5px;
    height: 50px;
    outline: none;
    padding: 10px;
  }
  .form-terms{
    padding: 20px 0px;
  }
  .form-terms a{
    color: #f5f5f5;
  }
  .form-footer{
    height: 100px;
    width: 100%;
    background-color: #fff;
  }
  .form-footer button{
    border: none;
  }
</style>

  <div class="row">
    <div class="modal col-md-5">
      <div class="row signup-modal-header">
        <div class="col-md-12">
          <h1>SIGN UP FOR eKONSULT</h1>
          <p>Create account, connect with consultants, find experts, get helped!</p>
        </div>
      </div>
      <form class="Form" action="index.html" method="post">
        <div class="row">
          <div class="col-md-12 username">
              <label for="username">Username</label>
              <input type="text" name="username" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <label for="fname">First Name</label>
              <input type="text" name="fname" value="">
          </div>
          <div class="col-md-6">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <label for="email">E-mail</label>
              <input type="text" name="email" value="">
          </div>
          <div class="col-md-6">
              <label for="pass">Password</label>
              <input type="text" name="pass" value="">
          </div>
        </div>
        <div class="row form-terms">
          <div class="col-md-12">
            <p>You agree to eKonsult <a href="#">Terms of Service and Privacy Policy.</a></p>
          </div>
        </div>

      </form>
    </div>
    <div class="row form-footer">
      <div class="col-md-6">
        <button type="button" name="signin" class="btn btn-primary btn-lg btn-block btn-signin">Sign in</button>
      </div>
      <div class="col-md-6">
        <button type="button" name="signin" class="btn btn-primary btn-lg btn-block btn-signin">Sign in</button>
      </div>
    </div>
  </div>




<?php include 'inc/footer.php'; ?>
