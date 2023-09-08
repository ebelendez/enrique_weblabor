<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Prueba Desarrollo Weblabor</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="<?php echo e(url('img/favicon.png')); ?>" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        
        <script src="https://cdn.tiny.cloud/1/1d1a9ualu33c1e67ikyh5pwoqvikocr6sr3lt2vuqrfjj8pd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Heading -->
        <?php if(isset($header)): ?>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                </div>
            </header>
    <?php endif; ?>

    <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\xampp81\htdocs\2023\enrique\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>