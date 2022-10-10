@extends('admin.layout.header')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">

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
                  <form method="post" enctype="multipart/form-data" id="addData" action="{{url('/admin/store_add_service_info')}}">  

                  	@csrf

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Title</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="title" name="title" value="" class="title">
                                  @if($errors->has('title')) <p class="error_mes">{{ $errors->first('title') }}</p> @endif
                              </div>   
                          </div>
                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>image</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="image" name="image" value="" class="image">
                                  @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                              </div>   
                          </div>
                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>description</label>
                              </div>
                              <div class="col-md-12 data">
                                  <textarea name="description" id="summernote" type="text"></textarea>
                                  @if($errors->has('description')) <p class="error_mes">{{ $errors->first('description') }}</p> @endif
                              </div>   
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>sub_title</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="sub_title" name="sub_title" value="" class="sub_title">
                                  @if($errors->has('sub_title')) <p class="error_mes">{{ $errors->first('sub_title') }}</p> @endif
                              </div>   
                          </div>
                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>sub_image</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="sub_image" name="sub_image" value="" class="sub_image">
                                  @if($errors->has('sub_image')) <p class="error_mes">{{ $errors->first('sub_image') }}</p> @endif
                              </div>   
                          </div>
                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>sub_description</label>
                              </div>
                              <div class="col-md-12 data">
                                  <textarea name="sub_description" id="summernote1" type="text"></textarea>
                                  @if($errors->has('sub_description')) <p class="error_mes">{{ $errors->first('sub_description') }}</p> @endif
                              </div>   
                          </div>

                          <button type="submit" class="glow-on-hover my-5">submit form</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script type="text/javascript">


  $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

  $('#summernote1').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

  
</script>




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