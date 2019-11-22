<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
            <div >
                  <navbar-component />
            </div>
            <br/>
            <div  class="col-md-12" >
                    <div class="row">
                            <div class="col-md-3">
                                    <card-component /> </div>
                            <div class="col-md-9 card">
                                    <table-component /> </div>
                         </div> 
           </div>
    </div>
            <script type="text/javascript" src="js/app.js"></script>
</body>
</html>  