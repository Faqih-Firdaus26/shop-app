<?php $__env->startSection('content'); ?>
    <!-- START: BREADCRUMB -->
    <section class="bg-green-100 py-8 px-4">
        <div class="container mx-auto">
          <ul class="breadcrumb">
            <li>
              <a href="<?php echo e(route('index')); ?>">Beranda</a>
            </li>
            <li>
              <a href="#" aria-label="current-page">Keranjang Belanja</a>
            </li>
          </ul>
        </div>
      </section>
      <!-- END: BREADCRUMB -->
  
      <!-- START: COMPLETE YOUR ROOM -->
      <section class="md:py-16">
        <div class="container mx-auto px-4">
          <div class="flex -mx-4 flex-wrap">
            <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
              <div
                class="flex flex-start mb-4 mt-8 pb-3 border-b border-gray-200 md:border-b-0"
              >
                <h3 class="text-2xl">Keranjang Belanja</h3>
              </div>
  
              <div class="border-b border-gray-200 mb-4 hidden md:block">
                <div class="flex flex-start items-center pb-2 -mx-4">
                  <div class="px-4 flex-none">
                    <div class="" style="width: 90px">
                      <h6>Gambar</h6>
                    </div>
                  </div>
                  <div class="px-4 w-5/12">
                    <div class="">
                      <h6>Produk</h6>
                    </div>
                  </div>
                  <div class="px-4 w-5/12">
                    <div class="">
                      <h6>Harga</h6>
                    </div>
                  </div>

                  <div class="px-4 w-2/12">
                    <div class="text-center">
                      <h6>Aksi</h6>
                    </div>
                  </div>
                </div>
              </div>
  

              <?php $__empty_1 = true; $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <!-- START: ROW 1 -->
              <div
              class="flex flex-start flex-wrap items-center mb-4 -mx-4"
              data-row="1"
            >
              <div class="px-4 flex-none">
                <div class="" style="width: 90px; height: 90px">
                  <img
                    src="<?php echo e($item->product->galleries()->exists() ? Storage::url($item->product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>"
                    alt=""
                    class="object-cover rounded-xl w-full h-full"
                  />
                </div>
              </div>
              <div class="px-4 w-auto flex-1 md:w-5/12">
                <div class="">
                  <h6 class="font-semibold text-lg md:text-xl leading-8">
                    <?php echo e($item->product->name); ?>

                  </h6>
                  <span class="text-sm md:text-lg">Teh Remaja</span>
                  <h6
                    class="font-semibold text-base md:text-lg block md:hidden"
                  >
                    Rp <?php echo e(number_format($item->product->price)); ?>

                  </h6>
                </div>
              </div>
              <div
                class="px-4 w-auto flex-none md:flex-1 md:w-5/12 hidden md:block"
              >
                <div class="">
                  <h6 class="font-semibold text-lg">Rp <?php echo e(number_format($item->product->price)); ?></h6>
                </div>
              </div>
              <div class="px-4 w-2/12">
                <div class="text-center">
                  <form action="<?php echo e(route('cart-delete', $item->id)); ?>" method="POST" data-confirm-delete="true">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button
                    class="text-red-600 border-none focus:outline-none px-3 py-1"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                  </button>
                  </form>
                </div>
              </div>
            </div>
            <!-- END: ROW 1 -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <p id="cart-empty" class="text-center py-8">
                Ooops... Keranjang Anda Kosong
                <a href="<?php echo e(route('index')); ?>" class="underline">Belanja Sekarang</a>
              </p>
              <?php endif; ?>
             
            </div>
            <div class="w-full md:px-4 md:w-4/12" id="shipping-detail">
              <div class="bg-yellow-200 px-4 py-6 md:p-8 md:rounded-3xl">
                <form action="<?php echo e(route('checkout')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="flex flex-start mb-6">
                    <h3 class="text-2xl">Detail Rincian</h3>
                  </div>
  
                  <div class="flex flex-col mb-4">
                    <label for="complete-name" class="text-sm mb-2"
                      >Nama Lengkap</label
                    >
                    <input
                      data-input
                      type="text"
                      name="name"
                      id="complete-name"
                      class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                      placeholder="Masukkan Nama Lengkap Anda"
                      required
                    />
                  </div>
  
                  <div class="flex flex-col mb-4">
                    <label for="email" class="text-sm mb-2">Email</label>
                    <input
                      data-input
                      type="email"
                      name="email"
                      id="email"
                      class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                      placeholder="Masukkan Alamat Email Anda"
                      required
                    />
                  </div>
  
                  <div class="flex flex-col mb-4">
                    <label for="address" class="text-sm mb-2">Alamat Lengkap</label>
                    <input
                      data-input
                      type="text"
                      name="address"
                      id="address"
                      class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                      placeholder="Masukkan Alamat Lengkap Anda"
                      required
                    />
                  </div>
  
                  <div class="flex flex-col mb-4">
                    <label for="phone-number" class="text-sm mb-2"
                      >Nomor HP</label
                    >
                    <input
                      data-input
                      type="tel"
                      name="phone"
                      id="phone-number"
                      class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                      placeholder="Masukkan Nomor Telepon Anda"
                      required
                    />
                  </div> 
  
                  <div class="flex flex-col mb-4">
                    <label for="complete-name" class="text-sm mb-2"
                      >Metode Pembayaran</label
                    >
                    <div class="flex -mx-2 flex-wrap">
                      <div class="px-2 w-6/12 h-24 mb-4">
                        <button
                          type="button"
                          data-value="midtrans"
                          data-name="payment"
                          class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none"
                        >
                          <img
                            src="/frontend/images/content/logo-midtrans.png"
                            alt="Logo midtrans"
                            class="object-contain max-h-full"
                          />
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      
                      class="bg-green-400 text-black hover:bg-black hover:text-green-400 focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-200 px-6"
                    >
                      Checkout 
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: COMPLETE YOUR ROOM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop-app-new\resources\views/pages/frontend/cart.blade.php ENDPATH**/ ?>