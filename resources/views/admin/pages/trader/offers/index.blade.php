@extends('admin.layouts.master')
@section('admintitle') List Offers @endsection
@section('content')

@include('admin.layouts.includes.alert')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">{{$merchant->first_name}} {{$merchant->last_name}} Offers</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" id="offer-add" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Offer</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Discount</th>
          <th>Points</th>
          <th>Descripation</th>
          <th>QR Code</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($offer as $index => $offer)
        <tr>
          <td>{{$offer->discount}}</td>
          <td>{{$offer->points}}</td>
          <td>{{$offer->description}}</td>
          <td> <img src="{{$offer->qr_code}}" width="100" height="100" /> </td>
          <td>
            
            <button type="button" value="{{$offer->id}}" class="btn bg-gradient-info btn-sm edit" data-toggle="modal" data-target="#modal-xl">Edit</button>
            <button type="button" class="btn bg-gradient-danger btn-sm" onclick="deleteu({{$offer->id}})" data-toggle="modal" data-target="#deletemodal">Delete</button>
            
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Discount</th>
          <th>Points</th>
          <th>Descripation</th>
          <th>QR Code</th>
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
            <input type="hidden" name="type"  value="offer" />
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
          <h4 class="card-title" id="offer-title">Add Offer</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="offer-form" class="form-horizontal" action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
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
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Discount</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" required name="discount" placeholder="Discount" id="discount">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Points</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" required name="points" placeholder="Points" id="points">
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
            <button type="submit" class="btn btn-primary" id="offer-btn">Submit</button>
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










      $('#offer-add').click(function(){

        var url2 = "{{ route('offer.store') }}";


        $("#offer-title").html("Add Offer");
          $("#offer-btn").html("Submit");
          $('#offer-form').attr('action', url2);
          $("#method").html('');
          $("#discount").val("");
          $("#description").val("");
          $("#points").val("");
          $("#image").html('');


      });

     $('.edit').click(function(){

      if($(this).val() != '')
      {

       var value = $(this).val();
     //  alert(value)
       var _token = $('input[name="_token"]').val();
      // alert(_token)
      var url = "{{ route('offer.edit', ":id") }}";
      url = url.replace(':id', value);
       $.ajax({
        url:url,
        method:"GET",
        data:{value:value, _token:"{{csrf_token()}}"},

        success:function(result)
        {

            var offer = result['offer'];
            var image = result['image'];

            var url2 = "{{ route('offer.update', ":id") }}";
      url2 = url2.replace(':id', offer.id);

          $("#offer-title").html("Edit Offer");
          $("#offer-btn").html("Edit");
          $('#offer-form').attr('action', url2);
          $("#method").html('<input type="hidden" name="_method" value="PUT">');
          $("#discount").val(offer.discount);
          $("#description").val(offer.description);
          $("#points").val(offer.points);
         // $("#image").html('<div class="form-group row"><div class="col-sm-3"></div><div class="col-sm-9"> <img src="" width="80" height="50" ></div> </div>');

var img = '';

      $('#image').empty()
img += '<label for="inputEmail3" class="col-sm-3 col-form-label"></label>';
  $.each(image,function(i,result){

      img +=  '<div class="form-group"><div class="col-sm-3"></div><div class="col-sm-9"> <img src="'+result.path+'" width="80" height="50" ></div> </div>';



  })
  console.log(img);
  $('#image').html(img)

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
