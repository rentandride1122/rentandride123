<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('assets/admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/css/style-responsive.css') }}" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body style="background: url('../../public/assets/background1.jfif'); background-position: center;background-size: cover;">
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      @if(\Session::has('msg'))
  <div class = 'alert alert-success'>
    <p>{{ \Session::get('msg') }}</p>
  </div></br>
  @endif

  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{url('admin/login')}}" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <br>
        <div class="login-wrap">
          
          <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <input type="hidden" name="user_type" value="admin">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label class="checkbox">
            <!-- <input type="checkbox" value="remember-me"> Remember me -->
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
            <p><br></p>

          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <br>
          <!-- <input type="submit" class="btn btn-theme btn-block" name="SIGN IN" value="SIGN IN"> -->
          <!-- <hr> -->
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div> -->
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <!-- <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div> -->
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/admin/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset('assets/admin/lib/jquery.backstretch.min.js') }}"></script>
 <!--  <script>
    $.backstretch("../../public/assets/lambo1.jfif", {
      speed: 100,
      opacity: 2
    });
  </script> -->
</body>

</html>
