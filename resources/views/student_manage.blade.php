@extends('layout.app')
@section('content')
<a href="{{url('student_add')}}" class="btn btn-primary" style=>Add Student</a>
<table class="table">
    <tr>
    <th>id</th>
    <th>fullname</th>
    <th>birthday</th>
    <th>address</th>
    
    </tr>
@foreach($students as $student)
<tr>
    <td>{{$student->id}}</td>
    <td>{{$student->fullname}}</td>
    <td>{{$student->birthday}}</td>
    <td>{{$student->address}}</td>
    <td>
        <a href="{{ url('student_edit/'.$student->id) }}">edit</a>
    </td>
</tr>
@endforeach
</table>
@endsection