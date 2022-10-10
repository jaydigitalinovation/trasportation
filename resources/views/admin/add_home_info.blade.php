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
                  <form method="post" enctype="multipart/form-data" id="addData">  

                  	@csrf

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>title1</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="title1" name="title1" value="" class="title1">
                                  @if($errors->has('title1')) <p class="error_mes">{{ $errors->first('title1') }}</p> @endif
                              </div>   
                          </div>
                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>title2</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="title2" name="title2" value="" class="title2">
                                  @if($errors->has('title2')) <p class="error_mes">{{ $errors->first('title2') }}</p> @endif
                              </div>   
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                 <label>Image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="image" class="image" onchange="readURL(this);">
                                 @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                                 <img id="blah" src="#" alt="">
                               </div>   
                          </div>
                           

                          <button type="submit" class="add_info my-5 mx-auto text-success">submit</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>




@endsection

<style type="text/css">
  .add_info{
    position: relative;
    z-index: 11;
    width: 95px;
    padding: 0.5% 5%;
    font-weight: 900;
    font-size: 25px;
  }

  .add_info:before{
    content: '';
    position: absolute;
    width: 50%;
    height: 100%;
    top: -2rem;
    left: 3rem;
    background-color: #ff191970;
    transform: skewX(30deg);
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    z-index: -1;
  }
  .add_info:hover:before{
    top: 0;
    transform: skewx(0deg);
  }
  .add_info:after{
    content: '';
    position: absolute;
    width: 50%;
    height: 100%;
    top: 2rem;
    left: 8rem;
    background-color: #ffff00;
    transform: skewX(30deg);
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    z-index: -1;
  }
  .add_info:hover:after{
    top: 0;
    transform: skewx(0deg);
  }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</script>