@extends('admin.layouts.master')
@section('admintitle') List Buyer @endsection
@section('content')

@include('admin.layouts.includes.alert')


<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Buyer</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="buyer-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Buyer</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Region</th>
          <th>Location</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\User::where('role','User')->orderBy('id','desc')->get() as $index => $merchant)
        <tr>
            <td>{{$merchant->first_name}} {{$merchant->last_name}}</td>
          <td>{{$merchant->email}}</td>
          <td>{{$merchant->phone}}</td>
          <td> @php $region = \App\Models\Region::where('id',$merchant->region)->first(); @endphp {{$region->name}} </td>
           <td>{{$merchant->location}}</td>
        
          <td>
           
           <button type="button" value="{{$merchant->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
          <!---  <a href="/trader/offers/{{$merchant->id}}" class="btn bg-gradient-success btn-sm" >Offers</a>
             <a href="/trader/advertisments/{{$merchant->id}}" class="btn bg-gradient-secondary btn-sm" >Addvertasments</a> -->
              <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$merchant->id}})" data-toggle="modal"  data-target="#deletemodal">Delete</button>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Region</th>
          <th>Location</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
</div>

<div id="deletemodal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body p-0" style=" border-radius: 12px;" >
                    <div class=" cardd border-0 p-sm-3 p-2 justify-content-center">
                        <div class="card-header pb-0 bg-white border-0 ">
                            <div class="row">
                                <div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>
                            </div>
                            <p class="font-weight-bold mb-2"> Are you sure you wanna delete this ?</p>
                            <p class="text-muted "> This Data will Not in your portal after Delete.</p>
                        </div>
                          <form  action="{{route('delete')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="delete_id" id="delete-id" value="" />
            <input type="hidden" name="type"  value="buyer" />
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0">
                            <div class="row justify-content-end no-gutters">
                                <div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button></div>
                                <div class="col-auto"><button type="submit" class="btn btn-danger px-4" >Delete</button></div>
                            </div>
                        </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <div class="modal fade" id="modal-xl">

    <div class="modal-dialog modal-lg">
      <div class="modal-content card card-primary">
        <div class="card-header" >
          <h4 class="card-title" id="buyer-title">Add Buyer</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="buyer-form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      @csrf
                      <div id="method"> </div>
                        <div class="card-body">
                            
                            <div class="form-group row">
                                
                                <div class="col-6">
                                     <label> First Name</label>
                                  <input type="text" class="form-control" value="" name="first_name" placeholder="First Name" id="first-name">
                                </div>
                                <div class="col-6">
                                    <label> Last Name</label>
                                  <input type="text" class="form-control" value="" name="last_name" placeholder="Last Name" id="last-name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-6">
                                     <label>Email</label>
                                  <input type="text" class="form-control" value="" name="email" placeholder="Email" id="email">
                                </div>
                                <div class="col-6">
                                    <label>Phone</label>
                                  <input type="text" class="form-control" value="" name="phone" placeholder="Phone" id="phone">
                                </div>
                              </div>
                               <div class="form-group row">
                                <div class="col-12">
                                     <label>Region</label>
                                     <select class="form-control"  name="region" >
                                         <option value='' id="region" ></option>
                                         @foreach(\App\Models\Region::orderBy('id','desc')->get() as $region)
                                         <option value="{{$region->id}}" >{{$region->name}}</option>
                                         @endforeach
                                     </select>
                                 
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <div class="col-6">
                                    <label>Profile Picture</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="profile_pic"   id="file">
                                    <label class="custom-file-label" for="file"> Profile Picture</label>
                                  </div>
                                </div>
                                </div>
                                <div class="col-6">
                                
                                </div>
                              </div>
                               <div  class="row">
                                  <div class="col-6" id="profile-pic">
                                      
                                  </div>
                              </div>
                              
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="buyer-btn">Edit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    

  <script>
  
     function deleteu(id){
      $("#delete-id").val(id);
  }
  
  
    $(document).ready(function(){
        
        
        
      $('#buyer-add').click(function(){

        var url = "{{ route('buyer.store') }}";

          $('#buyer-form').attr('action', url);
          $("#method").html('');
           $("#buyer-title").html('Add Buyer');
          $("#first-name").val('');
          $("#last-name").val('');
          $("#email").val('');
          $("#phone").val('');
          $("#region").html('Select');
          $('#region').attr('value', '');
          $("#profile-pic").html('');
          $("#buyer-btn").html('Submit');
    



      });


     $('.edit').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
       var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('buyer.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

 
            var buyer = result['buyer'];
            
              var url2 = "{{ route('buyer.update', ":id") }}";
      url2 = url2.replace(':id', buyer.id);

          $('#buyer-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
           $("#buyer-title").html('Edit Buyer');
            $("#buyer-btn").html('Edit');
          $("#first-name").val(buyer.first_name);
          $("#last-name").val(buyer.last_name);
          $("#email").val(buyer.email);
          $("#phone").val(buyer.phone);
          $("#region").html(buyer.region_name);
          $('#region').attr('value', buyer.region);
          $("#profile-pic").html('<img src="'+buyer.profile_pic+'" width="180" height="180" >');
    

        }

       })
      }
     });


    });

</script>


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange":  false, "searching": false,"autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


@endsection
