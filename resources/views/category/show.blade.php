{{--@dd($category, $books)--}}
@extends('layouts.main')
@section('header')
  List Buku dari Kategori {{ $category }}
@endsection
@section('content')
  <div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="card mb-6">
      <div class="py-2 mb-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
            <div class="row">
              @foreach($books as $book)
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto mb-6">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    @if($book->image)
                      <img src="/storage/{{ $book->image }}" style="width: 100%; border-radius: 10px;">
                    @else
                      <img src="https://source.unsplash.com/600x400?{{ $book->author }}" alt="IMG-BANNER" style="width: 100%; border-radius: 10px;">
                    @endif

                    <a href="/api/books/{{ $book->id }}"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(255, 255, 255, 0.9); padding: 20px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                      <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                        {{ $book->title }}
                      </h3>

                      <dl>
                        <dt>Subtitle: {{ $book->subtitle }}</dt>
                        <dt>ISBN: {{ $book->isbn }}</dt>
                        <dt>Category: {{ $book->category->name }}</dt>
                        <dt>Author: {{ $book->author }}</dt>
                        <dt>Pages: {{ $book->pages }}</dt>
                      </dl>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
