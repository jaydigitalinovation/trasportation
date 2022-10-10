@extends('admin.layout.header')

@section('content')




 <div class="page title1" style="display: block;">

 
  <div id="saveform_errList"></div>
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4">Portfolio List</h4>
                  <button class="btn1"><a href="{{url('/admin/add_career_position_info')}}" style="color:black;">ADD</a></button>
              </div>
              <div class="detail table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                      </thead>

                      @foreach($userdata as $key=>$u)
                      <tbody>

                          <tr>
                            <td>{{$key+1}}</td> 
                            <td>{{$u->question}}</td>
                            <td>{!!$u->answer!!}</td>
                              <td>
                                <button class="glow-on-hover"><a href="{{url('/admin/update_career_position_data')}}/{{$u->id}}"><i class="fal fa-pencil"></i></a></button>
                              </td>
                              <td>
                                <button class="glow-on-hover"><a href="{{url('/admin/delete_career_position_data')}}/{{$u->id}}"><i class="fal fa-trash-alt"></i></a></button>
                              </td>
                          </tr>
                      </tbody>

                      @endforeach
                  </table>
              </div>
          </div>
      </div>




@endsection

<style type="text/css">
  .glow-on-hover{
    width: 50px!important;
  }
</style>

<script type="text/javascript">
  
        setTimeout(function() { $(".alert").fadeOut(1500); }, 5000);

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
