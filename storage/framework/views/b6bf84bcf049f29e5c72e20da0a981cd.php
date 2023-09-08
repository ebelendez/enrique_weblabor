<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Using TinyMCE with Laravel Livewire</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tiny.cloud/1/1d1a9ualu33c1e67ikyh5pwoqvikocr6sr3lt2vuqrfjj8pd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="bg-gray-200" style="font-family: Nunito;">


<div class="max-w-7xl mx-auto px-4 py-4 sm:py-6 lg:py-8 sm:px-6 lg:px-8 ">
    <?php echo e($slot); ?>

</div>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp81\htdocs\2023\enrique\resources\views/layouts/tiny-mce.blade.php ENDPATH**/ ?>