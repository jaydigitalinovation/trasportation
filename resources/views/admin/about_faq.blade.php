@extends('admin.layout.header')

@section('content')


 <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               <a href=""><span>About details</span></a>
            </li>
         </ul>
      </div>


      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">About Choose Description</h4>
            <div class="btn1-main">
                <!-- <button class="btn1 delete-btn1">all delete</button> -->
                <!-- <button class="btn1"><a href="{{url('admin/add_about_faq_des_data')}}/0" style="color:white;">ADD</a></button> -->
            </div>
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                  <div class="sear-main">
                    <!--  <label><input type="search" class="form-control " placeholder="Find..."></label> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                    <!-- <th><input type="checkbox" name="" id="chkcheckAll"/></th> -->
                     <th>Sr.No</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Action</th>
                     <!-- <th>View Detail</th> -->
                  </tr>
               </thead>

               @foreach($about_faq_des as $key=>$ab)
                 <tbody class="case_record_{{$ab->id}}">
                    <tr>
                        <!-- <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$ab->id}}"/></td> -->
                        <td>{{$key+1}}</td>
                         <td>{{$ab->title}}</td>                     
                         <td> 
                          {!!$ab->description!!}
                        </td>
                        
                        <td>
                          <a class="icon__1" href="{{url('admin/add_about_faq_des_data')}}/{{$ab->id}}"><i class="fas fa-edit"></i></a>
                           <!-- <a class="icon__2" onclick="delete_case_record({{$ab->id}})"><i class="fas fa-trash-alt"></i></a> -->
                        </td>
                        <!-- <td class="clo">
                           <button class="clo btn0"><a href="{{url('/admin/view_blog_detail')}}/{{$ab->id}}">view</a></button>
                        </td> -->
                    </tr>
                 </tbody>
               @endforeach
              
            </table>

            

         
         </div>
      </div>


      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">About Choose details</h4>
            <div class="btn1-main">
                <!-- <button class="btn1 delete-btn1">all delete</button> -->
                <button class="btn1"><a href="{{url('admin/add_about_faq_data')}}/0" style="color:white;">ADD</a></button>
            </div>
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                  <div class="sear-main">
                    <!--  <label><input type="search" class="form-control " placeholder="Find..."></label> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                    <!-- <th><input type="checkbox" name="" id="chkcheckAll"/></th> -->
                     <th>Sr.No</th>
                     <th>Question</th>
                     <th>Answer</th>
                     <th>Action</th>
                     <!-- <th>View Detail</th> -->
                  </tr>
               </thead>

               @foreach($about_faq as $key=>$ab)
                 <tbody class="case_record_{{$ab->id}}">
                    <tr>
                        <!-- <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$ab->id}}"/></td> -->
                        <td>{{$key+1}}</td>
                                              
                       <td>{{$ab->question}}</td>

                         <td> 
                          {!!$ab->answer!!}
                        </td>
                        
                        <td>
                          <a class="icon__1" href="{{url('admin/add_about_faq_data')}}/{{$ab->id}}"><i class="fas fa-edit"></i></a>
                           <a class="icon__2" onclick="delete_case_record({{$ab->id}})"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <!-- <td class="clo">
                           <button class="clo btn0"><a href="{{url('/admin/view_blog_detail')}}/{{$ab->id}}">view</a></button>
                        </td> -->
                    </tr>
                 </tbody>
               @endforeach
              
            </table>

            

         
         </div>
      </div>

                  

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
       <script type="text/javascript">

         $(function() {

                   setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 5000)

              });


         function delete_case_record($id){


             swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                 
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {

                    var BASE_URL = "{{ url('/') }}";

                    var id = $id;

                          $.ajax({

                                url:BASE_URL+'/admin/delete_about_faq/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(response){
        
                                     $('.case_record_'+id).hide();
         
   
                                     },
 
                            error: function(response) {

                                     alert('error');
          
                                },        
          
                           });



                    
                    } else {
                     
                    }
                  });
         
          

             } 


      
       $(function(e) {

               $('#chkcheckAll').click(function(){

                   $(".checkBoxClass").prop('checked', $(this).prop('checked'));

               });

              $('.delete-btn1').click(function(e){

                 $.ajaxSetup({
                   headers: {
                     'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                    });


                   var BASE_URL = "{{ url('/') }}";

                      e.preventDefault();    

                      var allids=[];

                      $("input:checkbox[name=ids]:checked").each(function(){

                         allids.push($(this).val());

                        
                      });


                 if(allids !=''){


                 swal({
                         title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this data!",
                          /*  icon: "warning",*/
                            buttons: true,
                            dangerMode: true,
                              })
                          .then((willDelete) => {
                            if (willDelete) {


                                    $.ajax({

                                      url:BASE_URL+'/admin/delete_all_about_faq_detail',
                                      type:'post',
                                      data:{

                                        ids:allids,
                                         _token: '{!! csrf_token() !!}',
                                    

                                      },

                                      success:function(response){


                                          if(response.status==200){
                                      
                                            $.each(allids,function(key,val){
                  
                                            $('.about_faq_detail_'+val).hide();

                                      
                                            });
                                            
                                                                        
                                          }
                                          else{
                                              alert(response.message)
                                          }

                                      }

                                    });

                             
                                } else {
                            
                              }
                          });


                          }

                    });
                

               });





      </script>
      <style type="text/css">

        #myModal{

          top: 100px;
          text-align: center;
        }
        

      </style>

      @endsection