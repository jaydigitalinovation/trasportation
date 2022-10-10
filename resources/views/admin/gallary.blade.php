@extends('admin.layout.header')

@section('content')




 <div class="page title1" style="display: block;">
  <div id="saveform_errList"></div>
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4">Portfolio List</h4>
                  <button class="btn1"><a href="{{url('/admin/add_gallary_info')}}" style="color:black;">ADD</a></button>
              </div>
              <div class="detail table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>Image</th>    
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                      </thead>

                      @foreach($userdata as $key=>$u)
                      <tbody>

                          <tr class="data_{{$u->id}}">
                            <td>{{$key+1}}</td> 
                              <td>
                                <img src="/uploads/{{$u->image}}" width="60" height="60">
                              </td>
                              <td>
                                <button class="btn0 btn2"><a href="{{url('/admin/update_gallary_data')}}/{{$u->id}}"><i class="fal fa-pencil"></i></a></button>
                              </td>
                              <td>
                                <button class="btn3 btn0"><a href="{{url('/admin/delete_gallary_data')}}/{{$u->id}}"><i class="fal fa-trash-alt"></i></a></button>
                              </td>
                          </tr>
                      </tbody>

                      @endforeach
                  </table>
              </div>
          </div>
      </div>




@endsection


<script type="text/javascript">

  setTimeout(function() {$("#newhide").fadeOut(1500);},5000);

  
</script>


<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
 

  $(document).ready(function(){

  $(document).on('click' , '#delete_data', function(e) {

        e.preventDefault();
        var my_id = $(this).val();

          alert("Are you sure to delete whole data??");

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });

          $.ajax({

        type: "get",
        url: "/admin/delete_home_data/"+my_id,
        datatype: "json",
        success:function(response){

          if(response.status == 200)
          {


            $('#saveform_errList').text(response.message);
            $('#saveform_errList').addClass('alert alert-success');
            $('.data_'+my_id).hide();
         
            
          }else{

             alert("somthing went wrong!!");


          }


          }
      });
    });
  });
  
</script> -->
