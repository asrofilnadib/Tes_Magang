@extends('layouts.main')
@section('header')
  {{ __("Category") }}
@endsection
@section('content')
  <div class="sec-banner bg0 p-t-80 p-b-50">
      <div class="card mb-6">
        <div class="py-2 mb-8">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
              <div class="row">
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                    <img src="/images/pulau/banner-01.jpg" alt="IMG-BANNER">

                    <a href="/api/category/fiksi"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
                      <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                        Fiksi
                      </h3>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                    <img src="/images/pulau/banner-02.jpg" alt="IMG-BANNER">

                    <a href="/api/category/sejarah"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
                      <div class="block1-txt-child1 flex-col-l">
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                          Sejarah
                        </h3>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                    <img src="/images/pulau/banner-03.jpg" alt="IMG-BANNER">

                    <a href="/api/category/sains"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
                      <div class="block1-txt-child1 flex-col-l">
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                          Sains
                        </h3>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                    <img src="/images/pulau/banner-04.jpg" alt="IMG-BANNER">

                    <a href="/api/category/ekonomi"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
                      <div class="block1-txt-child1 flex-col-l">
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                          Ekonomi
                        </h3>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                  </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                    <img src="/images/pulau/banner-05.jpg" alt="IMG-BANNER">

                    <a href="/api/category/teknologi"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
                      <div class="block1-txt-child1 flex-col-l">
                      </div>

                      <div class="block1-txt-child2 p-b-4 trans-05">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                          Teknologi
                        </h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
