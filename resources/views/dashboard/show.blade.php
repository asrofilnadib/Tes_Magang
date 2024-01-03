{{--@dd($books)--}}
@extends('layouts.main')
@section('header')
  Detail Buku {{ $books->title }}
@endsection
@section('content')
  <div class="py-11">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
        <div class="container">
          <div class="mx-auto w-full max-w-2xl">
            <div class="text-center">
              <div class="mx-auto max-w-500 max-h-300 flex justify-center">
                @if($books->image)
                  <img src="/storage/{{ $books->image }}" alt="" class="w-8/12 h-6/12 object-cover object-center">
                @else
                  <img src="https://source.unsplash.com/500x300?{{ $books->category->name }}" alt="" class="w-full h-full object-cover object-center">
                @endif
              </div>
              <a href="{{ route('download.pdf', ['filename' => $books->file_pdf]) }}" class="absolute top-44 right-32 p-2 text-gray-900 dark:text-gray-100 hover:text-blue-500">
                <i class="fas fa-download fa-2x"></i>
              </a>
              <h1 class="text-3xl font-bold">{{ $books->title }}</h1>
              <p class="text-gray-600 text-lg">{{ $books->subtitle }}</p>
              <h3 class="text-xl font-semibold mb-3">ISBN: {{ $books->isbn }}</h3>
            </div>

            <div class="mt-4">
              <p class="text-lg">By: {{ $books->author }}</p>
              <p class="text-lg">Publisher: {{ $books->publisher }}</p>
              <p class="text-lg">Pages: {{ $books->pages }}</p>
              <p class="text-lg">Published at: {{ $books->created_at }}</p>
            </div>

            <div class="my-6">
              <article class="prose lg:prose-lg">
                {!! $books->description !!}
              </article>
            </div>

            <div class="mt-4">
              <a href="{{ route('dashboard') }}" class="block text-blue-500 hover:underline">Back to dashboard</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
