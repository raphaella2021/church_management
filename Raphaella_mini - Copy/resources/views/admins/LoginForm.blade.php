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

            <form method="post" action="create_log">
              <h1>Login Form</h1>
              @csrf
              <div class="form-group">
                  Username:
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div class="form-group">
                  Password:
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log IN">
              </div></form>
              <br>
              <button class="btn btn-go submit" style=" font-color: white;font-size:24px;"><a href="registerHere">Register Account</a></button>
              </div>

