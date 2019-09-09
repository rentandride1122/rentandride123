@include('admin.includes.header')

@include('admin.includes.sidebar')

<!--main content start-->
    <section id="main-content">
      <section class="wrapper" style="height: 600px">
        <h3><i class="fa fa-angle-right"></i>User Details</h3>
       
          Total: {{  $count_users->count() }}
        
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

               
              <!--   <a href="{{ url('admin/car') }}" class="btn btn-theme" >Add Car</a> -->

                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> ID</th>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th><i class="fa fa-bullhorn"></i> Email</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($users as $u)
                  <tr>
                    <td>{{ $u['id'] }}</td>
                    <td>{{ $u['name'] }}</td>
                    <td>{{ $u['email'] }}</td>
                    <td>
                    <form action = "{{ url('admin/user/delete') }}" method = 'POST'>
                      <input type = 'hidden' name = 'id' value = "{{ $u['id'] }}" />
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
              {{ $users->links() }}
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
