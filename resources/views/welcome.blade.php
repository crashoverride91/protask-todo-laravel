<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="/media/logo22.png"/>
        <!-- Styles -->
        <style>
             body {
                background: rgb(70,2,166);
                background: linear-gradient(180deg, rgba(70,2,166,0.9500175070028011) 0%, rgba(17,76,250,1) 100%);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
            }

            .subtitle {
                font-size: 40px;
            }

            .link-log{

                color:white;
                font-size: 2em;
                margin:9px;
                text-decoration: none;
                font-weight: bold;
                text-transform: uppercase;
                

            }

            .link-reg{

                color:rgb(255, 255, 255);
                font-size: 2em;
                margin:9px;
                text-decoration: none;
                font-weight: bold;
                text-transform: uppercase;
            }

            .btn{
                border:1px solid white;
                padding: 10px 10px;
                border-radius: 3px;
                background-color: rgb(245, 7, 118);
            }

            .btn-reg{
                border:1px solid white;
                padding: 10px 10px;
                border-radius: 3px;
                background-color: rgb(14, 221, 100);
            }

            .btn-home{
                border:1px solid white;
                padding: 10px 10px;
                border-radius: 3px;
                background-color: rgb(221, 21, 14);
            }

            .icon{

                margin:5px;
            }
          
            .cover{

                
                color:white;
            }

          

            .box{

                justify-content: space-between;
                flex-direction: row;
               
            }

            .spot{

                text-decoration: none;
                color:yellow;
            }

         

           
        </style>
    </head>
    <body>
        <div class="full-height">

            <div class="content">
                <div class="">
                  <h1 class="cover title"> ProTask</h1>
                  <h4 class="cover subtitle"> Mark and complete your tasks <a class="spot"> with one click!</a> </h4>
                  

                </div>
            </div>

            <div class="flex-center">
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="link-log btn-home"> <i class="fas fa-house-user icon"></i>Go to Dashboard</a>
                    @else
                        
                        <a href="{{ route('login') }}" class="link-log btn">User Member</a>
                    

                        @if (Route::has('register'))
                            
                            <a href="{{ route('register') }}" class="link-reg btn-reg">New User</a>  
                            
                        @endif
                    @endauth
                </div>
            @endif

        </div>
         
        </div>
    </body>
</html>
