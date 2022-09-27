@extends('layouts.main')
@section('container')
    <form action="{{ route('roles.update',$role->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="inputCode" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $role->code }}">
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="inputDesc">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $role->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
