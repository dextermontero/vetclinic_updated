<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>  
    @vite('resources/css/app.css')
    <title>{{ $title !== "" ? $title : $webtitle}}</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body class="bg-gray-200 text-gray-700">
    <x-nav></x-nav>
    
    