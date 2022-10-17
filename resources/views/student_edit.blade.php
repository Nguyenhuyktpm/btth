@extends('layout.app')
@section('content')

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{url('manage')}}" class="btn btn-primary">Student Manage</a>
</div>
<form action="{{ url('update-student/'.$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="">Student Name</label>
        <input type="text" name="name" value="{{$student->fullname}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Student Address</label>
        <input type="text" name="address" value="{{$student->address}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Student Birthday</label>
        <input type="date" name="birthday" value="{{$student->birthday}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <button type="submit" class="btn btn-primary">Update Student</button>
    </div>
</form>
@endsection