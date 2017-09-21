<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<script src="{{ asset('resources/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('resources/assets/js/bootstrap.min.js') }}"></script>
	
    <!-- Styles -->
    <link href="{{ asset('resources/assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>