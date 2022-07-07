@extends('admin.layouts.master')
@section('admintitle') List Offers @endsection
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                
      <h3 class="card-title">List Offers</h3>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                
            <button type="button" class="btn bg-gradient-primary btn-sm float-right" data-toggle="modal" data-target="#modal-xl">Add Offer</button>
            </div>
        </div>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Marchant Name</th>
          <th>Discount</th>
          <th>Points</th>
          <th>Descripation</th>
          <th>QR Code</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
          <td> <img src="https://www.investopedia.com/thmb/ZG1jKEKttKbiHi0EkM8yJCJp6TU=/1148x1148/filters:no_upscale():max_bytes(150000):strip_icc()/qr-code-bc94057f452f4806af70fd34540f72ad.png" width="100" height="100" /> </td>
          <td>
            <button type="button" class="btn bg-gradient-danger btn-sm">Delete</button>
            <button type="button" class="btn bg-gradient-info btn-sm">Edit</button>
            <button type="button" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#modal-xl">Assign</button>
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Marchant Name</th>
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

<div class="modal fade" id="deletemodal">

    <div class="modal-dialog ">
      <div class="modal-content card card-danger">
        <div class="card-header" >
          <h4 class="card-title">Are You Sure You Want To Delete This?</h4>

        </div>
        <form  action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="delete_id" id="delete-id" value="" />
            <input type="hidden" name="type"  value="product" />

        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-danger">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

        </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>



  <div class="modal fade" id="modal-xl">

    <div class="modal-dialog ">
      <div class="modal-content card card-primary">
        <div class="card-header" >
          <h4 class="card-title" id="pro-title">Add Offer</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-12">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="pro-form" class="form-horizontal" action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div id="method"> </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"> Traders</label>
                                <div class="col-sm-9">
                                 <select class="form-control select"   name="marchant_id" required>
                                     <option id="pro-cat"  value="">Select</option>
                                     @foreach (\App\Models\User::where('role','Marchant')->orderBy('id', 'desc')->get() as $index => $marchant)
                                     <option value="{{$marchant->id}}">{{$marchant->first_name}} {{$marchant->last_name}}</option>
                                     @endforeach
                                 </select>
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
                              <div id="image">
                              </div>
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer -->
                </div>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary" id="pro-btn">Submit</button>
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
