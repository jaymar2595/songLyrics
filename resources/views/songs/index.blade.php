@extends('songs.master')

@section('content')

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          <a class="nav-link" href="home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
       
       
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <!-- <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a> -->
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
       
        <li class="nav-item">
       
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li> -->
      </ul>
    </div>
  </nav>
  <br><br>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('songs.create') }}">Create New Song</a>
      </div>
    </div>
  </div>
  <div class="content-wrapper">
  
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> iSong Data</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Song ID</th>
                  <th>Title</th>
                  <th>Album</th>
                  <th>Lyrics</th>
                  <th>Artist</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Song ID</th>
                  <th>Title</th>
                  <th>Album</th>
                  <th>Lyrics</th>
                  <th>Artist</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <!-- <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr> -->


    @foreach ($songs as $song)
      <tr>
        <td>{{ $song->id }}</td>
        <td>{{ $song->title }}</td>
        <td>{{ $song->album }}</td>
        <td>{{ $song->lyrics }}</td>
        <td>{{ $song->artist }}</td>
        <td>{{ $song->created_at }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('songs.show', $song->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('songs.edit', $song->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['songs.destroy', $song->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
@endsection


