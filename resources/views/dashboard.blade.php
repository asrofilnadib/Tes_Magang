@extends('layouts.main')
@section('header')
  {{ __("Dashboard") }}
@endsection
@section('content')
  <div class="card">
    <div class="py-11">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="card-header">
              List of {{ $user->name }} books
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap display">
                  <thead>
                  <tr class="table_head">
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Pages</th>
                    <th>Ditambahkan pada</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($userbook as $book)
                    <tr class="table_row">
                      <td>{{ $book->id }}</td>
                      <td>{{ $book->isbn }}</td>
                      <td><a href="{{ route('book.show', ['id' => $book->id]) }}">
                          {{ $book->title }}
                        </a></td>
                      <td>{{ $book->author }}</td>
                      <td>{{ $book->publisher }}</td>
                      <td>{{ $book->pages }}</td>
                      <td>{{ $book->created_at }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Pages</th>
                    <th>Ditambahkan pada</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('#myTable').DataTable()
    })
  </script>
@endsection

