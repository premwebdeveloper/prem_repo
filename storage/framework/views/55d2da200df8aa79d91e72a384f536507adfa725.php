<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

	<script src="<?php echo e(asset('resources/assets/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('resources/assets/js/bootstrap.min.js')); ?>"></script>
	
    <!-- Styles -->
    <link href="<?php echo e(asset('resources/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
</head>
<body>