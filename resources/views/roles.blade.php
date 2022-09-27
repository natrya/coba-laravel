@extends('layouts.main')

@section('container')
<a href="/roles/create" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $role->code }}</td>
                <td>{{ $role->name }}</td>
                <td width="500px">{{ $role->description }}</td>
                <td>
                    <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                        <input class="btn btn-danger" type="submit" value="Delete"/>
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
@endsection
