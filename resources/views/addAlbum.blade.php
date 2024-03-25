<x-head />

<x-sidebar />
<x-nav />

<div class="container mt-5">
    <h2 class="mb-4">Add Album</h2>
    <form action="addAlbum" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="album_name">Album Name:</label>
            <input type="text" class="form-control" id="album_name" name="name" >
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" ></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" >
        </div>
        <button type="submit" class="btn btn-primary">Add Album</button>
    </form>
</div>
<x-footer />
