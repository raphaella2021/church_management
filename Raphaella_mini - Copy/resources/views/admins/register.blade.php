<!DOCTYPE html>
<html>
<head>
    <title>christian App</title>
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
        <a class="navbar-brand" href="back">Back</a>
    </div>
</nav>

<h1>Please Register Your Account</h1>

<!-- if there are creation errors, they will show here -->
<form action="register1" method="POST" >
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
     Enter phone number:
         <input type="text" name="phone" class="form-control">
       </div>
       <div class="form-group">
        Enter username:
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            Enter Password:
                <input type="password" name="password" class="form-control">
              </div>
       <div>
        <input type="submit" class="btn btn-default submit" value="Register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-danger submit" value="clear">
      </div></form>
      </div>
</body>
</html>
