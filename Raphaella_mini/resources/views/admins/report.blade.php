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

<h1>All the christian applied </h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>id</td>
            <td>fname</td>
            <td>lname</td>
            <td>gender</td>
            <td>faname</td>
            <td>mname</td>
            <td>province</td>
            <td>disrtict</td>
            <td>sector</td>
            <td>cell</td>
            <td>village</td>
            <td>cchurch</td>
            <td>phone</td>
            <td>status</td>

        </tr>
    </thead>
    <tbody>
    @foreach($christian as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ $value->faname }}</td>
            <td>{{ $value->mname }}</td>
            <td>{{ $value->province }}</td>
            <td>{{ $value->disrtict }}</td>
            <td>{{ $value->sector }}</td>
            <td>{{ $value->cell }}</td>
            <td>{{ $value->village }}</td>
            <td>{{ $value->cchurch }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<button><a href="back1" class="form-control">Please Come Back</a></button>

</div>
</body>
</html>
