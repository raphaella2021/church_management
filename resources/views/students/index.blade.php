@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h3>Christian Documentation Management System.</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Christian</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Province</th>
            <th>District</th>
            <th>Sector</th>
            <th>Cell</th>
            <th>Village</th>
            <th>Church</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->fname }}</td>
            <td>{{ $student->lname }}</td>
            <td>{{ $student->faname }}</td>
            <td>{{ $student->mname }}</td>
            <td>{{ $student->province }}</td>
            <td>{{ $student->district }}</td>
            <td>{{ $student->sector }}</td>
            <td>{{ $student->cell }}</td>
            <td>{{ $student->village }}</td>
            <td>{{ $student->church }}</td>
            <td><form action="{{ route('students.destroy',$student->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
{!! $students->links() !!}
@endsection