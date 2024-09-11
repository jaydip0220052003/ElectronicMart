<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    @include('navbar')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Registration</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('students.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Name</label>
                      <input type="text"class="form-control" id="exampleInputPassword1" name="name" value="{{$edit->name}}" placeholder="name">
                    </div> 
                    <!-- radio -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gender</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" value="Male"name="gender">
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" value="Female" name="gender">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div>
                        </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$edit->email}}" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$edit->password}}" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile No</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="mobile"value="{{$edit->mobile}}" placeholder="Enter MobileNo">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" name="address" placeholder="Enter ...">{{$edit->address}}</textarea>
                      </div>
                      <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" value="{{$edit->img}}" name="img" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <div class="form-group">
              </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>