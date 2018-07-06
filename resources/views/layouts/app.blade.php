<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Letian news</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/appblade.css') }}">
        
         <SCRIPT language="JavaScript">
            <!--
            function changeColor(num){
                 if(num==0){
                   document.getElementById('kakomi-maru2').style.backgroundColor="silver";
                 }else if(num==1){
                    document.getElementById('kakomi-maru2').style.backgroundColor="orange";
                 }else if(num==2){
                     document.getElementById('kakomi-maru2').style.backgroundColor="pink";
                 }else if(num==3){
                     document.getElementById('kakomi-maru2').style.backgroundColor="skybleu";
                  }
            }
            // -->
        </SCRIPT>
        
    </head>
    <body>
        
        @include('commons.navbar')
        @yield('cover')
       <div class="cover-img" style="background-image:url('{{ asset('dogshiro1.png') }}');">  

       
            @include('commons.error_messages')

            @yield('content')
         </div>
        </div>
    </body>
</html>