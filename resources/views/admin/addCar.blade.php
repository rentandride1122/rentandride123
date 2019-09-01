@include('admin.includes.header')

@include('admin.includes.sidebar')

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Add Car</h3>
        
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
           
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Price</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="text" name="price" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="curl" class="control-label col-lg-2">Image Upload</label>
                    <div class="col-lg-10">
                       <span class="btn btn-theme02 btn-file">
                        <!--   <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span> -->
                      
                        <input type="file" class="fileupload-new " />
                        </span>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="description" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <!-- <button class="btn btn-theme04" type="button">Cancel</button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->


@include('admin.includes.footer')