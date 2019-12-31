<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
<div id="app">
            <div >
                  <navbar-component url={{route('logout')}}/>
            </div>
            <br/>
            @if ($type=='etudiant')
            <div  class="col-md-12" >
                    <div class="row">
                            <div class="col-md-3">
                                    <card-component v-bind:etudiant=" {{ json_encode($etudiant)}} " /> </div>
                            <div class="col-md-9 card">
                            <table-component v-bind:notes= "{{ json_encode($notes)}}" /> </div>
                         </div> 
           </div>
           @endif
           @if ($type!='etudiant') 
           <div  class="col-md-12" >
           @if ($message = Session::get('success'))
                        <span>
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ $message }}</strong>
                            </div>
                            </span>
                        @endif
                        @if ($message = Session::get('error'))
                        </span>
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ $message }}</strong>
                            </div>
                         </span>
                        @endif
                    <div class="row">
                        <div class="col-md-3">
                                    <card-component v-bind:admin=" {{ json_encode($admin)}} " /> 
                        </div>
                      
                        <div class="col-md-9 card">
                            <ajouter-component url={{route('ajouter')}} />
                        </div>
                     </div> 
           </div>
           @endif
    </div>
            <script type="text/javascript" src="js/app.js"></script>
</body>
</html>  