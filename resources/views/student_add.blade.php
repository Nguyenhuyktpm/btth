@extends('layout.app')
@section('content')
<form action = "{{url('add_student')}}" method = "POST">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Fullname</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" name="name">
    <div class="form-text"></div>
    </div>
    <div class="mb-3">
        <label  class="form-label">Address</label>
        <input type="text" class="form-control"  name="address">
    </div>
    <div class="mb-3 ">
        <label class="form-label">Birthday</label>
        <input type="date" class="form-control"  name = "birthday">
        
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>