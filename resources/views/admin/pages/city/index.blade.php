@extends('admin.layouts.master')
@section('admintitle') List Cities @endsection
@section('content')

@include('admin.layouts.includes.alert')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Cities</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="ct-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add City</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
        <th>City</th>
         <th>Region</th>
          <th>State</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          {{--   --}}
            @foreach(\App\Models\City::join('states','states.id','=','cities.state_id')->join('regions','regions.id','=','states.region_id')->select('cities.*','states.state_name','regions.name as region_name')->orderBy('cities.id','desc')->get() as $index)
        <tr>
          <td>{{$index->city_name}}</td>
          <td>{{$index->region_name}}</td>
          <td>{{$index->state_name}}</td>
          <td>
            
            <button type="button" value="{{$index->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
            <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$index->id}})" data-toggle="modal" data-target="#deletemodal">Delete</button>
            
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr> 
          <th>City</th>
          <th>Region</th>
          <th>State</th>
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
            <input type="hidden" name="type"  value="city" />
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

    <div class="modal-dialog ">
      <div class="modal-content card card-primary">
        <div class="card-header" >
          <h4 class="card-title" id="ct-title">Add City</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="ct-form" class="form-horizontal" action="{{route('city.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div id="method"> </div>
                        <div class="card-body">
                        
                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Regions</label>
                                <div class="col-sm-9">
                                 
                                  <select class="form-control selectregion" required name="region_id" >
                                      <option id="region" value="" >Select</option>
                                      @foreach(\App\Models\Region::orderBy('id','desc')->get() as $region)
                                      <option value="{{$region->id}}" >{{$region->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">States</label>
                                <div class="col-sm-9">
                                 
                                  <select class="form-control selectregion" required name="state_id" >
                                    <option id="state" value="">Select</option>
                                    @foreach(\App\Models\State::orderBy('id','desc')->get() as $state)
                                    <option value="{{$state->id}}" >{{$state->state_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                              </div>
                        
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> City</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" required name="city_name" placeholder="City Name" id="city-name">
                                </div>
                              </div>
                                  
                             
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="ct-btn">Submit</button>
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


        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })

      $('#ct-add').click(function(){

        var url2 = "{{ route('city.store') }}";


        $("#ct-title").html("Add City");
          $("#ct-btn").html("Submit");
          $('#ct-form').attr('action', url2);
          $("#method").html('');
          $("#city-name").val("");
          $("#state-name").html("Select");
          $("#state-name").attr("value",'');
          $("#region").html("Select");
          $("#region").attr("value",'');


      });


 $('.selectregion').change(function(){

  if($(this).val() != '')
  {
  
   var value = $(this).val();
   var _token = $('input[name="_token"]').val();
  // alert(_token)
   var url = "{{ route('state.show', ":id") }}";
      url = url.replace(':id', value);
   $.ajax({
    url:url,
    method:"GET",
    data:{value:value, _token:"{{csrf_token()}}"},
    success:function(result)
    {


        var state = result['state'];
       // console.log(re);
      var option = '';

        $('#state').empty()

    $.each(state,function(i,result){

        option +=  '<option value='+result.id+'>'+result.state_name+'</option>';

        $('#state').html(option)

    })
    }

   })
  }
 });




     $('.edit').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
       var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('city.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

            var city = result['city'];
          

            var url2 = "{{ route('city.update', ":id") }}";
      url2 = url2.replace(':id', city.id);

          $("#ct-title").html("Edit City");
          $("#ct-btn").html("Edit");
          $('#ct-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
          $("#city-name").val(city.city_name);
          $("#region").html(city.region_name);
          $("#region").attr('value',city.region_id);
          $("#state-name").html(city.state_name);
          $("#state-name").attr('value',city.state_id);



        }

       })
      }
     });



    });
    </script>
    


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
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
