<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>Es Teh Remaja</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="<?php echo e(url('/frontend/images/content/favicon.png')); ?>" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <meta name="theme-color" content="#000" />

    
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="f<?php echo e(url('frontend/favicon.ico')); ?>">
  <link href="<?php echo e(url('frontend/css/app.minify.css')); ?>" rel="stylesheet">
</head>

  <body>
    <!-- Add your site or application content here -->

    <?php echo $__env->make('components.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('components.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    



    <!-- START: LOAD SVG -->
    <!-- <svg width="23" height="26" class="hidden" id="icon-play">
      <path
        d="M21 9.536c2.667 1.54 2.667 5.39 0 6.928l-15 8.66c-2.667 1.54-6-.385-6-3.464V4.34C0 1.26 3.333-.664 6 .876l15 8.66z"
        fill="#fff"
      />
    </svg> -->
    <!-- END: LOAD SVG  -->

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "anonymizeIp", true);
      ga("set", "transport", "beacon");
      ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script src="<?php echo e(url('/frontend/js/app.js')); ?>"></script></body>
</html>
<?php /**PATH C:\xampp\htdocs\shop-app-new\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>