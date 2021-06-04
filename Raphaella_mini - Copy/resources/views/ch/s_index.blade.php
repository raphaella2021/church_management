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
        <a class="navbar-brand" href="{{ URL::to('christians') }}">student Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('christians') }}">View All students</a></li>
        <li><a href="{{ URL::to('christians/create') }}">Create a student</a>
    </ul>
</nav>

<h1>All the students</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Fname</td>
            <td>Lname</td>
            <td>gender</td>
            <td>faname</td>
            <td>mname</td>
            <td>province</td>
            <td>district</td>
            <td>sector</td>
            <td>cell</td>
            <td>village</td>
            <td>cchurch</td>
            <td>phone</td>
            <td>status</td>
            <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($christians as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ $value->faname}}</td>
            <td>{{ $value->mname}}</td>
            <td>{{ $value->province}}</td>
            <td>{{ $value->district}}</td>
            <td>{{ $value->sector}}</td>
            <td>{{ $value->cell}}</td>
            <td>{{ $value->village}}</td>
            <td>{{ $value->cchurh}}</td>
            <td>{{ $value->phone}}</td>
            <td>{{ $value->status }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <form action="{{ route('christians.destroy', $value->id) }}" method="POST">

                    <a href="{{ route('christians.show', $value->id) }}" title="show">
                       Show
                    </a>
                </td><td>
                    <a href="{{ route('christians.edit', $value->id) }}">
                        Update

                    </a></td><td>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        Delete

                    </button></td>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
