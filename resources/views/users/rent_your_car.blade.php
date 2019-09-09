@include('users.includes.header')

<!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Rent your car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                	    @if(\Session::has('msg'))
          <div class = 'alert alert-success'>
            <p>{{ \Session::get('msg') }}</p>
          </div></br>
          @endif
          @if($errors->any())
          <div class = 'alert alert-danger'>
            <ul>
              @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
              @endforeach
            </ul>
          </div>
          @endif
                    
                    	<form action="{{ url('user/rent_your_car') }}" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
						    <label class="control-label col-sm-2">Car Name:</label>
						    <div class="col-sm-10">
						      <input type="text" name="name" class="form-control" placeholder="Enter car name" required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2" >Car Model:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="model" placeholder="Enter car model" required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2">Price:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="price" placeholder="Enter Price" required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2">Capacity (seats):</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" name="capacity" placeholder="Enter capacity" required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2">Fuel Type:</label>
						    <div class="col-sm-10">
						      <select name="fuel_type" class="form-control">
						      	<option>petrol</option>
						      	<option>diseal</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2">Air Condition:</label>
						    <div class="col-sm-10">
						       <div class="form-control">
			                     <input type="radio" name="ac" value="yes">Yes
			                     <input type="radio" name="ac" value="no" checked="">No
                     			</div>
						    </div>
						  </div>
						   <div class="form-group">
			                    <label for="curl" class="control-label col-lg-2">Image Upload</label>
			                    <div class="col-lg-10">
			                       <span class="btn btn-theme02 btn-file">
			                        <!--   <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span> -->
			                      
			                        <input type="file" class="fileupload-new " name="image" required="" />
			                        </span>
			                    </div>
			                  </div>
			                  <div class="form-group ">
			                    <label for="ccomment" class="control-label col-lg-2">Description</label>
			                    <div class="col-lg-10">
			                      <textarea class="form-control " name="description" required></textarea>
			                    </div>
			                  </div>

			                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  			  <input type="hidden" name="type" value="private">

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <input type="submit" class="btn btn-primary" value="Rent">
						    </div>
						</div>
						</form>

                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->




@include('users.includes.footer')