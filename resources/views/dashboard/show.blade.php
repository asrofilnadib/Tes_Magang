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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD App</title>
  </head>
  <body>
  <div class="py-11">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
        <div class="container">
          <div class="mx-auto w-full max-w-2xl">
            <div class="text-center">
              <h1 class="text-3xl font-bold mb-2">{{ $books->title }}</h1>
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
  </body>
  </html>
</x-app-layout>
