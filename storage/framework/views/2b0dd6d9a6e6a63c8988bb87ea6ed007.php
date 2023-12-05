<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="font-sans bg-gray-200">

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="text-center p-10">
        <h1 class="text-3xl font-extrabold sm:text-5xl text-green-600 mb-6">
            Selamat Datang di Dashboard Admin!
        </h1>
    
        <!-- Button for Home -->
        <p class="mt-4">
            <a href="<?php echo e(route('index')); ?>" class="inline-block px-4 py-2 bg-green-500 text-white no-underline rounded-md transition duration-300 hover:bg-green-600">Lihat Halaman Utama</a>
        </p>
    </div>

    <div class="flex justify-around p-10">
        <div class="box bg-white shadow-md p-8 m-4 rounded-lg text-center">
            <h2 class="text-black">Products</h2>
            <i class="fas fa-shopping-bag text-2xl mb-4"></i>
            <p><a href="<?php echo e(route('dashboard.product.index')); ?>" class="inline-block px-8 py-4 bg-green-500 text-white no-underline rounded-md transition duration-300 hover:bg-green-600">Show</a></p>
        </div>

        <div class="box bg-white shadow-md p-8 m-4 rounded-lg text-center">
            <h2 class="text-black">Transaction</h2>
            <i class="fas fa-money-check-alt text-2xl mb-4"></i>
            <p><a href="<?php echo e(route('dashboard.transaction.index')); ?>" class="inline-block px-8 py-4 bg-green-500 text-white no-underline rounded-md transition duration-300 hover:bg-green-600">Show</a></p>
        </div>

        <div class="box bg-white shadow-md p-8 m-4 rounded-lg text-center">
            <h2 class="text-black">User</h2>
            <i class="fas fa-user text-2xl mb-4"></i>
            <p><a href="<?php echo e(route('dashboard.user.index')); ?>" class="inline-block px-8 py-4 bg-green-500 text-white no-underline rounded-md transition duration-300 hover:bg-green-600">Show</a></p>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\shop-app-new\resources\views/dashboardAdmin.blade.php ENDPATH**/ ?>