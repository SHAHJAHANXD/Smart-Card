@extends('admin.layouts.master')
@section('admintitle') List Advertisment @endsection
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Advertisment</h3>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>User Name</th>
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
          <td> 4</td>
          <td>
            <button type="button" class="btn bg-gradient-danger btn-sm">Delete</button>
            <button type="button" class="btn bg-gradient-info btn-sm">Edit</button>
            <button type="button" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#modal-xl">Assign</button>
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
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


<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Assign From</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Assign From</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" readonly id="inputEmail3" value="Ameer Hamza">
                                </div>
                              </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Select Form</label>
                            <div class="col-sm-10">
                                <select  class="form-control" name="form" >
                                    <option selected disabled>Select</option>
                                    <option value="Employee">Form 1</option>
                                    <option value="Manager">Form 2</option>
                                    <option value="Fromclient">From 3</option>
                                </select>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                            </div>
                          </div>


                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Assign</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Assigned Forms</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Form</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1.</td>
                              <td>Form 1</td>
                              <td>
                                <button type="button" class="btn bg-gradient-danger btn-sm">Delete</button>
                                <button type="button" class="btn bg-gradient-info btn-sm">Edit</button>
                              </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Form 2</td>
                                <td>
                                  <button type="button" class="btn bg-gradient-danger btn-sm">Delete</button>
                                  <button type="button" class="btn bg-gradient-info btn-sm">Edit</button>
                                </td>
                              </tr>
                              <tr>
                                <td>3.</td>
                                <td>Form 3</td>
                                <td>
                                  <button type="button" class="btn bg-gradient-danger btn-sm">Delete</button>
                                  <button type="button" class="btn bg-gradient-info btn-sm">Edit</button>
                                </td>
                              </tr>

                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                  </div>

        </div>
    </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

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
