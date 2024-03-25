<x-head />
<x-sidebar />
<x-nav />
<style>
   .card {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container d-flex flex-wrap">
@foreach ( $gallery as $g )
<div class="col-lg-4 col-md-6 col-sm-12 m-3 ">
    <div class="card">
      <img src="{{ asset('gallery/'.$g->imageName) }}" class="card-img-top" alt="Placeholder Image">
      <div class="card-body">
        <a href="/deleteGallery/{{ $g->id }}" class="btn btn-danger m-2">delete</a><br>
        <label> rename image </label>
        <form action="/updataName/{{ $g->id }}" method="post" enctype="multipart/form-data">
            @csrf
        <input type="text" value="{{ $g->description }}" name="description">
        <button class="btn btn-primary" type="submit"> change</button>
        </form>
      </div>
    </div>
  </div>
@endforeach




</div>


<x-footer />
