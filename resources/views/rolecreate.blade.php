@extends('layouts.main')
@section('container')
    <form action="/roles" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputCode" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code">
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="inputDesc">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
