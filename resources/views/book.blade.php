@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.main')
@section('header')
  CRUD Books
@endsection
@section('content')
  <div class="card mb-6">
    <div class="py-2 mb-8">
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
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">images:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="image" value="{{ old('image') }}" type="file" class="form-control-file" id="image" accept="image/*">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-2 col-md-3 col-sm-12 col-form-label">PDF File:</label>
                      <div class="col-lg-10 col-md-9 col-sm-12">
                        <input name="file_pdf" value="{{ old('file_pdf') }}" type="file" class="form-control-file" id="file_pdf" accept=".pdf">
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
                      <label class="col-lg-3 col-md-4 col-sm-12 col-form-label">Category</label>
                      <div class="col-lg-9 col-md-8 col-sm-12">
                        <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-lg-3 col-md-4 col-sm-12 col-form-label">Description:</label>
                      <div class="col-lg-9 col-md-8 col-sm-12">
                        <textarea name="description" class="form-control"
                                  id="description" style="height: 140px">{{ old('description') }}</textarea>
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
    <div class="py-8">
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
                    <td><a class="text-gray-600" href="/api/books/{{ $book->id }}">{{ $book->title  }}</a></td>
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
              @if(Auth::user()->getRole() === 'admin')
                <div class="custom-pagination">
                  {{ $books->links('vendor.pagination.tailwind') }}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
