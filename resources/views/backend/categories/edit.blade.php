@extends('backend.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit your input
        </div>
    <div class="card-body">
       <form action="{{ route('update', $category->id) }}" method="POST">
       @csrf
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}"/>
            <label class="form-label">Description</label>
            <textarea id="editor" class="form-control" type="text" name="description" value="{{ $category->description }}"></textarea>
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