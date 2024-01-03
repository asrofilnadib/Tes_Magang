@extends('layouts.main')
@section('header')
  @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      @auth
        {{--<a href="{{ url('/book') }}"
           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>--}}
      @else
        <a href="{{ route('login') }}"
           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login
          in</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}"
             class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
      @endauth
    </div>
  @endif
@endsection
@section('content')
  <div class="card">
    <div class="py-11">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="card-header">
              List of Books
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
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)
                    <tr class="table_row">
                      <td>{{ $book->id }}</td>
                      <td>{{ $book->isbn }}</td>
                      <td><a href="{{ route('book.show', ['id' => $book->id]) }}">
                          {{ $book->title }}
                        </a>
                      </td>
                      <td>{{ $book->author }}</td>
                      <td>{{ $book->publisher }}</td>
                      <td>{{ $book->pages }}</td>
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
