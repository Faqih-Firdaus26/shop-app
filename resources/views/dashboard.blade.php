<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section id="home"
    class="relative bg-[url(/frontend/images/content/hero-bg-tea.jpg)] bg-cover bg-center bg-no-repeat"
    >
    <div
      class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
    ></div>

    <div
      class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
    >
      <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
        <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
          Mari Menikmati 

          <strong class="block font-extrabold text-green-600">
            Segelas Teh.
          </strong>
        </h1>

        <p class="mt-4 max-w-lg sm:text-xl/relaxed text-white">
          Dengan Kedai Es Teh Remaja, Anda dapat menikmati berbagai macam teh
        </p>

        <div class="mt-8 flex flex-wrap gap-4 text-center">
          <a
            href="{{ route('index') }}"
            class="block w-full rounded-full bg-green-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring active:bg-green-500 sm:w-auto mx-auto"
          >
            Beli Sekarang
          </a>
        </div>
      </div>
    </div>
    </section>
    
</x-app-layout>
