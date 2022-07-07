@extends('admin.layouts.master')
@section('admintitle') List Areas @endsection
@section('content')

@include('admin.layouts.includes.alert')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Areas</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="ar-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Area</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Area</th>
          <th>City</th>
          <th>State</th>
          <th>Region</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Area::join('cities','cities.id','=','areas.city_id')->join('states','states.id','=','cities.state_id')->join('regions','regions.id','=','states.region_id')->select('areas.*','cities.city_name','states.state_name','regions.name as region_name')->orderBy('areas.id','desc')->get() as $index => $area)
        <tr>
          <td>{{$area->area_name}}</td>
          <td>{{$area->city_name}}</td>
          <td>{{$area->state_name}}</td>
          <td>{{$area->region_name}}</td>
          <td>
            
            <button type="button" value="{{$area->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
            <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$area->id}})" data-toggle="modal" data-target="#deletemodal">Delete</button>
            
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
           <th>Area</th>
          <th>City</th>
          <th>State</th>
          <th>Region</th>
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
            <input type="hidden" name="type"  value="area" />
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
          <h4 class="card-title" id="ar-title">Add Area</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="ar-form" class="form-horizontal" action="{{route('area.store')}}" method="post" enctype="multipart/form-data">
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
                                 
                                  <select class="form-control selectstate" required name="state_id" >
                                    <option id="state" value="">Select</option>
                                    @foreach(\App\Models\State::orderBy('id','desc')->get() as $state)
                                    <option value="{{$state->id}}" >{{$state->state_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Cities</label>
                                <div class="col-sm-9">
                                 
                                  <select class="form-control selectstate" required name="city_id" >
                                    <option id="city" value="" >Select</option>
                                    @foreach(\App\Models\City::orderBy('id','desc')->get() as $city)
                                    <option value="{{$city->id}}" >{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                              </div>
                        
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Area</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" required name="area_name" placeholder="Area Name" id="area-name">
                                </div>
                              </div>
                                  
                             
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="ar-btn">Submit</button>
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










      $('#ar-add').click(function(){

        var url2 = "{{ route('area.store') }}";


        $("#ar-title").html("Add Area");
          $("#ar-btn").html("Submit");
          $('#ar-form').attr('action', url2);
          $("#method").html('');
          $("#area-name").val("");
          $("#state-name").html("");
          $("#state-name").attr("value",'');
          $("#region").html("Select");
          $("#region").attr("value",'');
          $("#city-name").html("");
          $("#city-name").attr("value",'');


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


  $('.selectstate').change(function(){

  if($(this).val() != '')
  {
  
   var value = $(this).val();
   var _token = $('input[name="_token"]').val();
  // alert(_token)
   var url = "{{ route('city.show', ":id") }}";
      url = url.replace(':id', value);
   $.ajax({
    url:url,
    method:"GET",
    data:{value:value, _token:"{{csrf_token()}}"},
    success:function(result)
    {


        var city = result['city'];
       // console.log(re);
      var option = '';

        $('#city').empty()

    $.each(city,function(i,result){

        option +=  '<option value='+result.id+'>'+result.city_name+'</option>';

        $('#city').html(option)

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
      var url = "{{ route('area.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

            var area = result['area'];
          

            var url2 = "{{ route('area.update', ":id") }}";
      url2 = url2.replace(':id', area.id);

          $("#ar-title").html("Edit Area");
          $("#ar-btn").html("Edit");
          $('#ar-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
           $("#area-name").val(area.area_name);
          $("#state-name").html(area.state_name);
          $("#state-name").attr("value",area.state_id);
          $("#region").html(area.region_name);
          $("#region").attr("value",area.region_id);
          $("#city-name").html(area.city_name);
          $("#city-name").attr("value",area.city_id);



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
