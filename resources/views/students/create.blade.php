@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Christian</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> something wrong with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="ftname" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lname" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Father's Name:</strong>
                <input type="text"  name="faname" class="form-control" placeholder="Father's Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Mother's Name:</strong>
                <input type="text"  name="mname" class="form-control" placeholder="Mother's Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Province:</strong>
                <input type="text"  name="province" class="form-control" placeholder="province">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>District:</strong>
                <input type="text"  name="district" class="form-control" placeholder="district">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Sector:</strong>
                <input type="text"  name="sector" class="form-control" placeholder="sector">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Cell:</strong>
                <input type="text"  name="cell" class="form-control" placeholder="cell">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Village:</strong>
                <input type="text"  name="village" class="form-control" placeholder="village">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Christian Church:</strong>
                <input type="text"  name="church" class="form-control" placeholder="church">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
@endsection