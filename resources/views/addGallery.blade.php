<x-head />
<x-sidebar />
<x-nav />

<div class="container">
<div class="form-group ">
    <form action="/createGalley/{{ $userAlbum->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="image">add gallery:</label>
    <input type="file" class="form-control-file" id="image" name="image[]" accept="image/*" multiple >
    <button type="submit" class="btn btn-danger">submit</button>
    </form>
</div>
</div>

<x-footer />
