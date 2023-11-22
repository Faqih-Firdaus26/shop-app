@extends('layouts.frontend')

@section('content')
        <!-- START: HERO -->
        <section class="flex items-center hero">
            <div
              class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
            >
              <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
                Mari Nikmati <br class="" />Secangkir Teh
              </h1>
              <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
                Dengan Kedai Es Teh Remaja
                <br class="hidden lg:block" />Anda Dapat Menikmati Berbagai Macam Teh
              </h2>
              <div>
                <a
                  href="#menu"
                  class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
                  >Menu</a
                >
              </div>
            </div>
            <div class="w-full inset-0 md:relative md:w-1/2">
              <div class="relative hero-image">
                <div class="overlay inset-0 bg-black opacity-35 z-10"></div>
                <div class="overlay right-0 bottom-0 md:inset-0">
                </div>
                <img
                  src="/frontend/images/content/hero-bg-tea.jpg"
                  alt="hero 1"
                  class="absolute inset-0 md:relative w-full h-full object-cover object-center rounded-sm"
                />
              </div>
            </div>
          </section>
          <!-- END: HERO -->
      
           <!-- START: ABOUT -->
           <section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
            <div class="container mx-auto">
                <div class="flex flex-start mb-3">
                    <h3 class="text-2xl capitalize font-semibold text-center mx-auto mb-4">
                        Tentang Esteh Remaja
                    </h3>
                </div>
                <div class="flex justify-center mx-auto mb-3 w-1/2 ">
                  <p class="text-center max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Esteh Remaja adalah penyedia minuman segar dengan nuansa remaja yang bersemangat. </p>
                </div>
                <div class="grid grid-rows-2 grid-cols-9 gap-4">
                    <div
                        class="relative col-span-9 row-span-1 md:col-span-4 card"
                        style="height: 180px"
                    >
                        <div class="card-shadow rounded-xl">
                            <img
                                src="frontend/images/content/es-teh-remaja1.jpg"
                                alt=""
                                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
                            />
                        </div>
                        <div
                            class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
                        >
                        </div>
                        <a href="details.html" class="stretched-link">
                        </a>
                    </div>
                    <div
                        class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card"
                    >
                        <div class="card-shadow rounded-xl">
                            <img
                                src="frontend/images/content/strawberry.jpg"
                                alt=""
                                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
                            />
                        </div>
                        <div
                            class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
                        >
                        </div>
                        <a href="details.html" class="stretched-link">
                        </a>
                    </div>
                    <div
                        class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card"
                    >
                        <div class="card-shadow rounded-xl">
                            <img
                                src="frontend/images/content/mix.jpg"
                                alt=""
                                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
                            />
                        </div>
                        <div
                            class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
                        >
                        </div>
                        <a href="details.html" class="stretched-link">
                        </a>
                    </div>
                    <div
                        class="relative col-span-9 row-span-1 md:col-span-4 card"
                    >
                        <div class="card-shadow rounded-xl">
                            <img
                                src="frontend/images/content/mix2.jpg"
                                alt=""
                                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
                            />
                        </div>
                        <div
                            class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
                        >
                        </div>
                        <a href="details.html" class="stretched-link">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: ABOUT -->
      
          <!-- START: JUST ARRIVED -->
          <section class="flex flex-col py-16" id="menu">
            <div class="container mx-auto mb-4">
              <div class="flex justify-center text-center mb-4">
                <h3 class="text-2xl capitalize font-semibold">
                  Menu Tea
                </h3>
              </div>
            </div>
            <div class="overflow-x-hidden px-4" id="carousel">
              <div class="container mx-auto"></div>
              <!-- <div class="overflow-hidden z-10"> -->
              <div class="flex -mx-4 flex-row relative">
                <!-- START: JUST ARRIVED ROW 1 -->
                @foreach ($products as $product)
                <div class="px-4 relative card group">
                  <div
                    class="rounded-xl overflow-hidden card-shadow relative"
                    style="width: 287px; height: 386px"
                  >
                    <div
                      class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35"
                    >
                      <div
                        class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center"
                      >
                        <p>
                          details
                        </p>
                      </div>
                    </div>
                    <img
                      src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                      alt=""
                      class="w-full h-full object-cover object-center"
                    />
                  </div>
                  <h5 class="text-lg font-semibold mt-4">{{ $product->name }}</h5>
                  <span class="">Rp. {{ number_format($product->price) }}</span>
                  <a href="{{ route('details', $product->slug) }}" class="stretched-link">
                  </a>
                </div>
                @endforeach
                <!-- END: JUST ARRIVED ROW 1 -->

              </div>
              <!-- </div> -->
            </div>
          </section>
          <!-- END: JUST ARRIVED -->
      
@endsection