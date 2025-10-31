@props(['showRoute', 'editRoute', 'deleteRoute'])

<form action="{{ $deleteRoute }}" method="POST" class="d-inline">
    <a class="btn btn-info btn-sm" href="{{ $showRoute }}">Show</a>
    <a class="btn btn-primary btn-sm" href="{{ $editRoute }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</button>
</form>
