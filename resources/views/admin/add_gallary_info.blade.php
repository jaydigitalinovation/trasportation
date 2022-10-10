@extends('admin.layout.header')

@section('content')

  <div class="page my-4 title1" id="AddHomeModel">
        <div class="mt-5">
            <h4 class="mb-4">Details List</h4>
            <div class="detail">
            	@if(session()->has('error'))
					    <div class="alert alert-success">
					        {{session()->get('error')}}
					    </div>
					    @endif

              <div id="success_message"></div>
                <div class="form"> 

                  <!-- action="{{url('/admin/store_add_home_info')}}" -->

                  <ul id="saveform_errList"></ul>
                  <form method="post" enctype="multipart/form-data" id="addData" action="{{url('/admin/store_add_gallary_info')}}">  

                  	@csrf
                          <div class="part">
                              <div class="col-md-12 label">
                                 <label>Image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="file[]" class="image" multiple onchange="readURL(this);">
                                 @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                                 <img id="blah" src="#" alt="">
                               </div>   
                          </div>
                           

                          <button type="submit" class="glow-on-hover my-5">submit form</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>




@endsection

<style type="text/css">
  .add_info{
    padding: 1%;
    width: 130px;
    background-color: #00f0b5;
    border-radius: 50px;
    transition: all 0.85s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  .add_info:hover{
    width: 200px;
  }
</style>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

    $(document).on('click' , '.add_info' ,function(e){

      e.preventDefault();

      let formData=new FormData($('#addData')[0]);

      var image=$("input[type=file]")[0].files[0];

      formData.append('fieldImg', image);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $.ajax({

        type:"post",
        url:"/admin/store_add_home_info",
        data:formData,
        enctype: 'multipart/form-data',
        mimeType: 'multipart/form-data',
        contentType:false,
        processData:false,
        datatype: "json",
        success:function(response){

          if(response.status==400){

            $("#saveform_errList").html();
            $("#saveform_errList").addClass('alert alert-success');
            $.each(response.errors , function(key , err_values){
              $('#saveform_errList').append('<li>'+err_values+'</li>');
            });
          }else{

            window.location.href = "{{url('admin/home')}}";
          }
        }
      });
    });
  });
</script> -->