<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Paradise Corner</title>

    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="{{ asset('assets')}}/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/bootstrap.js"></script>
    <script src="https://aja.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="container" style="background:#ccc">
    <div class="alert alert-info text-center">
        <h1 style="margin-bottom:0px" ><b >Welcome</b> to Pet Paradise Corner</h1>
    </div>
        @include('menu')
        @include('banner')
        @include('sidebar')
        @include('konten') 
        @include('footer')     
    </div>
</body>
</html>