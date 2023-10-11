@extends('backend.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Category Register
        </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       <form action="{{ route('store') }}" method="POST">
       @csrf
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}"/>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label class="form-label">Description</label>
            <textarea class="form-control" type="text" name="description" id="editor"> </textarea>
             @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <button class="btn btn-sm btn-primary mt-2" type="submit">Svae</button>
       </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
@endsection