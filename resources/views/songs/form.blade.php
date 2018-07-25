@extends('songs.master')
<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Title : </strong>
      {!! Form::text('title', null, ['placeholder'=>'Title','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Album : </strong>
      {!! Form::text('album', null, ['placeholder'=>'Album','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Lyrics : </strong>
      {!! Form::textarea('lyrics', null, ['placeholder'=>'Lyrics','class'=>'form-control','style'=>'height:150px']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Artist : </strong>
      {!! Form::text('artist', null, ['placeholder'=>'Artist','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('songs.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>