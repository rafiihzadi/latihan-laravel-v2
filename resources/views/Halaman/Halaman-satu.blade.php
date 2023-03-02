<!DOCTYPE html>
<!--
    This is a starter template page. Use this page to start your new project form
    scratch. This page gets rid of all links and provides the needed markup only.
 -->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class ="wrapper">

    <!-- Navbar -->
    @include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Template.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Halaman Satu</h1>
                </div><!-- /.col -->
            </div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Halaman Satu</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="card-info card-outline">
        <div class="card-header">
            <a href="{{ route('exportpegawai') }}" class="btn btn-success">Export</a></div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Import</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
            <th>Nama<th>
            <th>Alamat<th>
            <th>Tanggal Lahir<th>
            <th>No. Telepon<th>

            </tr>
            @foreach ($pegawai as $item)
            <tr>
                
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tglhr }}</td>
                <td>{{ $item->telp }}</td>
            </tr>
                @endforeach
        </table>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('importPegawai') }}" method="post" enctype="multipart/form-data">

      <div class="modal-body">
          <div class="form-group">


            {{ csrf_field() }}
            <div class="form-group">
                <input type="file" name="file" required="required">

                
            </div>
            </form>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
        <button type="sumbit" class="btn btn-primary">Import</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.Control-Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
</div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
@include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
</head>
<body>
    
</body>
</html>