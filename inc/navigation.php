<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/consultantPro/index.php">eKonsult</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><button href="#" type="button" class="btn btn-primary nav-sign" data-toggle="modal" data-target=".signup-choice" >Sign Up</button></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Alert For Users -->
<div class="modal fade" id="alert-modal" role="dialog">

</div>
<!-- Choice for Sign Up -->
<div class="modal fade signup-modal bs-example-modal-sm signup-choice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg nav-sign-modal" role="document">
        <div id="choice-box">
          <div class="col-md-12">
            <h1>Sign up as...</h1>
            <p style="color:red" id="signup-error"></p>
            <div class="row">
              <div class="col-md-6">
                <button href="#" type="button" class="btn btn-lg btn-success nav-sign" data-toggle="modal" data-target=".signup-customer" >Customer</button>
              </div>
              <div class="col-md-6">
                <button href="#" type="button" class="btn btn-lg btn-warning nav-sign" data-toggle="modal" data-target=".signup-consultant" >Consultant</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
<!-- Sign Up Modal For Customer -->
<div class="modal fade signup-modal bs-example-modal-sm signup-customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg nav-sign-modal" role="document">
      <form method="post" action="customer.php" autocomplete="on" id="signup-customer">
        <div id="login-box">
          <div class="left">
            <h1>Sign up dear customer !</h1>
            <p style="color:red" id="signup-error"></p>
            <input type="text" id="registerCustomerEmail" name="email" placeholder="E-mail"/>
            <input type="password" id="registerCustomerPass" name="pass" placeholder="Password"/>
            <input type="password" id="registerCustomerCPass" name="cpass" placeholder="Retype password"/>
            <div class="row">
              <div class="col-md-6">
                <input id="customer-signup" type="submit" name="customer_signup" value="Register" />
              </div>
            </div>

          </div>

          <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
          </div>
          <div class="or">OR</div>
        </div>
      </form>
    </div>
</div>
<!-- Sign Up Modal For Customer -->
<div class="modal fade signup-modal bs-example-modal-sm signup-consultant" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg nav-sign-modal" role="document">
      <form method="post" action="consultant.php" autocomplete="on" id="signup-consultant">
        <div id="login-box">
          <div class="left">
            <h1>Sign up dear consultant !</h1>
            <p style="color:red" id="signup-error"></p>
            <input type="text" id="registerConsultantEmail" name="email" placeholder="E-mail"/>
            <input type="password" id="registerConsultantPass" name="pass" placeholder="Password"/>
            <input type="password" id="registerConsultantCPass" name="cpass" placeholder="Retype password"/>
            <div class="row">
              <div class="col-md-6">
                <input id="consultant-signup" type="submit" name="consultant_signup" value="Register" />
              </div>
            </div>
          </div>

          <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
          </div>
          <div class="or">OR</div>
        </div>
      </form>
    </div>
</div>
<!-- Customer Styles For Current Modals -->
<style media="screen">
  #login-box input:focus {
  outline: none;
  }

  #login-box,#choice-box {
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 400px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  }
  #choice-box{
    width: 300px;
    height: 200px;
  }

  #login-box .left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  }
  #login-box #left-first-child{
    margin-top: 50px;
  }

  #login-box h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
  }

  #login-box input[type="text"],
  #login-box input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
  }

  #login-box input[type="text"]:focus,
  #login-box input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
  }

  #login-box input[type="submit"] {
  margin-left: -10px;
  margin-top: 28px;
  padding: 10px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
  }

  #login-box input[type="submit"]:hover,
  #login-box input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
  }

  #login-box input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
  }

  #login-box .or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
  }

  #login-box .right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://cdn.pixabay.com/photo/2015/02/02/11/08/office-620817_1280.jpg');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
  }

  #login-box .right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
  }

  #login-box button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
  }

  #login-box button.social-signin:hover,
  #login-box button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
  }

  #login-box button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
  }

  #login-box button.social-signin.facebook {
  background: #32508E;
  }

  #login-box button.social-signin.twitter {
  background: #55ACEE;
  }

  #login-box button.social-signin.google {
  background: #DD4B39;
  }
</style>
