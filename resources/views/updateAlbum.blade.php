<x-head />
<x-sidebar />
<x-nav />

<div class="container mt-5">

    <h2 class="mb-4">update Album</h2>
    <form action="/updateAlbum/{{ $userAlbum->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="album_name">Album Name:</label>
            <input type="text" class="form-control" id="album_name" name="name" value={{ $userAlbum->albumName }} >
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input class="form-control" id="description" name="description" rows="4"value={{ $userAlbum->description }} ></input>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" value={{ $userAlbum->image }}>
        </div>
        <button type="submit" class="btn btn-info">update Album</button>
    </form>
</div>
<x-footer />
