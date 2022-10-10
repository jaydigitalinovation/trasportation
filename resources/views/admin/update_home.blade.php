@extends('admin.layout.header')

@section('content')

  <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">Details List</h4>
            <div class="detail">
              @if(session()->has('error'))
              <div class="alert alert-success">
                  {{session()->get('error')}}
              </div>
              @endif
                <div class="form">      
                  <form method="post" action="{{url('/admin/store_update_home_data')}}/{{$id}}" enctype="multipart/form-data">  

                  	@csrf

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Tittle1</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="title1" name="title1" value="{{$title1}}">
                                  @if($errors->has('title1')) <p class="error_mes">{{ $errors->first('title1') }}</p> @endif
                              </div>   
                          </div> 

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Tittle2</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="title2" name="title2" value="{{$title2}}">
                                  @if($errors->has('title2')) <p class="error_mes">{{ $errors->first('title2') }}</p> @endif
                              </div>   
                          </div> 

                          <div class="part">
                              <div class="col-md-12 label">
                                 <label>Image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="image" onchange="readURL(this);" value="">
                                 <img id="blah" src="/uploads/{{$image}}" width="100px" height="100px" alt="">
                                 @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                                 <input type="hiddden" name="oldimage" value="{{$image}}">
                               </div>   
                          </div>

                          <button type="submit" class="add_info my-5 mx-auto">update</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>

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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(130);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>

















@endsection