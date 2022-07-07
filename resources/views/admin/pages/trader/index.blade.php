@extends('admin.layouts.master')
@section('admintitle') List Traders @endsection
@section('content')

@include('admin.layouts.includes.alert')


<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Traders</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="trader-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Trader</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
           <th>Store Name</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Points</th>
          <th>Region</th>
          <th>Location</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\User::where('role','Merchant')->orderBy('id','desc')->get() as $index => $merchant)
        <tr>
            <td>{{$merchant->store_name}}</td>
            <td>{{$merchant->first_name}} {{$merchant->last_name}}</td>
          <td>{{$merchant->email}}</td>
          <td>{{$merchant->phone}}</td>
          <td>{{$merchant->points}}</td>
          <td> @php $region = \App\Models\Region::where('id',$merchant->region)->first(); @endphp {{$region->name}} </td>
           <td>{{$merchant->location}}</td>
        
          <td>
           
           <button type="button" value="{{$merchant->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
            <a href="/trader/offers/{{$merchant->id}}" class="btn bg-gradient-success btn-sm" >Offers</a>
             <a href="/trader/advertisments/{{$merchant->id}}" class="btn bg-gradient-secondary btn-sm" >Addvertasments</a>
              <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$merchant->id}})" data-toggle="modal"  data-target="#deletemodal">Delete</button>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Store Name</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Points</th>
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
            <input type="hidden" name="type"  value="merchant" />
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
          <h4 class="card-title" id="trader-title">Add Trader</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="trader-form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
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
                                <div class="col-6">
                                     <label>Store Name</label>
                                  <input type="text" class="form-control" value="" name="store_name" placeholder="Store Name" id="store-name">
                                </div>
                                <div class="col-6">
                                    <label>Commercial Register Number</label>
                                  <input type="text" class="form-control" value="" name="commercial_register_number" placeholder="Commercial Register Number" id="commercial-register-number">
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
                                    <label>Store Logo</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="store_logo"   id="file">
                                    <label class="custom-file-label" for="file">Store Logo</label>
                                  </div>
                                </div>
                                </div>
                              </div>
                               <div  class="row">
                                  <div class="col-6" id="profile-pic">
                                      
                                  </div>
                                  <div class="col-6" id="store-logo">
                                      
                                  </div>
                              </div>
                              
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="trader-btn">Edit</button>
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
        
        
        
      $('#trader-add').click(function(){

        var url = "{{ route('trader.store') }}";

          $('#trader-form').attr('action', url);
          $("#method").html('');
           $("#trader-title").html('Add Trader');
          $("#first-name").val('');
          $("#last-name").val('');
          $("#email").val('');
          $("#phone").val('');
          $("#store-name").val('');
          $("#commercial-register-number").val('');
          $("#region").html('Select');
          $('#region').attr('value', '');
          $("#profile-pic").html('');
          $("#store-logo").html('');
          $("#trader-btn").html('Submit');
    



      });


     $('.edit').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
       var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('trader.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

 
            var trader = result['trader'];
            
              var url2 = "{{ route('trader.update', ":id") }}";
      url2 = url2.replace(':id', trader.id);

          $('#trader-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
           $("#trader-title").html('Edit Trader');
            $("#trader-btn").html('Edit');
          $("#first-name").val(trader.first_name);
          $("#last-name").val(trader.last_name);
          $("#email").val(trader.email);
          $("#phone").val(trader.phone);
          $("#store-name").val(trader.store_name);
          $("#commercial-register-number").val(trader.commercial_register_number);
          $("#region").html(trader.region_name);
          $('#region').attr('value', trader.region);
          $("#profile-pic").html('<img src="'+trader.profile_pic+'" width="180" height="180" >');
          $("#store-logo").html('<img src="'+trader.store_logo+'" width="180" height="180" >');
    

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
