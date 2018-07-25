@extends('songs.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Song </h3> <a class="btn btn-xs btn-primary" href="{{ route('songs.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Title : </strong>
        {{ $song->title }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Album : </strong>
        {{ $song->album }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Lyrics : </strong>
        {{ $song->lyrics }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Artist : </strong>
        {{ $song->artist }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Created At : </strong>
        {{ $song->created_at }}
      </div>
    </div>
  </div>
  
@endsection
