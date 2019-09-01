@include('admin.includes.header')
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('admin.includes.sidebar')

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <!-- <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
                </div>
              </div> -->
              <!-- /col-md-4 -->
                @if(\Session::has('msg'))
  <div class = 'alert alert-success'>
    <p>{{ \Session::get('msg') }}</p>
  </div></br>
  @endif
              <div class="col-md-4 profile-text">
                <h3>Rudra Rajbanshi</h3>
                <h6>Main Administrator</h6>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                <br>
                <!-- <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p> -->
                <a data-toggle="tab" href="#edit" class="btn btn-danger">Change password</a>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="{{ asset('assets/lambo2.jfif') }}" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                    <button class="btn btn-theme02">Add</button>

                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
             
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                 



                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Change password</h4>
                        <form role="form" class="form-horizontal" action="{{ url('admin/change_password') }}" method="POST">
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Old Password</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " name="opassword" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">New Password</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " name="newpassword" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Confirm New Password</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " name="cnewpassword" class="form-control">
                            </div>
                          </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="email" value="admin@admin.com">
                            <input type="hidden" name="user_type" value="admin">
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Change</button>
                             <!--  <button class="btn btn-theme04" type="button">Cancel</button> -->
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    @include('admin.includes.footer')
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
</body>

</html>
