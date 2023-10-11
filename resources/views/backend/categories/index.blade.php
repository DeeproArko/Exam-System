@extends('backend.master');

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    
@endif

<div class="container">
    <div class="card">
        <div class="card-header">Category list
            <a href="{{ route('create') }}" class="btn btn-sm btn-success">Add new category</a>
        </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <th>Serial Num</th>
                <th>Name</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>1</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Show</button>
                            <a class="btn btn-sm btn-warning" href="{{ route('edit', $category->id) }}">Edit</a>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection