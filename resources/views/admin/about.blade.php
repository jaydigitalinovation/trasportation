@extends('admin.layout.header')

@section('content')



@if(session()->has('error'))
              <div class="alert alert-success">
                  {{session()->get('error')}}
              </div>
              @endif
 <div class="page title1" style="display: block;">
  <div id="saveform_errList"></div>
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4">Portfolio List</h4>
                  <button class="btn1"><a href="{{url('/admin/add_home_info')}}" style="color:black;">ADD</a></button>
              </div>
              <div class="detail table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>State_name</th>
                            <th>Country_name</th>
                            <th>City_name</th>    
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                      </thead>

                      @foreach($userdata as $key=>$u)
                      <tbody>

                          <tr>
                            <td>{{$key+1}}</td> 
                              <td>{{$u->state_name}}</td>
                              <td>{{$u->country_name}}</td>
                              <td>{{$u->city_name}}</td>
                              
                          </tr>
                      </tbody>

                      @endforeach
                  </table>
              </div>
          </div>
      </div>




@endsection