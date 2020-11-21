<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>News API Laravel</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">News API Laravel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Search Widget -->
      <form class="form-inline" action="/search">
          @csrf
          <label for="keyword"></label>
          <input type="text" class="form-control" name="keyword" placeholder="Keyword...">
          <button type="submit" class="btn btn-primary">Search</button>
      </form>

    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-10">

        <h1 class="my-4">TOP Headlines
          <small>in the Australia</small>
        </h1>

        <!-- Blog Post -->
        @foreach($artikel as $a)
        <div class="card mb-4">
          <img class="card-img-top" src="{{ $a->urlToImage }}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $a->title }}</h2>
            <p class="card-text">{{ $a->description }}</p>
            <a href="{{ $a->url }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $a->publishedAt }} by
            <a>{{ $a->author }}</a>
          </div>
        </div>
        @endforeach

      </div>
</div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; shafailona 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>