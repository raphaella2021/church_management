<!DOCTYPE html>
<html>
<head>
    <title>Christian App</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css1/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css1/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css1/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css1/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css1/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css1/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('ch') }}">Christian Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('ch') }}">View All christians</a></li>
        <li><a href="{{ URL::to('ch/create') }}">Create a christian</a>
    </ul>
</nav>

<h1>Create a christian</h1>

<!-- if there are creation errors, they will show here -->
<form action="{{ route('ch.store') }}" method="POST" >
    @csrf
    <div class="form-group">
     First Name:
      <input type="text" name="fname" class="form-control">
    </div>
    <div class="form-group">
        Last Name:
         <input type="text" name="lname" class="form-control">
       </div>
       <div class="form-group">
      Select Gender:
  <select class="form-control" name="level">
  <option value="male">Male </option>
  <option value="female">Female</option>
  </select>
       </div>
       <div class="form-group">
       Father's Name:
         <input type="text" name="faname" class="form-control">
       </div>
       <div class="form-group">
      Mother's Name:
      <input type="text" name="mname" class="form-control">
     </div>
     <div class="form-group">
      Province:
  <select class="form-control" name="level">
  <option value="east">Eastern </option>
  <option value="south">Southern</option>
  <option value="north">Northern</option>
  <option value="west">Western</option>
  <option value="kigali">Kigali City</option>
  </select>
       </div>
       <div class="form-group">
     Enter District:
         <input type="text" name="district" class="form-control">
       </div>
       <div class="form-group">
      Enter Sector:
      <input type="text" name="sector" class="form-control">
       </div>
       <div class="form-group">
      Enter Cell:
      <input type="text" name="cell" class="form-control">
       </div>
       <div class="form-group">
      Enter Village:
      <input type="text" name="village" class="form-control">
       </div>
       <div class="form-group">
      Enter Church:
      <input type="text" name="cchurch" class="form-control">
       </div>
       <div class="form-group">
      Enter Phone:
      <input type="telephone" name="phone" maxlength="10" class="form-control">
       </div>
       <div class="form-group">
        Application status:
  <select class="form-control" name="status">
  <option value="married">Married</option>
  <option value="single">Single</option>
  </select>
       </div>
       <div>
        <input type="submit" class="btn btn-default submit" value="Apply">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-danger submit" value="clear">
      </div></form>
      </div>
</body>
</html>
