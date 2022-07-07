@extends('admin.layouts.master')
@section('admintitle') List Branch @endsection
@section('content')

@include('admin.layouts.includes.alert')


<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Branch</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="branch-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Branch</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Branch Name</th>
          <th>Manager Email</th>
          <th>Manager Phone #</th>
          <th>Branch Address</th>
          <th>Branch Latitude</th>
          <th>Branch Longitude</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Branches::where('merchant_id',auth()->user()->id)->orderBy('id','desc')->get() as $index => $branch)
        <tr>
          
            <td>{{$branch->branch_name}}</td>
          <td>{{$branch->branch_manager_email}}</td>
          <td>{{$branch->branch_manager_phone}}</td>
          <td>{{$branch->branch_address}}</td>
          <td>{{$branch->branch_lat}}</td>
          {{-- <td> @php $region = \App\Models\Region::where('id',$merchant->region)->first(); @endphp {{$region->name}} </td> --}}
           <td>{{$branch->branch_lng}}</td>
        
          <td>
           
           <button type="button" value="{{$branch->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
  
              <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$branch->id}})" data-toggle="modal"  data-target="#deletemodal">Delete</button>
              
            </td>

        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Branch Name</th>
          <th>Manager Email</th>
          <th>Manager Phone #</th>
          <th>Branch Address</th>
          <th>Branch Latitude</th>
          <th>Branch Longitude</th>
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
                          <form  action="{{route('delete')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="delete_id" id="delete-id" value="" />
                            <input type="hidden" name="type"  value="branch" />
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
          <h4 class="card-title" id="branch-title">Add Branch</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="branch-form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      @csrf
                      <div id="method"> </div>
                        <div class="card-body">
                            
                            <div class="form-group row">
                                
                                <div class="col-6">
                                     <label> Branch Name</label>
                                  <input type="text" class="form-control" value="" name="branch_name" placeholder="Branch Name" id="branch_name">
                                </div>
                                <div class="col-6">
                                    <label> Branch Manager Email</label>
                                  <input type="text" class="form-control" value="" name="branch_manager_email" placeholder="Manager Email" id="branch_manager_email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-6">
                                     <label>Branch Manager Number</label>
                                  <input type="text" class="form-control" value="" name="branch_manager_phone" placeholder="Manager Number" id="branch_manager_phone">
                                </div>
                                <div class="col-6">
                                    <label>Branch Address</label>
                                  <input type="text" class="form-control" value="" name="branch_address" placeholder="Branch Address" id="branch_address">
                                </div>
                                <div class="col-6">
                                  <label>Branch Latitude</label>
                                <input type="text" class="form-control" value="" name="branch_lat" placeholder="Branch Latitude" id="branch_lat">
                              </div>
                              <div class="col-6">
                                <label>Branch Longitude</label>
                                <input type="text" class="form-control" value="" name="branch_lng" placeholder="Branch Longitude" id="branch_lng">
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
            <button type="submit" class="btn btn-primary" id="branch-btn">Edit</button>
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
        
        
        
      $('#branch-add').click(function(){

        var url = "{{ route('branch.store') }}";

          $('#branch-form').attr('action', url);
          $("#method").html('');
           $("#branch-title").html('Add Branch');
          $("#branch_name").val('');
          $("#branch_manager_email").val('');
          $("#branch_manager_phone").val('');
          $("#branch_address").val('');
          $("#branch_lat").val('');
          $("#branch_lng").val('');
          $("#branch-btn").html('Submit');

      });


     $('.edit').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
       var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('branch.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

 
            var branch = result['branch'];
            
              var url2 = "{{ route('branch.update', ":id") }}";
      url2 = url2.replace(':id', branch.id);

          $('#branch-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
           $("#branch-title").html('Edit Branch');
            $("#branch-btn").html('Edit');
          $("#branch_name").val(branch.branch_name);
          $("#branch_manager_email").val(branch.branch_manager_email);
          $("#branch_manager_phone").val(branch.branch_manager_phone);
          $("#branch_address").val(branch.branch_address);
          $("#branch_lat").val(branch.branch_lat);
          $("#branch_lng").val(branch.branch_lng);
    

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
