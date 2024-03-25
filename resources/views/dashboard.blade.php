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
    }

    .card-body {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">User Details</h5>
          <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
          <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
          <p class="card-text"><strong>mobile:</strong> {{ $user->mobile }}</p>

        </div>
      </div>
    </div>
  </div>
</div>

<x-footer />
