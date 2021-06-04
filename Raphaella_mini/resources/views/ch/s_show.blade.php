<!DOCTYPE html>
<html>
<head>
    <title>christian App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('christian') }}">$christians Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('christian') }}">View All christians</a></li>
        <li><a href="{{ URL::to('christian/s_create') }}">Create a christian</a>
    </ul>
</nav>

<h1>Showing {{ $ch->fname }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $ch->fname }}</h2>
        <p>
            <strong>Last Name:</strong> {{ $ch->lname }}<br>
            <strong>Gender:</strong> {{ $ch->gender }}<br>
            <strong>faname:</strong> {{ $ch->faname }}<br>
            <strong>mname:</strong> {{ $ch->mname }}<br>
            <strong>province:</strong> {{ $ch->province }}<br>
            <strong>district:</strong> {{ $ch->district }}<br>
            <strong>sector:</strong> {{ $ch->sector }}<br>
            <strong>cell:</strong> {{ $ch->cell }}<br>
            <strong>village:</strong> {{ $ch->village }}<br>
            <strong>cchurch:</strong> {{ $ch->cchurch }}<br>
            <strong>phone:</strong> {{ $ch->phone }}<br>
            <strong>status:</strong> {{ $ch->status }}<br>


        </p>
    </div>

</div>
</body>
</html>
