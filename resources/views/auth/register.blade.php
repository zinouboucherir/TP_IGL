<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    </br>
    <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 ml-4 ">
                  <register-component url={{route('register')}} />
            </div>
    </div>
</div>
            <script type="text/javascript" src="js/app.js"></script>
</body>
</html>  
