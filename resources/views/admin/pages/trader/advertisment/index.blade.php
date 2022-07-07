@extends('admin.layouts.master')
@section('admintitle') List Advertisments {{$merchant->first_name}} {{$merchant->last_name}} @endsection
@section('content')

@include('admin.layouts.includes.alert')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">{{$merchant->first_name}} {{$merchant->last_name}} Advertisments</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="add-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Advertisment</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Title</th>
          <th>Descripation</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($advertisment as $index => $advertisment)
        <tr>
          <td>{{$advertisment->title}}</td>
          <td>{{$advertisment->description}}</td>
          <td>
            
            <button type="button" value="{{$advertisment->id}}" class="btn bg-gradient-info btn-sm editt" data-toggle="modal" data-target="#modal-xl">Edit</button>
            <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$advertisment->id}})" data-toggle="modal" data-target="#deletemodal">Delete</button>
            
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Title</th>
          <th>Descripation</th>
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
            <input type="hidden" name="type"  value="advertisment" />
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
          <h4 class="card-title" id="add-title">Add Advertisment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="add-form" class="form-horizontal" action="{{route('advertisment.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div id="method"> </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Trader</label>
                                <div class="col-sm-9">
                               
                                     <input type="text" value="{{$merchant->first_name}} {{$merchant->last_name}}" class="form-control" readonly name="" >
                                     <input type="hidden" value="{{$merchant->id}}" class="form-control"  name="user_id" >
                                  
                                </div>
                              </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Title</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" required name="title" placeholder="Title" id="title">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" required name="description" placeholder="Description" id="description" ></textarea> 
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Image</label>
                                <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file[]" multiple  id="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                  </div>
                                </div>
                            </div>
                              </div>
                              <div id="image" class="row">
                                  
                              </div>
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
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










      $('#add-add').click(function(){

        var url2 = "{{ route('advertisment.store') }}";


        $("#add-title").html("Add Advertisment");
          $("#add-btn").html("Submit");
          $('#add-form').attr('action', url2);
          $("#method").html('');
          $("#title").val("");
          $("#description").val("");
          $("#image").html('');


      });

     $('.editt').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
     //  var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('advertisment.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        //data:{value:value},

        success:function(result)
        {

            var advertisment = result['advertisment'];
            var image = result['image'];

            var url2 = "{{ route('advertisment.update', ":id") }}";
      url2 = url2.replace(':id', advertisment.id);

          $("#add-title").html("Edit Advertisment");
          $("#add-btn").html("Edit");
          $('#add-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
          $("#title").val(advertisment.title);
          $("#description").val(advertisment.description);
          

var img = '';

      $('#image').empty()
img += '<label for="inputEmail3" class="col-sm-3 col-form-label"></label>';
  $.each(image,function(i,result){

      img +=  '<div class="form-group"><div class="col-sm-3"></div><div class="col-sm-9"> <img src="'+result.path+'" width="80" height="50" ></div> </div>';



  })
  console.log(img);
  $('#image').html(img);

        }

       });
      }
     });



    });
    </script>
    

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
