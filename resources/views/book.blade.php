<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=3">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/3.8.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>CRUD App</title>
  </head>
  <body>
  <div class="card mb-8">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="card-header mb-8">
              Create Books
            </div>
            <div class="card-body">
              @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                  @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                  @endforeach
                </ul>
              @endif

              <form method="POST" action="{{ route('book.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-8">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">ISBN:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="isbn" value="{{ old('isbn') }}" type="text" class="form-control" id="isbn">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">Title:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="title" value="{{ old('title') }}" type="text" class="form-control" id="title">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">Subtitle:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="subtitle" value="{{ old('subtitle') }}" type="text" class="form-control"
                               id="subtitle">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">Author:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="author" value="{{ old('author') }}" type="text" class="form-control" id="author">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-lg-3 col-md-4 col-sm-12 col-form-label">Publisher:</label>
                      <div class="col-lg-9 col-md-8 col-sm-12">
                        <input name="publisher" value="{{ old('publisher') }}" type="text" class="form-control"
                               id="publisher">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-3 col-md-4 col-sm-12 col-form-label">Pages:</label>
                      <div class="col-lg-9 col-md-8 col-sm-12">
                        <input name="pages" value="{{ old('pages') }}" type="number" class="form-control" id="pages">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-3 col-md-4 col-sm-12 col-form-label">Description:</label>
                      <div class="col-lg-9 col-md-8 col-sm-12">
                        <textarea name="description" class="form-control"
                                  id="description">{{ old('description') }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="card-header">
              Manage Products
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                  <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title  }}</td>
                    <td>
                      <a class="btn btn-primary"
                         href="{{route('book.edit', ['id'=> $book->id ])}}">
                        <i class="icon-pencil"></i>
                      </a>
                    </td>
                    <td>
                      <form action="{{ route('book.delete', $book->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                          <i class="icon-close"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <!-- apps -->
  <script src="../dist/js/app-style-switcher.js"></script>
  <script src="../dist/js/feather.min.js"></script>
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <script src="../assets/extra-libs/c3/d3.min.js"></script>
  <script src="../assets/extra-libs/c3/c3.min.js"></script>
  <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
  <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  </body>
  </html>
</x-app-layout>
