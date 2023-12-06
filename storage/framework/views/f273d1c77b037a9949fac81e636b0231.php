<?php $__env->startSection('content'); ?>
        <!-- START: HERO -->
      <section id="home"
      class="relative bg-[url(/frontend/images/content/hero-bg-tea.jpg)] bg-cover bg-center bg-no-repeat "
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
              href="#menu_index"
              class="block w-full rounded-full bg-green-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring active:bg-green-500 sm:w-auto mx-auto"
            >
              Beli Sekarang
            </a>
          </div>
        </div>
      </div>
      </section>
          <!-- END: HERO -->

          
        <section id="tentang" class="bg-green-100 dark:bg-gray-900">
          <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
              <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang kami</h2>
                  <p class="mb-4">Esteh Remaja adalah penyedia minuman segar dengan nuansa remaja yang bersemangat. Kami menyajikan beragam varian rasa yang memikat, mulai dari rasa cokelat yang menggoda, kelezatan green tea yang menenangkan, cita rasa leci yang menyegarkan, hingga keistimewaan mangga yang eksotis. Tak lupa, kami juga menghadirkan kesempurnaan red velvet yang elegan dan kesegaran manis strawberry yang menggugah.</p>
                  <p>Kami percaya setiap tegukan dari minuman kami adalah pengalaman cita rasa yang membawa kegembiraan dan kenikmatan bagi para pelanggan kami.</p>
              </div>
              <div class="grid grid-cols-2 gap-4 mt-8">
                  <img class="w-full rounded-lg" src="frontend/images/content/random.jpg" alt="office content 1">
                  <img class="mt-4 w-full lg:mt-10 rounded-lg" src="frontend/images/content/random2.jpg" alt="office content 2">
              </div>
          </div>
      </section>
        <!-- END: ABOUT -->
      
          <!-- START: JUST ARRIVED -->
          <section class="flex flex-col py-16" id="menu">
            <div class="container mx-auto mb-4" id="menu_index">
              <div class="flex justify-center text-center mb-4">
                <h3 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Menu Teh</h3>
              </div>
            </div>
            <div class="overflow-x-hidden px-4" id="carousel">
              <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4 justify-center">
                  <!-- START: JUST ARRIVED ROW 1 -->
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="px-4 mb-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
                      <div class="relative card group">
                        <div class="rounded-xl overflow-hidden card-shadow relative bg-lime-200"
                             style="width: 287px; height: 386px">
                          <div class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-opacity-35">
                            <div class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center">
                              <p>details</p>
                            </div>
                          </div>
                          <img src="<?php echo e($product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt=""
                               class="w-full h-full object-cover object-center"/>
                        </div>
                        <h5 class="text-lg font-semibold mt-4"><?php echo e($product->name); ?></h5>
                        <span class="">Rp. <?php echo e(number_format($product->price)); ?></span>
                        <a href="<?php echo e(route('details', $product->slug)); ?>" class="stretched-link"></a>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- END: JUST ARRIVED -->
                </div>
              </div>
            </div>
          </div>
          
          </section>
          <!-- END: JUST ARRIVED -->

          
          <section id="kontak" class="bg-slate-50 dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Kontak Kami</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Jika anda ingin bekerja sama atau melakukan pesanan dalam jumlah banyak silahkan hubungi kami</p>
                <?php if(Session::has('msg')): ?>
                    <p class="p-4 mb-4 text-md text-white rounded-lg bg-green-300 dark:bg-gray-800 dark:text-green-400" role="alert"> <?php echo e(Session::get('msg')); ?></p>
                <?php endif; ?>
                <form action="/post-message" method="POST" class="space-y-8">
                  <?php echo csrf_field(); ?>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">email</label>
                        <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@gmail.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                        <input type="text" name="subject" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Apa yang bisa kami bantu?" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                        <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tinggalkan pesan..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-600 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim Pesan</button>
                </form>
            </div>
          </section>
           
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop-app-new\resources\views/pages/frontend/index.blade.php ENDPATH**/ ?>