@include('admin.includes.header')

@include('admin.includes.sidebar')

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Car Details</h3>

        
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
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
              <table class="table table-striped table-advance table-hover">
                <a href="{{ url('admin/car') }}" class="btn btn-theme" >Add Car</a>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> ID</th>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th><i class="fa fa-bullhorn"></i> Model</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Price (Rs)</th>
                    <th><i class="fa fa-bullhorn"></i> Type</th>
                    <th><i class="fa fa-bullhorn"></i> Capacity (seats)</th>
                    <th><i class=" fa fa-edit"></i> Image</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($cars as $c)
                  <tr>
                    <td>{{ $c['id'] }}</td>
                    <td>{{ $c['car_name'] }}</td>
                    <td>{{ $c['car_model'] }}</td>
                    <td>{{ $c['car_description'] }}</td>
                    <td>{{ $c['price'] }}</td>
                    <td>{{ $c['type'] }}</td>
                    <td>{{ $c['capacity'] }}</td>
                    <td><img style = "height:120px; width:auto;' >" src = "{{ URL::to('/').'/uploads/'.$c['image'] }}"> </td>
                    <td>{{ $c['status'] }}</td>
                   


                   <!--  <td><span class="label label-info label-mini">Due</span></td> -->
                    <td>
                     <!--  <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                      <a href="{{ url('admin/edit/car/'.$c['id']) }}" style="float: left;" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>

                      <form action = "{{ url('admin/car/delete') }}" method = 'POST' style="float: right;">
                      <input type = 'hidden' name = 'id' value = "{{ $c['id'] }}" />
                      <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}' />
                      <input type = 'hidden' name = '_method' value = 'DELETE' />
                     <button style="height: 22px" class="btn btn-danger btn-xs fa fa-trash-o"></button>
                      </form>

                      <!-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a> -->
                    </td>
                  </tr>
                  @endforeach
               
                </tbody>
              </table>
              {{ $cars->links() }}
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

@include('admin.includes.footer')
