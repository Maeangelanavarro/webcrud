@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Team Name:</strong>
                {{ $student->studname }}
            </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Course </strong>
            {{ $student->course }}
        </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Contact Information </strong>
            {{ $student->fee }}
        </div>
  </div>
@endsection