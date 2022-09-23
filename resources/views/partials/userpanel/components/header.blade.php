<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>   --}}
    @vite(['resources/css/app.css', 'resources/js/user.js'])
    <title>{{ $title !== "" ? $title : $webtitle}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
</head>
<body class="bg-gray-200 text-gray-700" id="body">
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <x-userSiderbar></x-userSiderbar>
        
    <div class="absolute top-0 w-full">
        <x-userTopnavbar></x-userTopnavbar>

    
    
