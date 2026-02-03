<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @extends('layouts.default')

    @section('header')
    <h2>This is the contact page!</h2> 
    @endsection

    @section('maincontent')
    <a href="#">Email</a>
    @endsection

    @section('footer')
    <h2>This is the page's footer!</h2>
    @endsection
</body>
</html>