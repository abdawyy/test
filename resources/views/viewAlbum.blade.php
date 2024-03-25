<x-head />
<x-sidebar />
<x-nav />

<table class="m-auto ">
    <tr>
        <td class="m-3 p-3">name</td>
        <td class="m-3 p-3" >description</td>
        <td class="m-3 p-3" >image</td>
        <td class="m-3 p-3" >actions</td>
    </tr>
@foreach (  $userAlbum as $u )
<tr>
<td class="m-3 p-3">{{ $u->albumName }}</td>
<td class="m-3 p-3"> {{ $u->description }}</td>
<td class="m-3 p-3"> <img src="{{ asset('images/'.$u->image) }}" width="50px"></td>
<td class="m-3 p-3"><a href="albumUpdate/{{ $u->id }}" class="btn btn-primary" > update album</a>
    <a href="addGallery/{{ $u->id }}" class="btn btn-info" > add gallery</a>
    <a href="albumView/{{ $u->id }}" class="btn btn-danger" > view gallery</a>
    <a href="deleteAlbum/{{ $u->id }}" class="btn btn-success" > delete album</a>

</td>
</tr>

@endforeach
</table>
<x-footer />
